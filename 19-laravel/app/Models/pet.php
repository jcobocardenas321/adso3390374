<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;


#[Fillable(['name',
            'image',
            'kind',
            'weight',
            'age',
            'bread',
            'location',
            'description'])]
class pet extends Model
{
    //
}
