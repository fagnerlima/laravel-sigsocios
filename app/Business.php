<?php

namespace FlAssociates;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'cnpj',
        'name'
    ];

    public $timestamps = false;

    public function associates()
    {
        return $this->hasMany(Associate::class);
    }

    public function getCnpjAttribute($value)
    {
        return preg_replace('/^(\\d{2})(\\d{3})(\\d{3})(\\d{4})(\\d{2})$/', '$1.$2.$3/$4-$5', $value);
    }

    public function setCnpjAttribute($value)
    {
        $this->attributes['cnpj'] = str_replace(['.', '/', '-'], '', $value);
    }
}
