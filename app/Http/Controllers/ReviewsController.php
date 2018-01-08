<?php

namespace App\Http\Controllers;

use App\Model\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $place = \App\Model\Place::find($id);
        return view("review", ['place'=>$place]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $review = new \App\Model\Review();
        $review->place_id = $id;
        $review->user_id = Auth::user()->id;
        $review->internet_has = $request->internet_has;
        $review->internet_open = $request->internet_open;
        $review->internet_speed = $request->internet_speed;
        $review->internet_pass = $request->internet_pass;
        $review->food_description = $request->food_description."";
        $review->drink_description = $request->drink_description."";

        $review->service_rate = $request->service_rate;
        $review->price_rate = $request->price_rate;
        $review->comfort_rate = $request->comfort_rate;
        $review->accommodations_description = $request->accommodations_description."";
        $review->noise_rate = $request->noise_rate;
        $review->general_rate = $request->general_rate;
        $review->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
