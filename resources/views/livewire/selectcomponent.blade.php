<div>

<div class="shop-page-wraper mt-5 mb-5 mx-5 pt-5 pr-2 pl-2">

                <div class="container">

                    <div class="row">


                        <div class="col-xs-12 col-md-3 sidebar-shop">

                            <div class="shop-categori-title">
                                <h3>Categories</h3>
                            </div>


                            <div class="sidebar-product-categori">

                                <div class="facet">

                                    <div class="widget-content">

 @livewire('category-component', ['category ' => $category   ])

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Right Side: Shop List -->
                        <div class="col-xs-12 col-md-9 shop-content">

                            <div class="product-toolbar">

                                <div class="woocommerce-result-count text-uppercase">
                                    Products
                                </div>

                                <div class="woocommerce-ordering">

                                    <form method="get" class="woocommerce-ordering hidden-xs">

                                        <div class="orderby-wrapper">


                                            <label>Sort By</label>

                                            <select class="nice-select-menu orderby" wire:model="sorting">
                                                  <option value="default"  selected="selected">Default sorting </option>
                                                <option value="rating" >Ratings</option>

                                            </select>


                                        </div>

                                    </form>

                                </div>

                                <div class="shop-page-product-area tab-content">

                                    <div id="list" class="tab-pane fade in show active">

                            @livewire('table', ['products ' => $products ])

                            </div>

        </div>
                </div>
                          </div>     </div>
    </div>    </div>




</div>
