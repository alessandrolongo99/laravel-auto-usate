<?php

namespace App\Http\Controllers;
use App\Optional;
use App\Model\Car;
use Illuminate\Validation\Rule;
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

    
        $validateData = $request->validate(
            [
                'brand' => 'required|min:3|max:10',
                'model' => 'required|min:3|max:50',
                'color' => 'required|max:30',
                'license_plate' => 'required|size:5',
                'mileage' => 'required|integer|min:1',
                'optionals' => 'exists:optionals,id'
            ],
        );


        $car = new Car();
        $car->fill($newData);
        $car->save();

        if(isset($newData['optionals'])){
            $car->optionals()->sync($newData['optionals']);
        } 
        
        return redirect()->route('cars.show', compact('car'))->with('session', $car->brand . ' ' . $car->model . ' è stato aggiunto.');
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

        $validateData = $request->validate(
            [
                'brand' => [
                    'required',
                    'min:3',
                    'max:10',
                    Rule::unique('cars')->ignore($data['brand'], 'brand'),
                ],
                'optionals' => 'required|exists:optionals,id|min:1|between:1,3',
                'model' => 'required|min:3|max:50',
                'color' => 'required|max:30',
                'license_plate' => 'required|size:5',
                'mileage' => 'required|integer|min:1'
            ],
        );

        $car = Car::findOrFail($id);

        $car->update($data);

        if(isset($data['optionals'])){
            $car->optionals()->sync($data['optionals']);
        } else{
            $car->optionals()->detach();
        }

        return redirect()->route('cars.show', compact('car'))->with('session', $car->brand . ' ' . $car->model . ' è stato modificato.');
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
        return redirect()->route('cars.index')->with('delete', $car->brand . ' ' . $car->model . ' è stato cancellato.');
    }
}
