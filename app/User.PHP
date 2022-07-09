<?php

namespace App;

use App\Casts\Json;
use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use UuidModelTrait;

    protected $table = 'users';

    protected $guarded = ['id'];

    protected $casts = [
        'created_by' => Json::class,
        'updated_by' => Json::class,
    ];
}
