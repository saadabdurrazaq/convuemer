<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory, SoftDeletes; 

    protected $fillable = [ 
        'slider_image',
        'slider_header',
        'title',
        'description',
        'button_text',
        'link',
        'status',
    ];

    protected $table = "sliders";
}
