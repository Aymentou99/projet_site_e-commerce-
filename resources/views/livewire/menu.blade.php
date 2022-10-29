<div>



    <ul>
        @foreach ($cart as $item)
            <li>

                <div class="right_block">
                    <span class="product-name">{{ $item->products->{'name_' . app()->getLocale()} }}</span>

                    <a href="#" class="remove-from-cart"
                        wire:click.prevent="removeFromCart({{ $item->prod_id }},{{ Auth::id() }})"><i
                            class="fa fa-remove pull-xs-left"></i></a>
                    <div class="attributes_content">
                        <span><strong>qty</strong>: {{ $item->prod_qty }}</span><br>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>


    <div class="checkout">
        <a href="{{ url('cart') }}" class="btn btn-primary">checkout</a>
    </div>







</div>
