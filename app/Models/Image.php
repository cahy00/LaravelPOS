<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

		public $timestamp = false;

		protected $fillable = ['url'];

		public function imageable()dsds
		{
				return $this->morphTo();
		}

		public function getImageUrlAttribute()
		{
				$url = '';
				if(strlen($this->url)>5)
					$url = url('images/' . $this->url);

				return $url;
		}
}
