<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlsList extends Model
{
    use HasFactory;
    protected $table = 'urls';
    public $timestamps = false;
}
