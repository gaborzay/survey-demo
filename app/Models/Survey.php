<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Survey extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'surveys';
    protected $primaryKey = '_id';
}
