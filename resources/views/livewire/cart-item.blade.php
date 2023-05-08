
 @foreach ($cartItem as $cartItem)
    <tr class="product-row">
        <td>
            <figure class="product-image-container">
                <a href="product.html" class="product-image">
                    <img src="assets/images/products/product-4.jpg" style="width: 100%" alt="product">
                </a>

                <a href="#" wire:click  ="delete({{ $cartItem->id }})" class="btn-remove icon-cancel" title="Remove Product"></a>
            </figure>
        </td>
        <td class="product-col">
            <span class="product-price">{{ $cartItem->prodName }}</span>

        </td>
        <td><span class="product-price">${{ $cartItem->price }}</span></td>
        <td>
            <div class="product-single-qty">
                <div class="row">
                    <button wire:click ="increment({{ $cartItem->id }})" style="height: 48px; margin-right: 5px" class="btn btn-primary">+</button>
                    <input type="text" class="form-control" wire:model= "qty" value="{{ $this->qty }}" name="" id="">
                    <button wire:click ="decrement({{ $cartItem->id }})" style="height: 48px; margin-left: 7px" class="btn btn-danger">-</button>
                </div>
            </div><!-- End .product-single-qty -->
        </td>
        <td class="text-right"><span class="product-price">${{ $cartItem->price * $cartItem->qty}}</span></td>
        
    </tr>
    @endforeach

