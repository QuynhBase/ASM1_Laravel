<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const ORDER_STATUS = [
        'pending' => 'Chờ xác nhận',
        'confirmed' => 'Đã xác nhận',
        'preparing' => 'Đang chuẩn bị hàng',
        'shipping' => 'Đang giao',
        'deliverd' => 'Đã giao',
        'cancel' => 'Hủy'
    ];

    const STATUS_PENDING = 'pending';

    const PAYMENT_STATUS = [
        'paid' => 'Đã thanh toán',
        'unpaid' => 'Chưa thanh toán'
    ];

    const UNPAID = 'unpaid';

    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'user_address',
        'user_phone',
        'order_status',
        'payment_status',
        'total_price'
    ];
}
