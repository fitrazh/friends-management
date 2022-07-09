<?php

namespace App;

use App\Casts\Json;
use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use UuidModelTrait;

    public const ACTION_FRIEND_REQUEST = 'request';

    public const ACTION_FRIEND_ACCEPT = 'accept';

    public const ACTION_FRIEND_REJECT = 'reject';

    public const ACTION_FRIEND_BLOCK = 'block';

    protected $table = 'friends';

    protected $guarded = ['id'];

    protected $casts = [
        'created_by' => Json::class,
        'updated_by' => Json::class,
    ];

}
