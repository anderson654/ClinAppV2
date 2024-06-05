<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceType
 *
 * @package App
 * @property string $title
 * @property integer $external_id
 */
class ServiceType extends Model
{
    protected $fillable = ['title', 'external_id'];
    protected $hidden = [];



    /**
     * Set attribute to money format
     * @param $input
     */
    public function setExternalIdAttribute($input)
    {
        $this->attributes['external_id'] = $input ? $input : null;
    }
}
