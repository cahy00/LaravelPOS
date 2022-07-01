<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    use HasFactory;
		protected $fillable = ['name', 'slug'];

		public function setSlugAttribute($value)
		{
				$this->attributes['slug'] = Str::slug($value);
		}
}
