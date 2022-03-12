<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Product extends Model
{
   protected $table= 'products';
    protected $fillable = [
   'name',
   'description',
   'category_id',
   'price',
   'discount_percentage',
   'feature_image',
   'gallery',
   'meta_title',
   'meta_description',
   'meta_image' ,
    ];
    // public function setGalleryAttribute($value)
    // {
    //     $this->attributes['gallery'] = json_encode($value);
    // }
      public function category() {
      return $this->belongsTo(Category::class,'category_id' );
    }
    public $timestamps = false;
}
