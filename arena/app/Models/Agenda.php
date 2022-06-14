<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $table = "agendas";
    public $timestamps = false;

    
    public function groepen(){
        return $this->hasMany(Groep::class, 'lokaal_id');
    }
    public function groeproosterlokaal(){        
        return $this->hasManyThrough(
            Groeprooster::class,            
            Groep::class,
            'lokaal_id',
            'groep_id',
            'id',
            'id'
        );
    }
}
