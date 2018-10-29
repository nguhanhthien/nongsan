<?php

namespace App\Admin\Controllers;

use App\Models\Product,App\Models\Category,App\Models\Unit,App\Models\Location,App\Models\Tag;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ProductController extends Controller
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
            ->header('Index')
            ->description('description')
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
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->id('ID');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

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
        $show = new Show(Product::findOrFail($id));

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
        $form = new Form(new Product);
        

        $form->tab('Thông tin cơ bản', function ($form) {

            $form->text('name','Tên sản phẩm');
            $form->text('barcode','Mã sản phẩm');
            $form->select('cate_id','Danh mục')
                ->options(Category::all()->pluck('name', 'id'));
            $form->currency('amount','Đơn giá')->symbol('$');
            $form->number('quantity','Số lượng trong kho');
            $form->select('unit_id','Đơn vị')
                ->options(Unit::all()->pluck('value', 'id'));
            $form->switch('hot');

            $form->multipleImage('images','Hình ảnh');
            $form->text('video','Đường dẫn video');
            $form->multipleSelect('areas','Khu vực vận chuyển')
                ->options(Location::whereNull('parent_code')->pluck('name_with_type', 'code'));

            $form->multipleSelect('tags','Tags')
                ->options(Tag::all()->pluck('name', 'slug'));
            
        })->tab('Thông tin chi tiết', function ($form) {

           $form->textarea('short_description','Mô tả ngắn');
           $form->ckeditor('description','Mô tả');
           
        })->tab('Khả năng cung ứng', function ($form) {
           $form->ckeditor('supply_ability','Khả năng cung ứng');
           
        })->tab('Đóng gói và vận chuyển', function ($form) {
           $form->ckeditor('pack_delivery','Đóng gói và vận chuyển');
           
        })->tab('Chứng nhận', function ($form) {
           $form->ckeditor('certification','Chứng nhận');
           
        });

        $form->saving(function (Form $form)  {
            $slug =  str_slug(\request()->get('name'));
            $form->model()->slug = $slug ;
        });

        return $form;
    }
}
