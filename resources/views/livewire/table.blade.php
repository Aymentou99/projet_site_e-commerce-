<div>
    <div class="row ">
        @foreach ($products as $item)
            <!-- product 1 -->
            <div class="col-md-12">

                <div class="product-miniature js-product-miniature">

                    <!-- Left Side: Cart Img -->
                    <div class="img_block">

                        <a href="" class="thumbnail product-thumbnail inactiveLink">
                            <img src="{{ url('Admin/images/Products/' . $item->image) }}">
                        </a>


                        <!-- Right Side: Cart Description -->
                        <div class="product_desc">

                            <h1 class="h1 namne_details "> {{ $item->Stock_number }}
                                {{ $item->{'name_' . app()->getLocale()} }}</h1>

                            <!-- SKU -->
                            <div class='parent'>

                                <div class='child product-information-title'>SKU:</div>
                                <div class='child product-information-content'> {{ $item->Stock_number }}</div>

                            </div>

                            <!-- Volume -->
                            <div class='parent mb-3'>

                                <div class='child product-information-title'>Volume:</div>
                                <div class='child'> <span class="business-use">

                                        {{ $item->{'Volume_' . app()->getLocale()} }}
                                    </span>
                                </div>

                            </div>

                            <!-- More details -->
                            <div class="faq-accordion mb-3">

                                <div id="accordion">

                                    <!-- Composition -->
                                    <div class="card">

                                        <div class="card-header" id="headingOne">

                                            <h5 class="product-details-header">

                                                <a class="collapsed" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Composition
                                                </a>

                                            </h5>

                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div class="product-details-body">

                                                {{ $item->{'Composition_' . app()->getLocale()} }}

                                            </div>

                                        </div>

                                    </div>

                                    <!-- Details -->
                                    <div class="card">

                                        <div class="card-header" id="headingTwo">

                                            <h5 class="product-details-header">

                                                <a class="collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Details
                                                </a>

                                            </h5>

                                        </div>

                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">

                                            <div class="product-details-body">
                                                <p>
                                                    {{ $item->{'Details_' . app()->getLocale()} }}

                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- Usage Method -->
                                    <div class="card">

                                        <div class="card-header" id="headingThree">

                                            <h5 class="product-details-header">

                                                <a class="collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    Usage Method
                                                </a>

                                            </h5>

                                        </div>

                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion">

                                            <div class="product-details-body">
                                                <p>

                                                    {{ $item->{'UsageMethod_' . app()->getLocale()} }}

                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class='parent  mb-3'>

                                <div class='child product-information-title'>Quantity :</div>

                                <div class='child'>
                                    <input class="quantity mr-40" min="1" max="{{ $item->qty }}" type="number"
                                        wire:model="quantity.{{ $item->id }}" name="qty">
                                </div>

                            </div>



                            @if ($cart->where('prod_id', $item->id)->count())
                                <button type="button"
                                    wire:click.prevent="remove_FromCart({{ $item->id }},{{ Auth::id() }})"
                                    class="mt-0 mb-0 btn btn-block add-to-cart-btn btn-lg" style="background:red;">
                                    <small>
                                        <i class="fa fa-shopping-cart fa-lg pr-2"></i>
                                        Remove from Cart
                                    </small>
                                </button>
                            @else
                                <button type="button"
                                    wire:click.prevent="add_to_cart({{ $item->id }},{{ Auth::id() }},{{ $item->qty }})"
                                    class="mt-0 mb-0 btn btn-block add-to-cart-btn btn-lg">



                                    <small>
                                        <i class="fa fa-shopping-cart fa-lg pr-2"></i>
                                        Add To Cart
                                    </small>

                                </button>
                            @endif


                        </div>

                    </div>

                </div>
        @endforeach






    </div>

</div>
