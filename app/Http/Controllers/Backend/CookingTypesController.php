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
        if (count($cookingTypes) == 0) {
            Session::flash('errorMessage', trans('messages.errors.cookingTypes.no.cookingType'));
        }
        return view('backend.cookingTypes.index', [
            'cookingTypes' => $cookingTypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cookingTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $error = false;
        if (!isset($request->name) || $request->name == '') {
            $error = true;
            $errorMessage = trans('messages.errors.cookingTypes.needed.name');
        }
        if ($error) {
            return redirect()->route('cookingTypes.create')->with('data', [
                'errorMessage' => $errorMessage
            ]);
        }
        $cookingType = new CookingType();
        $cookingType->name = $request->name;
        if (!$cookingType->save()) {
            $errorMessage = trans('messages.errors.cookingTypes.couldnt.created');
            return redirect()->route('cookingTypes.create')->with('data', [
                'errorMessage' => $errorMessage
            ]);
        }



        return redirect()->route('cookingTypes.show', $cookingType->id)->with('data', [
            'successMessage' => trans('messages.success.cookingTypes.created')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param CookingType $cookingType
     * @return \Illuminate\Http\Response
     */
    public function show(CookingType $cookingType)
    {
        return view('backend.cookingTypes.show', [
            'cookingType' => $cookingType
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cookingType = CookingType::find($id);
        return view('backend.cookingTypes.edit', [
            'cookingType' => $cookingType
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // todo: a revisar
        $request = \Request::all();

        $error = false;

        if (!isset($request['name']) || $request['name'] == '') {
            $error = true;
            $errorMessage = trans('messages.errors.cookingTypes.needed.name');
        }

        if ($error) {
            return redirect()->route('cookingTypes.edit', $id)->with('data', [
                'errorMessage' => $errorMessage,
                'request' => $request
            ]);
        }

        $cookingType = CookingType::find($id);
        $cookingType->name = $request['name'];

        if (!$cookingType->save()) {
            $errorMessage = trans('messages.errors.cookingTypes.couldnt.updated');
            return redirect()->route('cookingTypes.update', $cookingType->id)->with('data', [
                'errorMessage' => $errorMessage,
                'request' => $request
            ]);
        }

        $successMessage = trans('messages.success.cookingTypes.updated');

        return redirect()->route('cookingTypes.show', $cookingType->id)->with('data', [
            'successMessage' => $successMessage
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!CookingType::destroy($id)) {
            return redirect()->route('cookingTypes.index')->with('data', [
                'errorMessage' => trans('messages.errors.cookingTypes.couldnt.deleted')
            ]);
        }
        return redirect()->route('cookingTypes.index')->with('data', [
            'successMessage' => trans('messages.success.cookingTypes.deleted')
        ]);
    }
}
