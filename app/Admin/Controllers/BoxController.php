<?php

namespace App\Admin\Controllers;

use App\Models\Box;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class BoxController extends Controller
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
            ->header('Khối block')
            ->description('Cài đặt khối')
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
            ->header('Khối block')
            ->description('Cài đặt khối')
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
            ->header('Edit')
            ->description('Cài đặt khối')
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
            ->header('Create')
            ->description('Cài đặt khối')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Box);

        $grid->id('ID');

        $grid->icon()->display(function($icon) {
            return "<img src=".url('storage/'.$icon)." style='width:60px;border-radius:50%;height:60px;object-fit:cover;' class='img img-thumbnail'>";
        });

        $grid->type()->display(function($type) {
            if($type == 1) return "Box dưới slider";
                else return "Box chân trang";
        });

        $grid->column('title');
        $grid->column('info');

        $grid->filter(function($filter){
            // Remove the default id filter
            $filter->disableIdFilter();
            // Add a column filter
            $filter->like('title', 'Title');
            $filter->in('type', 'Type')->select([
                '1' => 'Box dưới slider',
                '2' => 'Box chân trang'
            ]);

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
        $show = new Show(Box::findOrFail($id));

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
        $form = new Form(new Box);

        $form->select('type')
        ->options([1 => 'Box dưới slider', 2 => 'Box chân trang']);
        $form->text('title');
        $form->image('icon');
        $form->ckeditor('info');

        return $form;
    }
}
