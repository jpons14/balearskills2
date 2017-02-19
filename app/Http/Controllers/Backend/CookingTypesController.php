<?php

namespace App\Http\Controllers\Backend;

use App\Models\TypeCooking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CookingTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cookingTypes = TypeCooking::all();
        return view( 'backend.cookingTypes.index', [
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
        $cookingType = new TypeCooking();
        if ( isset( $request->name ) && $request != '' ) {
            $cookingType->name = $request->name();
        }
        $cookingType->save();
        return redirect()->route( 'cookingTypes.show' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $cookingType = TypeCooking::find( $id );
        return view( 'backend.cookingTypes.show', [
            'cookingType' => $cookingType
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $cookingType = TypeCooking::find( $id );
        return view( 'backend . cookingTypes . edit', [
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
        $cookingType = TypeCooking::find($id);
        if (isset($request->name) && $request->name != '') {
            $cookingType->name = $request->name;
        }
        $cookingType->save();
        return redirect()->route('cookingTypes.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        TypeCooking::destroy($id);
        return redirect()->route('cookingTypes.index');
    }
}
