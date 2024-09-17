<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use Illuminate\Support\Facades\Route;
use \App\Models\Footer;

class FooterController extends AdminController
{
    protected $title = 'Footer';

    public function getAvailableLinks()
    {
        $routes = Route::getRoutes();
        $usefulLinks = [];

        foreach ($routes as $route) {
            if (in_array($route->getName(), ['about', 'team', 'aboutCommittee'])) {
                $usefulLinks[$route->getName()] = ucfirst($route->getName());
            }
        }

        return $usefulLinks;
    }

    protected function grid()
    {
        $grid = new Grid(new Footer());

        $grid->column('id', __('Id'));
        $grid->column('custom_title_en', __('Custom title en'));
        $grid->column('custom_title_ar', __('Custom title ar'));
        $grid->column('custom_content_en', __('Custom content en'));
        $grid->column('custom_content_ar', __('Custom content ar'));
        $grid->column('copyrights_en', __('Copyrights en'));
        $grid->column('copyrights_ar', __('Copyrights ar'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Footer::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('custom_title_en', __('Custom title en'));
        $show->field('custom_title_ar', __('Custom title ar'));
        $show->field('custom_content_en', __('Custom content en'));
        $show->field('custom_content_ar', __('Custom content ar'));
        $show->field('useful_links', __('Useful links'));
        $show->field('social_channels', __('Social channels'));
        $show->field('general_logos', __('General logos'));
        $show->field('footer_shape_image', __('Footer Shape Image'));
        $show->field('copyrights_en', __('Copyrights en'));
        $show->field('copyrights_ar', __('Copyrights ar'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Footer());

        $form->tab('General Settings', function (Form $form) {
            $usefulLinks = $this->getAvailableLinks();

            $form->listbox('useful_links', __('Useful Links'))
                ->options($usefulLinks)
                ->help('Select one or more pages to display as useful links');

            $form->list('social_channels', __('Social Channels'))
                ->rules('required|min:5')
                ->sortable()
                ->help('Enter social media URLs or names.');

            $form->multipleImage('general_logos', __('General logos'))
                ->removable()
                ->sortable()
                ->help('Upload one or more general logos.');

            $form->image('footer_shape_image', __('Footer Shape Image'))
                ->help('Upload the footer shape image to display in the footer');
        });

        $form->tab('English Content', function (Form $form) {
            $form->text('custom_title_en', __('Custom title for general logos en'))->default('Contact Us');
            $form->textarea('custom_content_en', __('Custom content en'))->default('Have a question or need assistance?');
            $form->text('copyrights_en', __('Copyrights en'));
        });

        $form->tab('Arabic Content', function (Form $form) {
            $form->text('custom_title_ar', __('Custom title for general logos ar'))->default('اتصل بنا');
            $form->textarea('custom_content_ar', __('Custom content ar'))->default('هل لديك سؤال أو تحتاج إلى مساعدة؟');
            $form->text('copyrights_ar', __('Copyrights ar'));
        });

        return $form;
    }
}
