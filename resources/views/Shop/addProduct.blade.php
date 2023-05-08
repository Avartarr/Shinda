<x-master>
    @section('content')
        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                style="margin-left: 90%">
                Add New Product
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                        <form action="{{ route("store") }}" method="post" enctype="multipart/form-data">
                            @csrf
                         <span class="product-price">Front Image</span>
                         <input type="file" class="form-control" name="frontimage" id="">

                        <span class="product-price">Product name</span>
                        <input type="text" name="prodName" id="" class="form-control" placeholder="Product name">
                        <br>
                        <span class="product-price">Quantity</span>
                        <input type="number" name="qty" id="" class="form-control" placeholder="Product name">
                        <br>


                        <span class="product-price">Old proce</span>
                        <input type="number" name="Oldprice" id="" class="form-control" placeholder="Product name">
                        <br>


                        <span class="product-price">Price</span>
                        <input type="number" name="price" id="" class="form-control" placeholder="Product name">
                        <br>


                        <span class="product-price">%</span>
                        <input type="number" name="%" id="" class="form-control" placeholder="Enter Percentage">
                        <br>

                        <span class="product-price">Selling Status</span>
                        <select class="form-control"
                        required name="standard" id="sellingStatus">
                        <option disabled>
                           select an option
                        </option>
                        <option value="Hot">Hot
                        </option>
                        <option value="Normal">Normal
                        </option>
                        </select>
                        <br>


                        <span class="product-price">Category</span>
                        <select name="category" id="" class="form-control product-title">
                            <option value="Section1">~~ Section ~~
                            </option>

                            <option value="HairAdvert">Hair Front Advert
                            </option>
                            <option value="NailsAdvert">Nails Advert
                            </option>
                            <option value="LashAdvert">Lash Advert
                            </option>
                            <option value="MakeupAdvert">Makeup Advert
                            </option>

                            <option value="nails">Nails
                            </option>
                            <option value="lash">Lash
                            </option>
                            <option value="makeup">Makeup
                            </option>
                            <option value="hair">Hair
                            </option>
                            <option value="Abouttop">About top
                            </option>
                            <option value="Aboutdown">Aboutdown
                            </option>
                            <option value="Featured">FEATURED
                            </option>
                        </select>
                        <br>

                        <div class="col-sm-10">
                            <select class="form-control"
                                required name="standard" id="Quality">
                                <option disabled>
                                   select an option
                                </option>
                                <option value="average">Average
                                </option>
                                <option value="standard">Standard
                                </option>
                                <option value="premium">Premium
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>


        <div class="row">
            @foreach ($getPro as $get)
            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                <div class="product-default">
                    <figure>
                        <a href="">
                            <img src="assets/images/products/product-1-2.jpg" width="180" height="180"
                                alt="product" />

                            {{-- <img src="{{ asset('storage/' . $get->frontimage ) }}" width="180" height="180" alt="product" /> --}}
                        </a>

                        <div class="label-group">
                            <div class="product-label label-hot">{{ $get->sellingStatus}}</div>
                            <div class="product-label label-sale">-{{ $get->percentage }}%</div>
                        </div>
                    </figure>

                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                        </div>

                        <h3 class="product-title"> <a href="">{{ $get->prodName }}</a>
                        </h3>

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
                            <span class="old-price">${{ $get->Oldprice }}.00</span>
                            <span class="product-price">${{ $get->price }}.00</span>
                            <br>
                            <br>
                            <span class="product-price">Quantity in store: {{ $get->qty }}</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>

            </div>
            @endforeach




        </div>
    @endsection
</x-master>
