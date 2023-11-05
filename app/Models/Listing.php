<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class Listing extends Model
{

    use HasFactory;

    protected $fillable = ['title','price','pictures','picture'];


    public function scopeFilter($query,array $filters) : void{
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%');


        };





    }


}


