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

    public static function getIdByEmail($email)
    {
        return  self::select('id')->where('email', '=', $email)->first()['id'];
    }

    public static function getEmailById($user_id)
    {
        return  self::select('email')->where('id', '=', $user_id)->first()['email'];
    }

}
