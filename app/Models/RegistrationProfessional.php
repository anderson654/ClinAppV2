<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationProfessional extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'rg', 'birthdate', 'name', 'name_mother', 'om_document', 'date_expeditioin'];

    public function setRgAttribute($value)
    {
        $this->attributes['rg'] = str_replace(['.', '-'], '', $value);
    }
    public function setBirthdateAttribute($value)
    {
        $this->attributes['birthdate'] = implode('-', array_reverse(explode("/", $value)));
    }
}
