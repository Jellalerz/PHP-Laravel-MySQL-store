<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    const DRAFT = 1;
    const RELEASED = 2;

    protected $guarded = ['id', 'created_at', 'uptaded_at'];

    //Relación muchos a muchos
    public function size(){
        return $this->hasMany(Size::class);
    }

    //Relación uno a muchos inversa

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    public function image(){
        return $this->morphMany(Image::class, 'imageable');
    }


}
