<?php

namespace App\Admin\Controllers;

use App\Models\Deal,App\Models\Product,App\Models\Location;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;


class DealController extends Controller
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
            ->header('Quản lý deal')
            ->description('')
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
            ->header('Chi tiết deal')
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
            ->header('Chỉnh sửa deal')
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
            ->header('Tạo mới deal')
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
        $grid = new Grid(new Deal);

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
        $show = new Show(Deal::findOrFail($id));

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
        $form = new Form(new Deal);

        $form->tab('Thông tin cơ bản', function ($form) {
            $form->text('name','Tên deal')->rules('required');

            $form->select('product_id','Lựa chọn sản phẩm')
                    ->options(Product::where('active',true)->pluck('name', 'id'))->rules('required');
            $form->number('unit_min','Số lượng đặt hàng nhỏ nhất')->rules('required');;
            // $form->datetime('date_start','Ngày bắt đầu');
            $form->datetimeRange('date_start','date_end','Thời gian đặt hàng')->rules('required');
            $form->datetime('date_protocol','Ngày giao hàng dự kiến')->rules('required');

            $form->multipleSelect('areas','Khu vực vận chuyển')
                    ->options(Location::whereNull('parent_code')->orderBy('id', 'asc')->pluck('name_with_type', 'code'));
                    
        })->tab('Mô tả & khuyến mãi', function ($form) {    
            $form->ckeditor('promotion','Mô tả khuyến mãi');
            $form->ckeditor('description','Mô tả deal')->rules('required');
        });

        $form->saving(function (Form $form)  {
            $slug =  str_slug(\request()->get('name'));
            $date_end   = strtotime(\request()->get('date_start'));
            $date_protocol   = strtotime(\request()->get('date_protocol'));

            if($date_end > $date_protocol){
                $error = new MessageBag([
                    'title'   => 'Lỗi cấu hình!',
                    'message' => 'Thời gian giao hàng dự kiến không được trước ngày kết thúc đặt hàng.',
                ]);

                return back()->with(compact('error'));
            }

            $form->model()->slug    = $slug ;
        });

        return $form;
    }
}
