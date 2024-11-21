<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'method',
        'amount',
        'status',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function user()  
    {
        $this->belongsTo(User::class);    
    }

    public function order()  
    {
        return $this->belongsTo(Order::class);    
    }
}
