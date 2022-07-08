<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

		// protected $guarded = ['id'];
		protected $fillable = [
			'user_id', 'cart_id', 'invoice', 'total',
			'pay', 'change', 'status'
		];

		public function users()
		{
				return $this->belongsTo(User::class);
		}

		public function carts()
		{
				return $this->belongsTo(Cart::class);
		}
}
