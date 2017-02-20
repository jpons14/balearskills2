<?php

namespace App\Http\Controllers\Backend;

use App\Models\CookingType;
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
        $cookingTypes = CookingType::all();
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
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $cookingType = new CookingType();
        if ( isset( $request->name ) && $request != '' ) {
            $cookingType->name = $request->name;
            $cookingType->save();
            \Session::set('message', 'Cooking type created successfully');
        }
        return redirect()->route( 'cookingTypes.show', $cookingType->id );
    }

    /**
     * Display the specified resource.
     *
     * @param CookingType $cookingType
     * @return \Illuminate\Http\Response
     */
    public function show( CookingType $cookingType )
    {
        return view( 'backend.cookingTypes.show', [
            'cookingType' => $cookingType
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $cookingType = CookingType::find($id);
        return view( 'backend.cookingTypes.edit', [
            'cookingType' => $cookingType
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id )
    {
        $request = \Request::all();
        $cookingType = CookingType::find($id);
        if (isset($request['name']) && $request['name'] != '') {
            $cookingType->name = $request['name'];
            $cookingType->save();
            \Session::set('message', 'Comment updated successfully');
            \Session::set('typeAlert', 'alert-success');
        }
        return redirect()->route('cookingTypes.show', $cookingType->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        CookingType::destroy($id);
        \Session::set('message', 'Cooking type deleted successfully');
        \Session::set('typeAlert', 'alert-danger');
        return redirect()->route('cookingTypes.index');
    }
}
