<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\CustomPage;

class CustomPageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CustomPage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomPage());

        $grid->column('id', __('Id'));
        $grid->column('slug', __('Slug'));
        $grid->column('title_en', __('Title en'));
        $grid->column('title_ar', __('Title ar'));
        // $grid->column('content_en', __('Content en'));
        // $grid->column('content_ar', __('Content ar'));
        $grid->column('show_in_header', __('Show in header'));
        $grid->column('show_in_footer', __('Show in footer'));
        $grid->column('show_in_footer_useful_links', __('Show in footer useful links'));
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
        $show = new Show(CustomPage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('slug', __('Slug'));
        $show->field('title_en', __('Title en'));
        $show->field('title_ar', __('Title ar'));
        $show->field('content_en', __('Content en'));
        $show->field('content_ar', __('Content ar'));
        $show->field('show_in_header', __('Show in header'));
        $show->field('show_in_footer', __('Show in footer'));
        $show->field('show_in_footer_useful_links', __('Show in footer useful links'));
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
        $form = new Form(new CustomPage());
    
        // Tab for General Settings
        $form->tab('General Settings', function (Form $form) {
            $form->text('slug', __('Slug'))->help('www.example.com/Your new page name');
            $form->switch('show_in_header', __('Show in header'));
            $form->switch('show_in_footer', __('Show in footer'));
            $form->switch('show_in_footer_useful_links', __('Show in footer useful links'));
        });
    
        // Tab for English Content
        $form->text('page_name_en', __('Page Name (English)'));
            $form->tab('English Content', function (Form $form) {
            $form->text('title_en', __('Title en'));
            $form->ckeditor('content_en', __('Content en'));

        });
    
        // Tab for Arabic Content
        $form->text('page_name_ar', __('Page Name (Arabic)'));
            $form->tab('Arabic Content', function (Form $form) {
            $form->text('title_ar', __('Title ar'));
            $form->ckeditor('content_ar', __('Content ar'));

        });
    
        // Tab for Common SEO Settings
        $form->tab('Common SEO Settings', function (Form $form) {
            $form->select('seo_robots', __('SEO Robots'))
                ->options([
                    'index, follow' => 'Index, Follow',
                    'noindex, nofollow' => 'No Index, No Follow',
                ])
                ->default('index, follow')
                ->help('Choose whether search engines should index this page and follow links.');
        });

        // Tab for English SEO Settings
        $form->tab('English SEO Settings', function (Form $form) {
            $form->text('seo_title_en', __('SEO Title (English)'))
                ->help('This title will appear in search engine results and browser tabs for English pages.');

            $form->textarea('seo_keywords_en', __('SEO Keywords (English)'))
                ->help('Enter keywords related to your page content in English, separated by commas.');

            $form->textarea('seo_description_en', __('SEO Description (English)'))
                ->help('A short description of your page in English, shown in search engine results.');

            $form->text('seo_author_en', __('SEO Author (English)'))
                ->help('The name of the person or organization responsible for the English content.');
        });

        // Tab for Arabic SEO Settings
        $form->tab('Arabic SEO Settings', function (Form $form) {
            $form->text('seo_title_ar', __('SEO Title (Arabic)'))
                ->help('This title will appear in search engine results and browser tabs for Arabic pages.');

            $form->textarea('seo_keywords_ar', __('SEO Keywords (Arabic)'))
                ->help('Enter keywords related to your page content in Arabic, separated by commas.');

            $form->textarea('seo_description_ar', __('SEO Description (Arabic)'))
                ->help('A short description of your page in Arabic, shown in search engine results.');

            $form->text('seo_author_ar', __('SEO Author (Arabic)'))
                ->help('The name of the person or organization responsible for the Arabic content.');
        });
        
        return $form;
    }
    
}