<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Landing;

class LandingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Landing';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Landing());
    
        $grid->column('id', __('Id'));
        $grid->column('title_en', __('Title en'));
        $grid->column('title_ar', __('Title ar'));
        // Comment out or remove lines that add columns you don't want to display
        // $grid->column('subtitle_en', __('Subtitle en'));
        // $grid->column('subtitle_ar', __('Subtitle ar'));
        // $grid->column('cta_en', __('Cta en'));
        // $grid->column('cta_ar', __('Cta ar'));
        $grid->column('background')->image();
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
        $show = new Show(Landing::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title_en', __('Title en'));
        $show->field('title_ar', __('Title ar'));
        $show->field('subtitle_en', __('Subtitle en'));
        $show->field('subtitle_ar', __('Subtitle ar'));
        $show->field('cta_en', __('Cta en'));
        $show->field('cta_ar', __('Cta ar'));
        $show->field('background', __('Background'));
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
        $form = new Form(new Landing());
    
        // Tab for English fields
        $form->tab('English', function (Form $form) {
            $form->text('title_en', __('Title en'));
            $form->text('subtitle_en', __('Subtitle en'));
            $form->text('cta_en', __('Cta en'));
            $form->image('background', __('Background'))->uniqueName();
        });
    
        // Tab for Arabic fields
        $form->tab('Arabic', function (Form $form) {
            $form->text('title_ar', __('Title ar'));
            $form->text('subtitle_ar', __('Subtitle ar'));
            $form->text('cta_ar', __('Cta ar'));
            // Use the same image field for background in both tabs if it's common
        });
    
        return $form;
    }
    
}
