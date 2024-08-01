<?php

namespace App\Models;

use App\Models\Scopes\UserScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 2nd methor to import global scope
#[ScopedBy(UserScope::class)]

class User extends Model
{
    use HasFactory;
     // Global Scope
     protected static function booted() : void{  
        // static::addGlobalScope('userdetail',function(Builder $builder){
        //     $builder->where('status',0)->orWhere('email','anya10@quigley.com')->select('email');
        // });

        // 1st method to import globar scope
        static::addGlobalScope(new UserScope);
    }

    // End of Global scope
    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function scopeActive($query){
        return $query->where('status',0);
    }

   
}
