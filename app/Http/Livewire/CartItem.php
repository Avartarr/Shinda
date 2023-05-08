<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class CartItem extends Component
{
    public $count = 0;
    public $cartItem, $qty = 1;

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.cart-item');
    }

    function increment($id)
    {
        if($this->qty <  10){
            $this->qty++;
           }
        Cart::find($id);
        Cart::where("id",$id)->update([
            "qty"=> $this->qty
        ]);
    }
    function decrement($id)
    {
        if($this->qty > 1){
            $this->qty--;
        }
        Cart::find($id);
        Cart::where("id",$id)->update([
            "qty"=> $this->qty
        ]);

    }

    function delete($id)
    {
         $catId= Cart::find($id);
         if($catId == null){
         }else{
            $catId->delete();
            $this->emit('refreshParent');
         }
    }

}
