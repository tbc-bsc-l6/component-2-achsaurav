<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable=['title','firstname','surname','price','pages'];
    protected $guarded=['id'];

    protected $with=['category'];

    public function category(){
        return $this->belongsTo(Category::class);//Eloquent Relationship
    }
}
