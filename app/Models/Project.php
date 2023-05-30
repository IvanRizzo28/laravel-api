<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(string|null $value) => $value !== null ? asset('storage/' . $value) : null,
        );
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
