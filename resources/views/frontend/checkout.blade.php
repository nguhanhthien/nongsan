@extends('frontend.master')
@section('content')
    <!-- Breadcrumb -->
    <!-- Breadcrumb -->
    <div id="breadcrumb">
        <div class="container">
            <h2 class="title">Thanh toán</h2>

            <ul class="breadcrumb">
                <li><a href="{{route('index')}}" title="Home">Trang chủ</a></li>
                <li><span>Thanh toán</span></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="page-checkout">
            <div class="row">
                <div class="checkout-left col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <p>Returning customer? <a class="login" href="user-login.html">Click here to login</a>.</p>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Address
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <form action="http://tivatheme.com/html/freshmart/index.html" id="formaddress" method="post" class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Country</label>
                                                <select class="form-control">
                                                    <option value="">Select a country</option>
                                                    <option value="australia">Australia</option>
                                                    <option value="brazil">Brazil</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Company Name</label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Address </label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>City </label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="submit" value="Save" class="btn pull-right">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        Shipping
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <form action="http://tivatheme.com/html/freshmart/index.html" id="formshipping" method="post" class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-12">
															<span class="remember-box checkbox">
																<label>
																	<input type="checkbox" checked="checked">Ship to billing address?
																</label>
															</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Country</label>
                                                <select class="form-control">
                                                    <option value="">Select a country</option>
                                                    <option value="australia">Australia</option>
                                                    <option value="brazil">Brazil</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Company Name</label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Address </label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>City </label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="submit" value="Save" class="btn pull-right">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        Payment
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <table class="cart-summary table table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="width-80 text-center">Image</th>
                                            <th>Name</th>
                                            <th class="width-100 text-center">Unit price</th>
                                            <th class="width-100 text-center">Qty</th>
                                            <th class="width-100 text-center">Total</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="product-detail-left-sidebar.html">
                                                    <img width="80" alt="Product Image" class="img-responsive" src="{{asset('theme/img/product/19.jpg')}}">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="product-detail-left-sidebar.html" class="product-name">Organic Strawberry Fruits</a>
                                            </td>
                                            <td class="text-center">
                                                $265
                                            </td>
                                            <td class="text-center">
                                                1
                                            </td>
                                            <td class="text-center">
                                                $265
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="product-detail-left-sidebar.html">
                                                    <img width="80" alt="Product Image" class="img-responsive" src="{{asset('theme/img/product/31.jpg')}}">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="product-detail-left-sidebar.html" class="product-name">Organic Strawberry Fruits</a>
                                            </td>
                                            <td class="text-center">
                                                $150
                                            </td>
                                            <td class="text-center">
                                                2
                                            </td>
                                            <td class="text-center">
                                                $300
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <h4 class="heading-primary">Cart Total</h4>
                                    <table class="table cart-total">
                                        <tbody>
                                        <tr>
                                            <th>
                                                Cart Subtotal
                                            </th>
                                            <td class="total">
                                                $431
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Shipping
                                            </th>
                                            <td>
                                                Free Shipping
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <strong>Order Total</strong>
                                            </th>
                                            <td class="total">
                                                $431
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <h4 class="heading-primary">Payment</h4>
                                    <form action="http://tivatheme.com/html/freshmart/index.html" method="post">
                                        <div class="item">
                                            <input type="checkbox">Pay by bank wire (order processing will be longer)
                                        </div>
                                        <div class="item">
                                            <input type="checkbox">Pay by check (order processing will be longer)
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pull-right">
                        <input type="submit" value="Place Order" name="proceed" class="btn btn-primary">
                    </div>
                </div>

                <div class="checkout-right col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <h4 class="title">Cart Total</h4>
                    <table class="table cart-total">
                        <tbody>
                        <tr class="cart-subtotal">
                            <th>
                                <strong>Cart Subtotal</strong>
                            </th>
                            <td>
                                <strong><span class="amount">$431</span></strong>
                            </td>
                        </tr>
                        <tr class="shipping">
                            <th>
                                Shipping
                            </th>
                            <td>
                                Free Shipping<input type="hidden" value="free_shipping" class="shipping-method" name="shipping_method">
                            </td>
                        </tr>
                        <tr class="total">
                            <th>
                                <strong>Order Total</strong>
                            </th>
                            <td>
                                <strong><span class="amount">$431</span></strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro -->
    @include('partials.layouts.intro')
@endsection