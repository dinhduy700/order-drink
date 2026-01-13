<?php

namespace App\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;

class OrderSession extends Model
{
	protected $fillable = [
		'owner_invite',
		'session_name',
		'menu_urls',
		'budget_limit',
	];
}
