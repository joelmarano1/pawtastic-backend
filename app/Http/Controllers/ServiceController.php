<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        info($request);
        $request->validate([
            'frequency' => 'required',
            'start_date' => 'required',
            'days' => 'required',
            'times' => 'required',
        ]);
        $service                 =      new Service;
        $service->frequency      =      $request->frequency;
        $service->start_date     =      $request->start_date;
        $service->days           =      $request->days;
        $service->times          =      $request->times;
        $service->notes          =      $request->notes;
        if($service->save())
        {
            return response()->json([
                'status' => 200,
                'message' => 'Service has been successfully scheduled!'
            ],200);
        }
        else {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!'
            ],500);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
