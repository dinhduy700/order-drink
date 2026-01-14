<?php

namespace App\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;

class TrackingOrder extends Model
{
	protected $fillable = [
		'order_session_id',
		'member_name',
		'drink_name',
		'size',
		'note',
		'status',
	];
}
