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

		protected $hidden = ['image'];
		protected $appends = ['image_url'];

		public function image()
		{
				return $this->morphOne(Image::class, 'imageable');
		}

		public function getImageUrlAttribute()
		{
			$url = '';
			if (strlen($this->image) > 5)
					$url = url('images/' . $this->image->url);

			return $url;

		}

		public function setSlugAttribute($value)
		{
				$this->attributes['slug'] = Str::slug($value);
		}

		public function categories()
		{
				return $this->belongsTo(Category::class);
		}

		

}
