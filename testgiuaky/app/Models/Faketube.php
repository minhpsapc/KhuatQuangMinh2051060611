<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faketube extends Model
{
    use HasFactory;
    protected $fillable = ['channelid', 'channelname', 'description', 'subscriberscount','url', 'createat', 'updatedat'];
}
