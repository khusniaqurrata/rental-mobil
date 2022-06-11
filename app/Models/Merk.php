<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Armada;

class Merk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function armada(){
        $this->hasMany(Armada::class);
    }
}
