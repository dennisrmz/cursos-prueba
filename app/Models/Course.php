<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\ApiScopesTrait;

class Course extends Model
{
    use HasFactory, ApiScopesTrait;

    protected $fillable = ['title', 'description', 'user_id','category_id'];

    protected $allowIncluded = ['category', 'user'];
    protected $allowSort = ['id', 'title', 'description', 'category_id'];
    protected $allowFilter = ['id', 'title', 'description', 'category_id'];

    //Relacion uno a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}