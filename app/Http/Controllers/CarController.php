<?php

namespace App\Http\Controllers;
use App\Optional;
use App\Model\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car = new Car();
        $optionals= Optional::all();
        return view('cars.create', compact('car','optionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newData = $request->all();
        $car = new Car();
        $car->fill($newData);
        $car->save();

        if(isset($newData['optionals'])){
            $car->optionals()->sync($newData['optionals']);
        } 
        
        return redirect()->route('cars.show', compact('car'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        // $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $optionals= Optional::all();
        return view('cars.edit', compact('car', 'optionals'));
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
        $data = $request->all();
        $car = Car::findOrFail($id);

        $car->update($data);

        if(isset($data['optionals'])){
            $car->optionals()->sync($data['optionals']);
        } else{
            $car->optionals()->detach();
        }
        

        return redirect()->route('cars.show', compact('car'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect()->route('cars.index');
    }
}
