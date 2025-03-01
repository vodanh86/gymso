<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('code', __('Code'));
        $grid->column('description', __('Description'));
        $grid->column('title', __('Title'));
        $grid->column('content', __('Content'));
        $grid->column('button', __('Button'));
        $grid->column('image', __('Image'))->image();

        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
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
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('code', __('Code'));
        $show->field('description', __('Description'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('button', __('Button'));
        $show->field('image', __('Image'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post());

        $form->text('code', __('Code'));
        $form->textarea('description', __('Description'));
        $form->textarea('title', __('Title'));
        $form->textarea('content', __('Content'));
        $form->textarea('button', __('Button'));
        $form->image('image', __('Image'));

        return $form;
    }
}
