<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('My Order Detail | Spartan Commerce')]
class MyOrderDetailPage extends Component
{
    public $order_id;
    public function mount($order_id){
        $this->order_id= $order_id;
       
    }
    
    public function render()
    {
        $order_items = OrderItem::with('product')->where('order_id', $this->order_id)->get();
        $order = Order::where('id', $this->order_id)->first();
        $user = auth()->user();
        $order_items = OrderItem::with('product')->where('order_id', $this->order_id)->get();
        return view('livewire.my-order-detail-page', [
            'order_items' => $order_items,
            'order' => $order,
            'user' => $user,
        ]);
    }
}
