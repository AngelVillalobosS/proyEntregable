<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class contents extends Model
{
    use HasFactory;

    protected $primaryKey  = 'id_content';
    protected $fillable = ['content'];
}
