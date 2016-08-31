<?php

namespace FlAssociates;

use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    protected $fillable = [
        'cpf',
        'name',
        'email',
        'business_id'
    ];

    public $timestamps = false;

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function getCpfAttribute($value)
    {
        return preg_replace('/^(\\d{3})(\\d{3})(\\d{3})(\\d{2})$/', '$1.$2.$3-$4', $value);
    }

    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = str_replace(['.', '-'], '', $value);
    }
}
