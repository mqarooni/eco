<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Language;

class LanguageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Language';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Language());

        $grid->column('id', __('Id'));
        $grid->column('arabic', __('Arabic'));
        $grid->column('english', __('English'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Language::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('arabic', __('Arabic'));
        $show->field('english', __('English'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new \App\Models\Translation());
    
        $arabicTranslations = include resource_path('lang/ar/messages.php');
        $englishTranslations = include resource_path('lang/en/messages.php');
    
        $form->tab(__('Arabic Translations'), function ($form) use ($arabicTranslations) {
            foreach ($arabicTranslations as $key => $value) {
                $form->text("ar_{$key}", __($key))->value($value);
            }
        });
    
        $form->tab(__('English Translations'), function ($form) use ($englishTranslations) {
            foreach ($englishTranslations as $key => $value) {
                $form->text("en_{$key}", __($key))->value($value);
            }
        });
    
        $form->saved(function (Form $form) {
            $arabicTranslations = [];
            $englishTranslations = [];
    
            foreach ($form->model()->toArray() as $key => $value) {
                if (strpos($key, 'ar_') === 0) {
                    $arabicTranslations[str_replace('ar_', '', $key)] = $value;
                } elseif (strpos($key, 'en_') === 0) {
                    $englishTranslations[str_replace('en_', '', $key)] = $value;
                }
            }
    
            $this->saveTranslations($arabicTranslations, 'ar');
            $this->saveTranslations($englishTranslations, 'en');
        });
    
        return $form;
    }
    
    protected function saveTranslations($translations, $lang)
    {
        $path = resource_path("lang/{$lang}/messages.php");
    
        if (!file_exists($path)) {
            file_put_contents($path, "<?php\n\nreturn [];\n");
        }
    
        if (!is_writable($path)) {
            throw new \Exception("The file {$path} is not writable.");
        }
    
        $content = "<?php\n\nreturn " . var_export($translations, true) . ";\n";
    
        if (file_put_contents($path, $content) === false) {
            throw new \Exception("Failed to write to the file {$path}.");
        }
    }
    
    
}
