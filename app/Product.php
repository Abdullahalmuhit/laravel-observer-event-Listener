<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ProductCreated;
use Session;
class Product extends Model
{
    // protected $dispatchesEvents = [
    //     'created' => ProductCreated::class

    // ];

    protected $fillable = [
        'name', 'detail'
    ];

    public static function boot(){
        parent::boot();

        static::created(function($product){
            Session::flash('message', 'This is muhit!'); 
        });


    }
}
