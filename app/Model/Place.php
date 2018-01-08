<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //
    protected $fillable = [
        'name', 'address', 'city', 'state', 'country', 'type_id'
    ];

    public function getRating(){
        $reviews = \App\Model\Review::where('place_id', $this->id)->get();
        $rating = 0;
        $qty = 0;
        foreach ($reviews as $review ){
            $qty++;
            $rating += intval($review->general_rate);
        }
        if($qty == 0) return 0;
        return ($rating/$qty);
    }

    public function getTipo(){
        return Type::find($this->type_id)->description;
    }

    public function getReviews(){
        $reviews = Review::where('place_id', $this->id)->get();
        return empty($reviews)?[]:$reviews;
    }
}
