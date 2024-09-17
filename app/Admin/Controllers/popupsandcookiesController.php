<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Popupsandcookies;

class PopupsandcookiesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Popupsandcookies';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Popupsandcookies());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image(); 
        $grid->column('cookie_name', __('Cookie name'));
        $grid->column('cookie_purpose', __('Cookie purpose'));

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
        $show = new Show(Popupsandcookies::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('cookie_duration', __('Cookie duration'));
        $show->field('cookie_duration_unit', __('Cookie duration unit'));
        $show->field('cookie_name', __('Cookie name'));
        $show->field('cookie_value', __('Cookie value'));
        $show->field('cookie_domain', __('Cookie domain'));
        $show->field('cookie_path', __('Cookie path'));
        $show->field('cookie_secure', __('Cookie secure'));
        $show->field('cookie_http_only', __('Cookie http only'));
        $show->field('cookie_same_site', __('Cookie same site'));
        $show->field('cookie_purpose', __('Cookie purpose'));
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
        $form = new Form(new Popupsandcookies());

        $form->tab(__('Popup Section'), function($form) {
            $form->image('image', __('Popup'))
                ->help('Add your ad image (pop-up).');
        });
        
        $form->tab(__('Cookie Information Section'), function($form) {
            $form->number('cookie_duration', __('Cookie Duration'))
                ->help('Enter the duration of the cookie (e.g., 1 for 1 hour or 2 for 2 hours).');
            
            $form->select('cookie_duration_unit', __('Cookie Duration Unit'))
                ->options([
                    'hours' => 'Hours',
                    'days' => 'Days'
                ])
                ->help('Select the time unit for the cookie duration (hours or days).');
            
            $form->text('cookie_name', __('Cookie name'))
                ->help('The name of the cookie to be stored.');
            
            $form->text('cookie_value', __('Cookie value'))
                ->help('The value to be stored in the cookie (e.g., true, false, session ID).');
            
            $form->text('cookie_domain', __('Cookie domain'))
                ->default(request()->getHost()) 
                ->help('The domain where the cookie will be valid (e.g., example.com).');
            
            $form->text('cookie_path', __('Cookie path'))
                ->default('/') 
                ->help('The path within the site where the cookie will be valid (e.g., "/").');
            
            
            $form->switch('cookie_secure', __('Cookie secure'))
                ->help('Enable this option if the cookie should only be transmitted over a secure HTTPS connection.');
            
            $form->switch('cookie_http_only', __('Cookie http only'))
                ->help('Enable this option if the cookie should be accessible only through HTTP(S) and not JavaScript.');
            
            $form->select('cookie_same_site', __('Cookie same site'))
                ->options([
                    'Lax' => 'Lax',
                    'Strict' => 'Strict',
                    'None' => 'None'
                ])
                ->help('SameSite attribute helps to protect against CSRF attacks. Select Lax, Strict, or None.');
            
            $form->text('cookie_purpose', __('Cookie purpose'))
                ->help('Define the purpose of this cookie (e.g., tracking, performance).');
        });
        

        return $form;
    }
}