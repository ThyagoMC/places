<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'place_id', 'user_id',
        'internet_has', 'internet_open', 'internet_speed', 'internet_pass', 'food_description', 'drink_description',
        'service_rate', 'price_rate', 'comfort_rate', 'accommodations_description', 'noise_rate', 'general_rate'
    ];

    public function getPlace(){
        return Place::find($this->place_id);
    }
}
