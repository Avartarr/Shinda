<div>
    <div class="row">
        @foreach ($getPro as $getPro)
            <div class="col-6 col-sm-4">
                <div class="product-default">
                    <figure>
                        <a href="">
                            <img src="assets/images/products/product-1.jpg" width="280" height="280" alt="product" />
                        </a>

                        <div class="label-group">
                            <div class="product-label label-hot">{{ $getPro->sellingStatus }}</div>
                            <div class="product-label label-sale">-{{ $getPro->percentage }}%</div>
                        </div>
                    </figure>


                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                {{-- <a href="" class="product-category">category</a> --}}
                            </div>
                        </div>
                        <h3 class="product-title"> {{ $getPro->prodName }}

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">${{ $getPro->Oldprice }}.00</span>
                                <span class="product-price">${{ $getPro->price }}.00</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                @csrf
                                <input type="hidden" name="prod_id" id="" value="{{ $getPro->id }}">
                                <input type="hidden" name="frontimage" id=""
                                    value="{{ $getPro->frontimage }}">
                                <input type="hidden" name="prodName" id="" value="{{ $getPro->prodName }}">
                                <input type="hidden" name="qty" value="1" id="">
                                <input type="hidden" name="price" id="" value="{{ $getPro->price }}">
                                <center><div class="btn-icon-group">
                                    <a href="#"  wire:click="submit({{ $getPro->id }})" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div></center>
                            </div>
                    </div>

                    <br>
                    <br>
                    <!-- End .product-details -->
                </div>
            </div>
            <!-- End .col-sm-4 -->
        @endforeach
        <!-- End .col-sm-4 -->
        <!-- End .col-sm-4 -->
    </div>
</div>

