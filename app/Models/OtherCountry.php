<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherCountry extends Model
{
    protected $fillable = ['abroad_id','title', 'description'];
    public function otherabroad()
    {
        return $this->belongsTo(Country::class, 'abroad_id');
    }
}
