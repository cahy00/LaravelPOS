<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

		// protected $guarded = ['id'];
		protected $fillable = [
			'name', 'slug'
		];

		public function setSlugAttribute($value)
		{
				$this->attributes['slug'] = Str::slug($value);
		}

		public function items()
		{
				return $this->hasMany(Item::class);
		}
}
