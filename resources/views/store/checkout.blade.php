@extends('layouts.master')

@section('content')
@section('title', 'Checkout')

<!--CHECKOUT WRAP BEGIN-->
<section class="checkout-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert team-alert fade in" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-close" aria-hidden="true"></span></button> 
                    Returning customer? <a href="#">Click here to login </a>
                </div>
                <div class="alert team-alert fade in" role="alert"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-close" aria-hidden="true"></span></button> 
                    Have a coupon? <a href="#">Click here to enter your code</a>
                </div>
            </div>
            <div class="col-md-7">
                <h4>Billing Details</h4>
                <div class="customer-info">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>First Name <i>*</i></span>
                                        <input type="text" name="first name">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Last Name <i>*</i></span>
                                        <input type="text" name="last name">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Company Name</span>
                                        <input type="text" name="company name">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Email Address <i>*</i></span>
                                        <input type="text" name="email">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Phone <i>*</i></span>
                                        <input type="text" name="phone">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Country <i>*</i></span>
                                        <select class="basic">
                                            <option>Ukraine</option>
                                            <option>USA</option>
                                            <option>Other</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Address</span>
                                        <input type="text" placeholder="Street address" name="address">
                                    </label>
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Town / City <i>*</i></span>
                                        <input type="text" name="town">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Postcode <i>*</i></span>
                                        <input class="error" type="text" name="postcode">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <ul>
                                <li>
                                    <input type="checkbox" class="filter-check" id="test22">
                                    <label for="test22">Create an account?</label>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <h4>Additional information</h4>
                <div class="customer-info">
                    <div class="item">
                        <label>
                            <span>Order notes <i>*</i></span>
                            <textarea placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h4>Your order</h4>
                <table class="cart-table">
                    <tbody><tr>
                            <th class="product">Product</th>
                            <th class="total">Total</th>
                        </tr>
                        <tr>
                            <td><img class="product-image" src="images/dota/klambi.jpg" alt="cart-product" style="width: 70px; height: 100px;"><strong>FNATIC PRO JACKET</strong></td>
                            <td class="total">£ 120</td>
                        </tr>
                        <tr>
                            <td>Subtotal<br>Shipping</td>
                            <td class="total">£ 120<br>£ 2</td>
                        </tr>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td class="total">£ 122</td>
                        </tr>
                    </tbody></table>
                <div class="cart-total">
                    <div class="delivery-list">
                        <label class="item">
                            <input name="del-check" type="radio">
                            <span class="name">Cheque Payment</span>	
                        </label>
                        <label class="item">
                            <input name="del-check" type="radio">
                            <span class="name">Direct Bank Transfer</span>	
                            <span class="delivery-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span>
                        </label>
                        <label class="item">
                            <input name="del-check" type="radio">
                            <span class="name">PayPal <a href="#">What is PayPal?</a></span>
                            <span class="price"><img src="images/common/card-img.jpg" alt="card"></span>	
                        </label>
                        <label class="item" style="margin-bottom: 40px;">
                            <input name="del-check" type="radio">
                            <span class="name">Cash on Delivery</span>	
                        </label>
                        <a class="proceed" style="font-size: 16px;
                        padding: 18px 28px 16px 28px; width: 100%;">Place order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CHECKOUT WRAP END-->
@endsection