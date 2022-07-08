<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Item extends Model
{
    use HasFactory;

		// protected $guarded = ['id'];
		protected $fillable = [
			'category_id', 'barcode', 'name', 'description', 'price', 'quantity'
		];

		public function setSlugAttribute($value)
		{
				$this->attributes['slug'] = Str::slug($value);
		}

		public function categories()
		{
				return $this->belongsTo(Category::class);
		}

		public function items()
		{
				return $this->hasMany(Item::class);
		}

}
