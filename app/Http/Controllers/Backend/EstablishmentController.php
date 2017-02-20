<?php

namespace App\Http\Controllers\Backend;

use App\Models\Establishment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establishments = Establishment::all();
        return view( 'backend.establishments.index', [
            'establishments' => $establishments
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'backend.establishments.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $establishment = new Establishment();
        if (
            isset( $request->name ) && $request->name != ''
            && isset( $request->description_esp ) && $request->description_esp != ''
            && isset( $request->description_cat ) && $request->description_cat != ''
            && isset( $request->timetable_esp ) && $request->timetable_esp != ''
            && isset( $request->timetable_cat ) && $request->timetable_cat != ''
            && isset( $request->city ) && $request->city != ''
            && isset( $request->phone ) && $request->phone != ''
            && isset( $request->web ) && $request->web != ''
            && isset( $request->price ) && $request->price != ''
        ) {
            $establishment->name = $request->name;
            $establishment->description_esp = $request->description_esp;
            $establishment->description_cat = $request->description_cat;
            $establishment->timetable_esp = $request->timetable_esp;
            $establishment->timetable_cat = $request->timetable_cat;
            $establishment->address = $request->address;
            $establishment->city = $request->city;
            $establishment->phone = $request->phone;
            $establishment->web = $request->web;
            $establishment->web = $request->web;
            $establishment->price = $request->price;
            $establishment->save();
            \Session::set('message', 'Establishment created successfully');
            \Session::set('typeAlert', 'alert-success');
        } else {
            \Session::set('message','The establishment could not be created');
            \Session::set('typeAlert', 'alert-warning');
        }
        return redirect()->route('establishments.show', $establishment );
    }

    /**
     * Display the specified resource.
     *
     * @param Establishment $establishment
     * @return \Illuminate\Http\Response
     */
    public function show( Establishment $establishment )
    {
        return view ('backend.establishments.show',[
            'establishment' => $establishment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $establishment = Establishment::find($id);
        return view( 'backend.establishments.edit', [
            'establishment' => $establishment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {
        $establishment = Establishment::find($id);
        if (
            isset( $request->name ) && $request->name != ''
            && isset( $request->description_esp ) && $request->description_esp != ''
            && isset( $request->description_cat ) && $request->description_cat != ''
            && isset( $request->timetable_esp ) && $request->timetable_esp != ''
            && isset( $request->timetable_cat ) && $request->timetable_cat != ''
            && isset( $request->city ) && $request->city != ''
            && isset( $request->phone ) && $request->phone != ''
            && isset( $request->web ) && $request->web != ''
            && isset( $request->price ) && $request->price != ''
        ) {
            $establishment->name = $request->name;
            $establishment->description_esp = $request->description_esp;
            $establishment->description_cat = $request->description_cat;
            $establishment->timetable_esp = $request->timetable_esp;
            $establishment->city = $request->city;
            $establishment->phone = $request->phone;
            $establishment->web = $request->web;
            $establishment->web = $request->web;
            $establishment->price = $request->price;
            $establishment->save();
            \Session::set('message','Establishment updated successfully');
            \Session::set('typeAlert', 'alert-success');
        } else {
            \Session::set('message','The establishment could not be updated');
            \Session::set('typeAlert', 'alert-warning');
        }
        return redirect()->route('establishments.show', $establishment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        Establishment::destroy($id);
        \Session::set('message', 'Establishment deleted successfully');
        \Session::set('typeAlert', 'alert-danger');
        return redirect()->route('establishments.index');
    }
}
