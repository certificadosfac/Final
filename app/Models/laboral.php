<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laboral extends Model
{
    use HasFactory;

    protected $table = 'laboral';

    protected $fillable = ['id','tipo','url'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public $timestamps = false;

}