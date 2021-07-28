<?php

namespace App\Models;

use App\Models\Traits\Uuid as TraitsUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use SoftDeletes, TraitsUuid;
    protected $fillable = ['name', 'is_active'];
    protected $dates = ['deleted_at'];

    public $incrementing = false;
    protected $keyType = 'string';    
}
