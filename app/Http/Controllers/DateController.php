<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Report;
use App\Date;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = Date::with('reports')->get();

        
        

        return view('date.index', compact('dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('date.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'date' => 'required',
        ]);

        $date = Date::create($data);

        return redirect()->route('date.show', $date->id);
    }

    public function storeReport(Request $request, $dateId)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'content' => 'required',
        ]);

        $date = Date::find($dateId);

        $report = $date->reports()->create([
            'content' => $request->content,
            'date_id' => $date->id,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('date.show', $date->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $date = Date::with('reports')->find($id);
        $categories = Category::all();
        // dd($date->reports);
        return view('date.show', compact('date', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
