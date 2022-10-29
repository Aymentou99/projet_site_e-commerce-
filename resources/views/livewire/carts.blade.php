<div>


    @foreach ($cartitem as $item)
        <tr>
            <td class="product-thumbnail">
                <a href="#" class="inactiveLink"><img
                        src="{{ asset('Admin/images/Products/' . $item->products->image) }}" alt="cart-image"></a>
            </td>
            <td class="product-name"><a href="#"
                    class="inactiveLink">{{ $item->products->{'name_' . app()->getLocale()} }}</a></td>
            @if ($item->products->qty >= $item->prod_qty)
                <td class="product-quantity">
                    <div class="container">


                        <input class="quantity mr-40" type="number" value="{{ $item->prod_qty }}" min="1"
                            max="{{ $item->qty }}" name="qty">



                    </div>
                </td>
            @else
                <td class="product-quantity">out of stocks</td>
            @endif
            <td class="product-remove">
                <a href="#" wire:click="removeCart({{ $item->prod_id }},{{ Auth::id() }}  )"
                    class="remove-from-cart"><i class="fa fa-remove pull-xs-left"></i></a>
            </td>


        </tr>
    @endforeach



</div>
