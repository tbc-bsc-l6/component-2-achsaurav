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

    public function scopeFilter($query, array $filters){//Post::newQuery()->filter()
        
        $query->when($filters['search'] ?? false, function($query,$search){
            $query
                ->where('title', 'like', '%' . $search . '%')
                ->Orwhere('firstname', 'like', '%' . $search . '%');
        });
        
    }

    public function category(){
        return $this->belongsTo(Category::class);//Eloquent Relationship
    }
}
