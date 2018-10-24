<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    // Table Name
    protected $table = 'files';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
