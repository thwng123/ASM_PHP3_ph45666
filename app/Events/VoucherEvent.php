<?php

namespace App\Events;

use App\Models\Voucher;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VoucherEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */

    public $voucher;
    public function __construct(Voucher $voucher)
    {
        $this->voucher = $voucher;
    }

    
    public function broadcastOn(){
        return new Channel('broadcast-voucher');
    }
    public function broadcastWith(){
        return [
            'code' =>  $this->voucher->code,
            'name' =>  $this->voucher->name,
            'type' =>  $this->voucher->type,
            'discount' =>  $this->voucher->discount,
            'starts_at' =>  $this->voucher->starts_at,
            'expires_at' =>  $this->voucher->expires_at,
            'description' =>  $this->voucher->description,
            'min_amount' =>  $this->voucher->min_amount,
            'max_uses' =>  $this->voucher->max_uses,
        ];
    }
}
