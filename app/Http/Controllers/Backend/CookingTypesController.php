<?php

namespace App\Http\Controllers\Backend;

use App\Type_cooking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Matcher\Type;

class CookingTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cookingTypes = Type_cooking::all();
        return view( 'welcome', [
            'cookingTypes' => $cookingTypes
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'backend.cookingTypes.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $cookingType = new Type_cooking();
        $input = $request->all();
        $cookingType->create( $input );
        return; // por hacer
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $cookingType = Type_cooking::find( $id );
        return view( 'backend.cookingTypes.show' )->with( 'cookingType', $cookingType );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $cookingType = Type_cooking::find( $id );
        return view( 'backend.cookingTypes.edit', [
            'cookingType' => $cookingType
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
        $cookingType = Type_cooking::find($id);
        $input = $request->all();
        $cookingType->update($input);
        return; // por hacer
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        Type_cooking::destroy($id);
        return; // por hacer
    }
}
