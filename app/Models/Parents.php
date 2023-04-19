<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;
    protected $table = 'personal_info';
    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $guarded = ['created_at'];
}
