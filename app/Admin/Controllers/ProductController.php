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
            ->header('Sản phẩm')
            ->description('Danh sách sản phẩm')
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
            ->header('Chi tiết sản phẩm')
            ->description('')
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
            ->header('Chỉnh sửa sản phẩm')
            ->description('')
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
            ->header('Tạo mới sản phẩm')
            ->description('')

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
        // $grid->model()->category();
        $grid->paginate(20);

        $grid->id('ID')->sortable();
        // $grid->images()->first()->image();
        $grid->images()->display(function($images) {
           return "<img src=".url('storage/'.$images[0])." style='width:60px;border-radius:50%;height:60px;object-fit:cover;' class='img img-thumbnail'>";
        });

        $grid->name('Tên sản phẩm')->display(function($name) {
           return $name;
        })->sortable();
        $grid->column('category.name','Danh mục')->label();

        $grid->amount('Giá bán')->display(function($amount) {
           return number_format($amount,0,',','.');
        })->sortable();

        $grid->column('unit.value','Đơn vị')->label();

        $grid->quantity('Số lượng')->sortable();

        $states = [
            'on' => ['text' => 'YES'],
            'off' => ['text' => 'NO'],
        ];

        $grid->column('Trạng thái')->switchGroup([
            'active'        => 'Kinh doanh',
            'hot'           => 'Neo sản phẩm HOT',
        ], $states);

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
        $show->name();
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
            $form->currency('amount','Đơn giá / đơn vị tiêu dùng')->symbol('$');
            $form->number('quantity','Số lượng trong kho');
            $form->select('unit_id','Đơn vị')
                ->options(Unit::all()->pluck('value', 'id'));
            // $form->number('unit','Đơn vị tiêu dùng');
            $form->switch('hot');
            $form->switch('active','Kinh doanh');

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
            $form->model()->slug    = $slug ;
        });

        return $form;
    }
}
