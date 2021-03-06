<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSecFiveHeading;

class SecFiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headingdata = AboutSecFiveHeading::get();
        $en = AboutSecFiveHeading::where('lang','en')->first();
        $ar = AboutSecFiveHeading::where('lang','ar')->first();

        return view('admin.about.sec_five.index')
        ->with(compact('headingdata','en','ar'));
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

    public function heading(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'lang' => $request->lang,
        ];
        AboutSecFiveHeading::create($data);
        return redirect()->to('/admin/about/about_sec_five');
    }

    public function heading_update($id,Request $request)
    {
        $headingdata = AboutSecFiveHeading::find($id);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'lang' => $request->lang,
        ];

        $headingdata->update($data);
        return redirect()->to('/admin/about/about_sec_five');
    }

    public function heading_delete($id)
    {
        $project = AboutSecFiveHeading::find($id);
        $project->delete();
        return redirect()->to('/admin/about/about_sec_five');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
