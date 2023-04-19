<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivationCode extends Model
{
    use HasFactory;
    protected $table = 'activation_code';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
