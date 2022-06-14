<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'ordered';
    protected $fillable = [

        'amount',
        'artist',
        'user_id'
    ]; 

    /*public function products(){
        return $this->belongsToMany(Ticket::class)->withPivot(['amount']);
    }*/
}
