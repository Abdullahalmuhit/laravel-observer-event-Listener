<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ProductCreated;
use Session;

class ObserverModel extends Model
{
    // protected $dispatchesEvents = [
    //     'created' => ProductCreated::class

    // ];
    protected $table = 'observer';

    protected $fillable = [
        'p_id', 'name'
    ];

    
}
