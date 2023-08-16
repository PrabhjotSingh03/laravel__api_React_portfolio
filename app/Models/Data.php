<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $collection = 'Portfolio__Data'; // Name of your MongoDB collection
    protected $connection = 'mongodb'; // Connection name from your database configuration

    protected $fillable = ['title', 'icon', 'image', 'link', 'languages', 'description'];
}
