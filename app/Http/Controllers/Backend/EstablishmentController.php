<?php

namespace App\Http\Controllers\Backend;

use App\Models\Establishment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use spec\Prophecy\Exception\Doubler\MethodNotExtendableExceptionSpec;

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
            && isset( $request->descripcio_esp ) && $request->descripcio_esp != ''
            && isset( $request->descripcio_cat ) && $request->descripcio_cat != ''
            && isset( $request->timetable_esp ) && $request->timetable_esp != ''
            && isset( $request->timetable_cat ) && $request->timetable_cat != ''
            && isset( $request->city ) && $request->city != ''
            && isset( $request->phone ) && $request->phone != ''
            && isset( $request->web ) && $request->web != ''
            && isset( $request->price ) && $request->price != ''
        ) {
            $establishment->name = $request->name;
            $establishment->descripcio_esp = $request->descripcio_esp;
            $establishment->descripcio_cat = $request->descripcio_cat;
            $establishment->timetable_esp = $request->timetable_esp;
            $establishment->city = $request->city;
            $establishment->phone = $request->phone;
            $establishment->web = $request->web;
            $establishment->web = $request->web;
            $establishment->price = $request->price;
            $establishment = $establishment->save();
            $message = 'Establishment created successfully';
        } else {
            $message = 'The establishment could not be created';
        }
        return redirect()->route('establishments.show', [
            'establishment' => $establishment,
            'message' => $message
        ]);
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
            && isset( $request->descripcio_esp ) && $request->descripcio_esp != ''
            && isset( $request->descripcio_cat ) && $request->descripcio_cat != ''
            && isset( $request->timetable_esp ) && $request->timetable_esp != ''
            && isset( $request->timetable_cat ) && $request->timetable_cat != ''
            && isset( $request->city ) && $request->city != ''
            && isset( $request->phone ) && $request->phone != ''
            && isset( $request->web ) && $request->web != ''
            && isset( $request->price ) && $request->price != ''
        ) {
            $establishment->name = $request->name;
            $establishment->descripcio_esp = $request->descripcio_esp;
            $establishment->descripcio_cat = $request->descripcio_cat;
            $establishment->timetable_esp = $request->timetable_esp;
            $establishment->city = $request->city;
            $establishment->phone = $request->phone;
            $establishment->web = $request->web;
            $establishment->web = $request->web;
            $establishment->price = $request->price;
            $establishment = $establishment->save();
            $message = 'Establishment updated successfully';
        } else {
            $message = 'The establishment could not be updated';
        }
        return redirect()->route('establishments.show', [
            'establishment' => $establishment,
            'message' => $message
        ]);
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
        return redirect()->route('establishments.index', [
            'message' => 'Comment deleted successfully'
        ]);
    }
}
