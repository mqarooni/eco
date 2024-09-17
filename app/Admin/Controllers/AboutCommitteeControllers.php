<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\AboutCommittee;

class AboutCommitteeControllers extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'AboutCommittee';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AboutCommittee());

        $grid->column('id', __('Id'));
        $grid->column('title_en', __('Title en'));
        // $grid->column('content_en', __('Content en'));
        $grid->column('title_ar', __('Title ar'));
        // $grid->column('content_ar', __('Content ar'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(AboutCommittee::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title_en', __('Title en'));
        $show->field('content_en', __('Content en'));
        $show->field('title_ar', __('Title ar'));
        $show->field('content_ar', __('Content ar'));
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
        $form = new Form(new AboutCommittee());
    
        // Tab for English content
        $form->tab('English', function (Form $form) {
            $form->text('title_en', __('Title en'))->default('Vision');
            $form->ckeditor('content_en', __('Content en'))->default('Ensuring the rights of persons with disabilities and their integration into society...');
        });
    
        // Tab for Arabic content
        $form->tab('Arabic', function (Form $form) {
            $form->text('title_ar', __('Title ar'))->default('الرؤية');
            $form->ckeditor('content_ar', __('Content ar'))->default('...ضمان حقوق الأشخاص ذوي الإعاقة ودمجهم في المجتمع.');
        });
    
        return $form;
    }
    
}
