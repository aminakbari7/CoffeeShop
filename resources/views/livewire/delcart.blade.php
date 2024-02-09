<div >
    <section class="ftco-section " dir="rtl">
        @if (session()->exists('msg'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 1000)" x-show="show">
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        </div>
    @endif
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="cart-list">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr class="text-center">
                                        <th ><a dir="ltr" href="{{route('cart')}}" class="nav-link"><span class="icon icon-shopping_cart"><span dir="rtl"class="badge" style="background-color: brown">
                                            <livewire:notif/></span>
                                        </a>
                                    </th>
                                        <th>&nbsp;</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                            @foreach ($cart as $cart)
                                            @csrf
                                            <td class="product-remove">
                                                <a  wire:click="delcart({{$cart->id }})"><span
                                                        class="icon-close"></span></a></td>
    
                                            <td class="image-prod">
                                                <div class="img"
                                                    style="background-image:url({{ asset('assets/images/' . $cart->image) }});">
                                                </div>
                                            </td>
    
                                            <td class="product-name">
                                                <h3>{{ $cart->name }}</h3>
                                                <p>Far far away, behind the word mountains, far from the countries</p>
                                            </td>
    
                                            <td class="price">{{ $cart->price }}</td>
    
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input disabled type="text" name="quantity"
                                                        class="quantity form-control input-number" value="1"
                                                        min="1" max="100">
                                                </div>
                                            </td>
    
                                            <td class="total">$50</td>
                                        </tr><!-- END TR-->
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ">
                        <div class="cart-total mb-3">
                            <h3>Cart Totals</h3>
                            <p class="d-flex">
                                <span>Subtotal</span>
                                <span>$20.60</span>
                            </p>
                            <p class="d-flex">
                                <span>Delivery</span>
                                <span>$0.00</span>
                            </p>
                            <p class="d-flex">
                                <span>Discount</span>
                                <span>$3.00</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Total</span>
                                <span>{{ '$'.$totalprice }}</span>
                            </p>
                        </div>
                        <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to
                                Checkout</a></p>
                    </div>
                </div>
            </div>
        </section>

     

</div>
