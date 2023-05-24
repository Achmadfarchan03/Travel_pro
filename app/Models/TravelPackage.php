<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use HasFactory, SoftDeletes;

    public $table = "travel-packages";

    protected $fillable = [
        'title',
        'slug',
        'location',
        'about',
        'featured_event',
        'languages',
        'foods',
        'daparture_date',
        'duration',
        'type',
        'price',
    ];

    protected $hidden = [
        
    ];
}
