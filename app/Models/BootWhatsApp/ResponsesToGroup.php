<?php

namespace App\Models\BootWhatsApp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsesToGroup extends Model
{
    protected $connection = 'db_whats';

    use HasFactory;

    public function groups_response()
    {
        return $this->hasOne(GroupsResponse::class, 'id', 'group_response_id');
    }
}
