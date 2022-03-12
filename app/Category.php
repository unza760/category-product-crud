<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Category extends Model
{
    protected $table = 'categories';
   
    protected $fillable = [ 
        'meta_title',
       'meta_description',
       'meta_image',
];

    public function products() {
        return $this->hasMany(Product::class,'category_id'); 
      }
      public $timestamps = false;
}
