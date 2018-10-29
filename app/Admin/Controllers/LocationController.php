<?php

namespace App\Admin\Controllers;

use App\Models\Location;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class LocationController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Đơn vị hành chính')
            ->description('Quản lý đơn vị hành chính')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('Quản lý đơn vị hành chính')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Chỉnh sửa')
            ->description('Quản lý đơn vị hành chính')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Tạo mới')
            ->description('Quản lý đơn vị hành chính')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Location);

        $grid->id('ID');
        $grid->name('Name');
        $grid->slug('Slug');
        $grid->code('Mã hành chính');
        $grid->type('Type');
        $grid->path_with_type('Tên đầy đủ');

        $grid->filter(function($filter){
            // Remove the default id filter
            $filter->disableIdFilter();
            // Add a column filter
            $filter->where(function ($query) {
                $query->where('name', 'like', "%{$this->input}%")
                    ->orWhere('slug', 'like', "%{$this->input}%")
                    ->orWhere('code', 'like', "%{$this->input}%")
                    ->orWhere('path_with_type', 'like', "%{$this->input}%");
            }, 'Tên đơn vị');
            // $filter->in('type', 'Type')->multipleSelect(['1' => 'Box dưới slider','2' => 'Box chân trang']);

        });

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
        $show = new Show(Location::findOrFail($id));

        $show->id('ID');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Location);

        $form->display('ID');
        $form->display('Created at');
        $form->display('Updated at');

        return $form;
    }
}
