<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Branding;

class BrandingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Branding';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Branding());

        $grid->column('id', __('Id'));
        $grid->column('logo01') ->image();
        $grid->column('logo01_dark') ->image();
        $grid->column('logo02') ->image();
        $grid->column('logo02_dark2') ->image();
        $grid->column('favicon') ->image();
        $grid->column('global_img')->image();
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
        $show = new Show(Branding::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('logo01', __('Logo01'));
        $show->field('logo01_dark', __('logo01_dark'));
        $show->field('logo02', __('Logo02'));
        $show->field('logo02_dark', __('logo02_dark'));
        $show->field('favicon', __('Favicon'));
        $show->field('global_img', __('Global Background Image'));

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
        $form = new Form(new Branding());

        // tab for General Settings
        $form->tab('General Settings', function (Form $form) {
            $form->image('favicon', __('Favicon'))->uniqueName()->removable()->help('Upload the favicon for the site.');
            $form->image('global_img', __('Global Background Image'))->uniqueName()->removable()->help('Upload the global background image.');
        });
    
        // Tab for Light Mode logos
        $form->tab('Light Mode', function (Form $form) {
            $form->image('logo01', __('Logo01 light'))->uniqueName()->removable()->help('Upload the light mode logo.');
            $form->image('logo02', __('Logo02 light'))->uniqueName()->removable()->help('Upload the light mode secondary logo.');
        });
    
        // Tab for Dark Mode logos
        $form->tab('Dark Mode', function (Form $form) {
            $form->image('logo01_dark', __('Logo01 Dark'))->uniqueName()->removable()->help('Upload the dark mode logo.');
            $form->image('logo02_dark', __('Logo02 Dark'))->uniqueName()->removable()->help('Upload the dark mode secondary logo.');
        });
    
        return $form;
    }
    
}
