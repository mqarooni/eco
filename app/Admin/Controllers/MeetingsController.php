<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Meetings;

class MeetingsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Meetings';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Meetings());

        $grid->column('id', __('Id'));
        $grid->column('slug', __('Slug'));
        $grid->column('cover', __('Cover'))->image(); 
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
        $show = new Show(Meetings::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('slug', __('Slug'));
        $show->field('cover', __('Cover'));
        $show->field('image', __('Image'));
        $show->field('date_en', __('Date en'));
        $show->field('date_ar', __('Date ar'));
        $show->field('title_en', __('Title en'));
        $show->field('title_ar', __('Title ar'));
        $show->field('description_en', __('Description en'));
        $show->field('description_ar', __('Description ar'));
        $show->field('meeting_idea_title_en', __('Meeting idea title en'));
        $show->field('meeting_idea_title_ar', __('Meeting idea title ar'));
        $show->field('meeting_idea_en', __('Meeting idea en'));
        $show->field('meeting_idea_ar', __('Meeting idea ar'));
        $show->field('category_en', __('Category en'));
        $show->field('category_ar', __('Category ar'));
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
        $form = new Form(new Meetings());
    
        $form->tab(__('Both Information'), function($form) {
            $form->text('slug', __('Slug'));
            $form->image('cover', __('Cover'));
            $form->image('image', __('Image'));
        });
    
        $form->tab(__('English Information'), function($form) {
            $form->text('date_en', __('Date en'));
            $form->textarea('title_en', __('Title en'));
            $form->ckeditor('description_en', __('Description en'));
            $form->textarea('meeting_idea_title_en', __('Meeting idea title en'));
            $form->table('meeting_idea_en', __('Meeting idea en'), function ($table) {
                $table->textarea('points')->placeholder('Enter rating');
            });
            $form->text('category_en', __('Category en'));
        });
    
        $form->tab(__('Arabic Information'), function($form) {
            $form->text('date_ar', __('Date ar'));
            $form->textarea('title_ar', __('Title ar'));
            $form->ckeditor('description_ar', __('Description ar'));
            $form->textarea('meeting_idea_title_ar', __('Meeting idea title ar'));
            $form->table('meeting_idea_ar', __('Meeting idea ar'), function ($table) {
                $table->textarea('points')->placeholder('Enter rating');
            });
            $form->text('category_ar', __('Category ar'));
        });
    
        return $form;
    }
    
}
