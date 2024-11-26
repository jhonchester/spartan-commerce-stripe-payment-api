<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Attributes\Title;
use Livewire\Component;
use Carbon\Carbon;

#[Title('My Order Detail | Spartan Commerce')]
class MyOrderDetailPage extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function render()
{
    $order = Order::where('id', $this->order_id)->first();
    $order_items = OrderItem::with('product')->where('order_id', $this->order_id)->get();
    $user = auth()->user();

    // Format the claim date if it's not null
    $formatted_claim_date = optional($order->claim_date) 
    ? (Carbon::parse($order->claim_date)->isToday() 
        ? 'Pending date' 
        : Carbon::parse($order->claim_date)->format('d-m-Y')) 
    : 'No claim date';
    // Debugging step: Check if the value is correct before passing to the view
   // dd($order->claim_date, $formatted_claim_date);

    return view('livewire.my-order-detail-page', [
        'order' => $order,
        'order_items' => $order_items,
        'user' => $user,
        'formatted_claim_date' => $formatted_claim_date, // Pass to the view
    ]);
}

}
