$(document).ready(function () {
    $(document).on("click", ".category_checkbox", function () {
        var ids =[];

        var counter = 0;






        if (counter == 0) {
            $(".causes_div").empty();
            $(".causes_div").append("No Data Found");
        } else {
            fetchCauseAgainstCategory(ids);
        }
    });
});

function fetchCauseAgainstCategory(id) {
    $(".causes_div").empty();

    $.ajax({
        type: "GET",
        url: "get_causes_against_category/" + id,
        success: function (response) {
            var response = JSON.parse(response);
            console.log(response);

            if (response.length == 0) {
                $(".causes_div").append("No Data Found");
            } else {
                response.forEach((element) => {
                    $(".causes_div")
                        .append(`
                                            <div class="col-md-12">

                                                <div class="product-miniature js-product-miniature" >

                                                    <!-- Left Side: Cart Img -->
                                                    <div class="img_block">

                                                        <a href="" class="thumbnail product-thumbnail inactiveLink">
                                                            <img src="{{url('images/products/1/prod1-300x300.png')}}" alt="S101 Deep cleansing cream">
                                                        </a>

                                                        <div class="hook-reviews">
                                                            <div class="comments_note">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Right Side: Cart Description -->
                                                    <div class="product_desc">

                                                        <h1 class="h1 namne_details ">
                                                        ${element.Stock_number}
                                                        ${element.name}

                                                        <!-- SKU -->
                                                        <div class='parent'>

                                                            <div class='child product-information-title'>SKU:</div>
                                                            <div class='child product-information-content'> {    ${element.Stock_number}</div>

                                                        </div>

                                                        <!-- Volume -->
                                                        <div class='parent mb-3'>

                                                            <div class='child product-information-title'>Volume:</div>
                                                            <div class='child' > <span class="business-use">

    ${element.volume}
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

                                                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                                Composition
                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                                        <div class="product-details-body">

                                                 ${element.Composition }

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                                <div class="card">

                                                                    <div class="card-header" id="headingTwo">

                                                                        <h5 class="product-details-header">

                                                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                                Details
                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                                                                        <div class="product-details-body">
                                                                           <p>
                 ${element.Details }

                                                                           </p>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <!-- Usage Method -->
                                                                <div class="card">

                                                                    <div class="card-header" id="headingThree">

                                                                        <h5 class="product-details-header">

                                                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                                Usage Method
                                                                            </a>

                                                                        </h5>

                                                                    </div>

                                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">

                                                                        <div class="product-details-body">
                                                                           <p>

             ${element.UsageMethod }

                                                                           </p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                           <form action="{{url('add_to_cart')}}" method="Post">
                                                            @csrf
                                                        <div class='parent  mb-3'>

                                                            <div class='child product-information-title'>Quantity :</div>

                                                            <div class='child'>
                                                                <input class="quantity mr-40" min="1" max="${element.qty}" value="1" type="number" name="qty">
                                                            </div>

                                                        </div>
<input type="hidden" name="product_id" value="${element.id}" >
                                                        <!-- Add To Cart -->
                                                        <button type="button"

                                                        class="mt-0 mb-0 btn btn-block add-to-cart-btn btn-lg">

                                                            <small>
                                                                <i class="fa fa-shopping-cart fa-lg pr-2"></i>
                                                                Add To Cart
                                                            </small>

                                                        </button>
                                                    </form>

                                                    </div>

                                                </div>

                                            </div>`);
                });
            }
        },
    });
}
