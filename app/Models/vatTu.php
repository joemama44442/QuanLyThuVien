<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vatTu extends Model
{
    use HasFactory;
    protected $fillable = [
        'idCode',
        'name',
        'unit',
    ];

    public function itemvt()
    {
        return $this->hasMany(itemvt::class);
    }
}
