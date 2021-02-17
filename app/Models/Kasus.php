<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    use HasFactory;
    protected $table = "kasuses";

    public function negara(){
        return $this->belongsTo(Negara::class);
    }
}
