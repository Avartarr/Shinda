<?php

namespace App\Http\Livewire;

use App\Models\Admin;
use App\Models\Cart as ModelsCart;
use Livewire\Component;

class Cart extends Component
{
    // public $myimage,$pro,$price,$qty,$proId;
    // public $all,$average,$stan,$pre;

    public $getPro;

    public function render()
    {
        return view('livewire.cart');
    }


    function submit($id)
    {
        $get = Admin::find($id);
        $input = new ModelsCart();
        $input->frontimage = $get->frontimage;
        $input->prodName = $get->prodName;
        $input->prod_id = $get->id;
        $input->qty = 1;
        $input->price= $get->price;
        $getCheck = ModelsCart::where('prodName',$input['prodName'])->where('prod_id',$input['prod_id'])->get();
        if(count($getCheck) > 0){
            // Session()->flash('duplicate', 'Duplicate Entry'." ".$input->prodName." ");
            $this->emit('refreshExtensions');
        }else{
            $input->save();
            // Session()->flash('message', 'Successfully Added To Cart'." ".$input->prodName);
            $this->emit('refreshExtensions');
        }
    }





}
