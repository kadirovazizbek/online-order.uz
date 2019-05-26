<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'menu_id', 'qty', 'user_id', 'finished'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }
}
