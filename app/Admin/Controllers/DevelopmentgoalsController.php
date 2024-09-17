<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Developmentgoals;

class DevelopmentgoalsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Developmentgoals';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Developmentgoals());

        $grid->column('id', __('Id'));
        $grid->column('image') ->image();
        $grid->column('title_en', __('Title en'));
        $grid->column('title_ar', __('Title ar'));


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
        $show = new Show(Developmentgoals::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('title_en', __('Title en'));
        $show->field('description_en', __('Description en'));
        $show->field('title_ar', __('Title ar'));
        $show->field('description_ar', __('Description ar'));
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
        $form = new Form(new Developmentgoals());

        $form->tab('English Content', function (Form $form) {
            $form->image('image', __('Icon'));
            $form->textarea('title_en', __('Title en'));
            $form->ckeditor('description_en', __('Description en'));
        });
        
        $form->tab('Arabic Content', function (Form $form) {
            $form->textarea('title_ar', __('Title ar'));
            $form->ckeditor('description_ar', __('Description ar'));
        });
        

        return $form;
    }
}
