<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Festivals;

class FestivalsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Festivals';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Festivals());

        $grid->column('id', __('Id'));
        $grid->column('slug', __('Slug')); // Add slug to grid
        $grid->column('image') ->image();
        $grid->column('title_en', __('Title en'));
        $grid->column('title_ar', __('Title ar'));
        // $grid->column('overview_en', __('Overview en'));
        // $grid->column('overview_ar', __('Overview ar'));
        // $grid->column('requirments_en', __('Requirments en'));
        // $grid->column('requirments_ar', __('Requirments ar'));
        $grid->column('time_en', __('Time en'));
        $grid->column('time_ar', __('Time ar'));
        $grid->column('date_en', __('Date en'));
        $grid->column('date_ar', __('Date ar'));
        // $grid->column('phone_en', __('Phone en'));
        // $grid->column('phone_ar', __('Phone ar'));
        $grid->column('catagory_en', __('Catagory en'));
        $grid->column('catagory_ar', __('Catagory ar'));
        // $grid->column('location_en', __('Location en'));
        // $grid->column('location_ar', __('Location ar'));
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
        $show = new Show(Festivals::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('slug', __('Slug'));
        $show->field('image', __('Image'));
        $show->field('title_en', __('Title en'));
        $show->field('title_ar', __('Title ar'));
        $show->field('overview_en', __('Overview en'));
        $show->field('overview_ar', __('Overview ar'));
        $show->field('requirments_en', __('Requirments en'));
        $show->field('requirments_ar', __('Requirments ar'));
        $show->field('time_en', __('Time en'));
        $show->field('time_ar', __('Time ar'));
        $show->field('date_en', __('Date en'));
        $show->field('date_ar', __('Date ar'));
        $show->field('phone_en', __('Phone en'));
        $show->field('phone_ar', __('Phone ar'));
        $show->field('catagory_en', __('Catagory en'));
        $show->field('catagory_ar', __('Catagory ar'));
        $show->field('location_en', __('Location en'));
        $show->field('location_ar', __('Location ar'));
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
    $form = new Form(new Festivals());

    // General Settings Tab
    $form->tab('General Settings', function (Form $form) {
            $form->text('slug', __('Slug'))->help('Enter a unique slug for the festival');
            $form->image('image', __('Image'))->help('Upload a representative image for the festival');
    });

    // English Content Tab
    $form->tab('English Content', function (Form $form) {
        $form->text('title_en', __('Title (English)'))
            ->help('Enter the title of the festival in English');
        $form->ckeditor('overview_en', __('Overview (English)'))
            ->help('A short overview of the festival in English');
        // Replacing the text input with a list component for requirements
        $form->list('requirments_en', __('Requirements (English)'))
            ->help('Enter special requirements for attending the festival, each in a new line.')
            ->sortable(); // Enables sorting of the list items
        $form->text('time_en', __('Time (English)'))
            ->help('Enter the festival time in English');
        $form->text('date_en', __('Date (English)'))
            ->help('Enter the festival date in English');
        $form->text('phone_en', __('Phone (English)'))
            ->help('Enter the phone contact information in English');
        $form->text('catagory_en', __('Category (English)'))
            ->help('Enter the festival category in English');
        $form->text('location_en', __('Location (English)'))
            ->help('Enter the location of the festival in English');
    });

    // Arabic Content Tab
    $form->tab('Arabic Content', function (Form $form) {
        $form->text('title_ar', __('Title (Arabic)'))
            ->help('Enter the title of the festival in Arabic');
        $form->ckeditor('overview_ar', __('Overview (Arabic)'))
            ->help('A short overview of the festival in Arabic');
        // Replacing the text input with a list component for requirements
        $form->list('requirments_ar', __('Requirements (Arabic)'))
            ->help('Enter special requirements for attending the festival, each in a new line.')
            ->sortable(); // Enables sorting of the list items
        $form->text('time_ar', __('Time (Arabic)'))
            ->help('Enter the festival time in Arabic');
        $form->text('date_ar', __('Date (Arabic)'))
            ->help('Enter the festival date in Arabic');
        $form->text('phone_ar', __('Phone (Arabic)'))
            ->help('Enter the phone contact information in Arabic');
        $form->text('catagory_ar', __('Category (Arabic)'))
            ->help('Enter the festival category in Arabic');
        $form->text('location_ar', __('Location (Arabic)'))
            ->help('Enter the location of the festival in Arabic');
    });

    return $form;
}

}
