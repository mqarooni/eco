<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Team;

class TeamController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Team';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Team());

        // $grid->column('id        
        $grid->column('id', __('Id'));
        $grid->column('slug', __('Slug'));
        $grid->column('cover', __('Cover'))->image(); 
        $grid->column('name_en', __('Name en'));
        $grid->column('name_ar', __('Name ar'));

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
        $show = new Show(Team::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('slug', __('Slug'));
        $show->field('cover', __('Cover'));
        $show->field('image', __('Image'));
        $show->field('email', __('Email'));
        $show->field('social', __('Social'));
        $show->field('phone', __('Phone'));
        $show->field('name_en', __('Name en'));
        $show->field('position_en', __('Position en'));
        $show->field('title_en', __('Title en'));
        $show->field('experience_en', __('Experience en'));
        $show->field('personal_information_en', __('Personal information en'));
        $show->field('skills_en', __('Skills en'));
        $show->field('rating_en', __('Rating en'));
        $show->field('name_ar', __('Name ar'));
        $show->field('position_ar', __('Position ar'));
        $show->field('title_ar', __('Title ar'));
        $show->field('experience_ar', __('Experience ar'));
        $show->field('personal_information_ar', __('Personal information ar'));
        $show->field('skills_ar', __('Skills ar'));
        $show->field('rating_ar', __('Rating ar'));
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
        $form = new Form(new Team());


        $form->tab(__('Both Information'), function($form) {
            $form->text('slug', __('Slug'));
            $form->image('cover', __('Cover'));
            $form->image('image', __('Image'));
            $form->email('email', __('Email'));
            $form->phonenumber('phone', __('Phone'));
            $form->table('social', __('Social Links'), function ($table) {
                $table->text('icon')->placeholder('Enter icon class (fa-instagram)');
                $table->url('link')->placeholder('Enter URL (e.g., https://facebook.com/username)');
            });
        });

        $form->tab(__('English Information'), function($form) {
            $form->text('name_en', __('Name en'));
            $form->text('position_en', __('Position en'));
            $form->textarea('title_en', __('Title en'));
            $form->text('experience_en', __('Experience en'));
            $form->ckeditor('personal_information_en', __('Personal information en'));
            $form->ckeditor('skills_en', __('Skills en'));
            $form->table('rating_en', __('Rating en'), function ($table) {
                $table->text('rating')->placeholder('Enter rating');
                $table->text('description')->placeholder('Enter description');
            });
        });

        $form->tab(__('Arabic Information'), function($form) {
            $form->text('name_ar', __('Name ar'));
            $form->text('position_ar', __('Position ar'));
            $form->textarea('title_ar', __('Title ar'));
            $form->text('experience_ar', __('Experience ar'));
            $form->ckeditor('personal_information_ar', __('Personal information ar'));
            $form->ckeditor('skills_ar', __('Skills ar'));
            $form->table('rating_ar', __('Rating ar'), function ($table) {
                $table->text('rating')->placeholder('Enter rating');
                $table->text('description')->placeholder('Enter description');
            });
        });

        return $form;
    }

}