  $(document).ready(function(){




loadCart();
function loadCart() {

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});





$.ajax({


 type: 'GET',

          url: "/load_to_cart" ,



          success:function(response) {
 $('.cart-count').html('');
               $('.cart-count').html(response.count);

          }
     });





    }





    $('.addToCart').on('click',function(e){
e.preventDefault();

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var product_id =$(this).closest('.product_data').find('.prod_id').val();
var product_qty =$(this).closest('.product_data').find('.qty-input').val();


$.ajax({
          url: "/add_to_cart" ,

          type:"POST",
          data: {
                   'product_id': product_id,
        'product_qty':  product_qty,   _token: "{{csrf_token()}}",
                 },

          success:function(response) {
               swal(response.status);
          }
     });




    });


$('.increment-btn').click(function(e){
e.preventDefault();


var inc_value=$(this).closest('.product_data').find('.qty-input').val();
var value =parseInt(inc_value);


value = isNaN(value)? 0 : value;


value++;


$(this).closest('.product_data').find('.qty-input').val(value);

});


$('.decrement-btn').click(function(e){
e.preventDefault();

var dec_value=$(this).closest('.product_data').find('.qty-input').val();
var value =parseInt(dec_value);


value = isNaN(value) ? 0 : value;

if(value >1) {
value--;
$(this).closest('.product_data').find('.qty-input').val(value);

}

});


$('.delete-cart-item').click(function(e){

e.preventDefault();


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var id=$(this).closest('.product_data').find('.prod_id').val();
$.ajax({

url:"/deletecartitem",
type :"POST",
data : {
'product_id':id, _token: "{{csrf_token()}}",
},


success:function(response) {
    window.location.reload();swal("",response.status,"success");

      }

});

});

$('.changequantity').click(function(e){
e.preventDefault();

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var product_id =$(this).closest('.product_data').find('.prod_id').val();
var product_qty =$(this).closest('.product_data').find('.qty-input').val();
$.ajax({

url:"/changecartitem",
type :"POST",
data : {
'prod_id':product_id,'prod_qty':product_qty , _token: "{{csrf_token()}}",
},


success:function(response){
 window.location.reload();

},

});

});
            });
