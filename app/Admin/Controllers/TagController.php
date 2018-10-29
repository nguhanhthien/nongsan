<?php

namespace App\Admin\Controllers;

use App\Models\Tag;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Tags')
            ->description('All tags')
            ->body($this->grid());
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Tags')
            ->description('Edit tags')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Tags')
            ->description('Create tags')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Tag());

        $grid->id('ID')->sortable();
        $grid->name('Tên')->editable();
        $grid->slug('Đường dẫn');

        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Tag());
        $form->text('name','Tên Tag')->rules('required');
        $form->switch('recommend','Đề xuất');
        $form->switch('hot','Nổi bật');
        $form->switch('new','Mới cập nhật');

        $form->saving(function (Form $form)   {
            $slug =  str_slug(\request()->get('name'));
            $form->model()->slug = $slug ;
        });
        return $form;
    }
}
