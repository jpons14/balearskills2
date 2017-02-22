<?php

namespace App\Http\Controllers\Backend;

use App\Models\Establishment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

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
        if (count($establishments) == 0){
            $errorMessage = trans('messages.errors.establishments.no.establishment');
            Session::flash('errorMessage', $errorMessage);
        }
        return view('backend.establishments.index', [
            'establishments' => $establishments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.establishments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $error = false;
        if (!isset($request->name) || $request->name == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.name');
        }
        if (!isset($request->description_esp) || $request->description_esp == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.description_esp');
        }
        if (!isset($request->description_cat) || $request->description_cat == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.description_cat');
        }
        if (!isset($request->timetable_esp) || $request->timetable_esp == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.timetable_esp');
        }
        if (!isset($request->timetable_cat) || $request->timetable_cat == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.timetable_cat');
        }
        if (!isset($request->city) || $request->city == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.city');
        }
        if (!isset($request->phone) || $request->phone == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.phone');
        }
        if (!isset($request->web) || $request->web == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.web');
        }
        if (!isset($request->price) || $request->price == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.price');
        }

        if ($error) {
            return redirect()->route('establishments.create')->with('data', [
                'errorMessage' => $errorMessage,
                'request' => $request->toArray()
            ]);
        }


        $establishment = new Establishment();

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
        if (!$establishment->save()) {
            $errorMessage = trans('messages.errors.establishments.couldnt.created');
            return redirect()->route('establishments.create')->with('data', [
                'errorMessage' => $errorMessage,
                'request' => $request->toArray()
            ]);
        }
        $successMessage = trans('messages.success.establishments.created');
        return redirect()->route('establishments.show', $establishment->id)->with('data', [
            'successMessage' => $successMessage
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Establishment $establishment
     * @return \Illuminate\Http\Response
     */
    public function show(Establishment $establishment)
    {
        return view('backend.establishments.show', [
            'establishment' => $establishment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $establishment = Establishment::find($id);
        return view('backend.establishments.edit', [
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
    public function update(Request $request, $id)
    {
        $error = false;
        if (!isset($request->name) || $request->name == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.name');
        }
        if (!isset($request->description_esp) || $request->description_esp == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.description_esp');
        }
        if (!isset($request->description_cat) || $request->description_cat == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.description_cat');
        }
        if (!isset($request->timetable_esp) || $request->timetable_esp == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.timetable_esp');
        }
        if (!isset($request->timetable_cat) || $request->timetable_cat == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.timetable_cat');
        }
        if (!isset($request->city) || $request->city == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.city');
        }
        if (!isset($request->phone) || $request->phone == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.phone');
        }
        if (!isset($request->web) || $request->web == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.web');
        }
        if (!isset($request->price) || $request->price == '') {
            $error = true;
            $errorMessage = trans('messages.errors.establishments.needed.price');
        }

        if ($error) {
            return redirect()->route('establishments.edit', $id)->with('data', [
                'errorMessage' => $errorMessage,
                'request' => $request->toArray()
            ]);
        }


        $establishment = Establishment::find($id);

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
        if (!$establishment->save()) {
            $errorMessage = trans('messages.errors.establishments.couldnt.updated');
            return redirect()->route('establishments.edit')->with('data', [
                'errorMessage' => $errorMessage,
                'request' => $request->toArray()
            ]);
        }
        $successMessage = trans('messages.success.establishments.updated');
        return redirect()->route('establishments.show', $establishment->id)->with('data', [
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
        if (!Establishment::destroy($id)) {
            $errorMessage = trans('messages.errors.establishments.couldnt.deleted');
            return redirect()->route('establishments.index')->with('data', [
                'errorMessage' => $errorMessage
            ]);
        }
        $successMessage = trans('messages.success.establishments.deleted');
        return redirect()->route('establishments.index')->with('data',[
            'successMessage' => $successMessage
        ]);
    }
}
