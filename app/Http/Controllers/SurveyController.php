<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Survey;
use App\Http\Resources\SurveyResource;

class SurveyController extends Controller
{
    private $PER_PAGE = 10;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return SurveyResource::collection(Survey::paginate($this->PER_PAGE));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->json('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return response()->json('store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Survey $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        //
        return response()->json('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Survey $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        //
        return response()->json('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Survey $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        //
        return response()->json('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Survey $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        //
        return response()->json('destroy');
    }
}
