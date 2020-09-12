<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable=[
        'name',
        'email',
        'number',
        'description'
    ];
}
