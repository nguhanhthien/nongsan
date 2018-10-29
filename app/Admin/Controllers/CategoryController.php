<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CategoryController extends Controller
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
            ->header('Danh mục')
            ->description('Danh sách quản lý')
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
            ->description('description')
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
            ->description('description')
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
            ->description('Tạo mới danh mục')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category);

        $grid->id('ID');
        $grid->type()->display(function($type) {
            if($type == 'product')
                return 'Sản phẩm';
                else if($type == 'blog') return 'Bài viết';
                else return 'Không tồn tại';
        });
        $grid->name('Tên');

        $grid->parent_id('Danh mục cha')->display(function($parent_id) {
            return Category::find($parent_id) ? Category::find($parent_id)->name : null;
        });

        $grid->slug('Đường dẫn');
        $grid->thumb()->display(function($icon) {
            return "<img src=".url('storage/'.$icon)." style='width:60px;border-radius:50%;height:60px;object-fit:cover;' class='img img-thumbnail'>";
        });
        
        $grid->filter(function($filter){
            // Remove the default id filter
            $filter->disableIdFilter();
            // Add a column filter
            $filter->like('title', 'Title');
            $filter->in('type', 'Danh mục')->select([
                'product' => 'Sản phẩm',
                'blog' => 'Bài viết'
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
        $show = new Show(Category::findOrFail($id));

        $show->id('ID');
        $show->type('Loại')->as(function ($type) {
           if($type == 'product')
                return 'Sản phẩm';
                else if($type == 'blog') return 'Bài viết';
                else return 'Không tồn tại';
        })->label();

        $show->name('Tên');
        $show->slug('Đường dẫn');
        $show->thumb('Icon')->image();
        $show->description('Mô tả')->text();

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category);
        $form->select('type','Loại')
            ->options([
                'product' => 'Sản phẩm',
                'blog' => 'Bài viết'
            ])->rules('required');
        $form->text('name','Tên danh mục')->rules('required');

        $form->select('parent_id','Danh mục cha')
            ->options(Category::whereNull('parent_id')->pluck('name', 'id'));

        $form->image('thumb')->rules('required');;
        $form->ckeditor('description','Mô tả');

        $form->saving(function (Form $form)   {
            $slug =  str_slug(\request()->get('name'));
            $form->model()->slug = $slug ;
        });

        return $form;
    }
}
