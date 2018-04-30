<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rackapp extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status', 'version', 'rack_id',
    ];

    public function rackId(){
        return $this->belongsTo('App\Rack','rack_id');
    }
}
