<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmerprofile extends Model
{
    use HasFactory;
    protected $guarded = [];
  public function main()
    {
        return $this->belongsTo(farmer::class, 'farmer_id', 'id');
    }
}
