<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorInformation extends Model
{
    use HasFactory;
    public $table = 'visitor_informations';
    public $timestamps = false;
}
