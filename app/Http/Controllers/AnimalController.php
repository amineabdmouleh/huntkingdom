<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $animals = animal::all();
        return view('animal.index', compact('animals', 'categories'));
    }


    public function create()
    {
        $categories = Category::all();

        return view('animal.create', compact(
            'categories'

        ));
    }





    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:6',
                'description' => 'required|max:20',
                'zone' => 'required'
            ],

            [
                'name.required' => 'u need to fill the name'

            ]
        );
        $input = $request->all();

        if ($image = $request->file("picture")) {
            $destinationPath = "images/";
            $name = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
            $input["picture"] = "$name";
        }

        Animal::create($input);



        return redirect()->route('animal.index');
    }


    public function show(animal $animal)
    {
        //$animal = animal::find($id) ; on utilise si paramètre est id fonctionnel
        return view('animal.show', compact('animal'));
    }


    public function edit(animal $animal)
    {

        return view('animal.edit', compact('animal'));
    }


    public function update(Request $request, $id)
    {
        $animal = [
            'name' => $request->name, 'description' => $request->description,
            'zone' => $request->zone

        ];
        animal::whereId($id)->update($animal);
        return  redirect()->route('animal.index')
            ->with('info', 'animal updated successfully.');
    }



    public function destroy($id)
    {
        $animal = animal::find($id);
        //var_dump($animal);
        $animal->delete();
        return redirect()->route('animal.index')
            ->with('success', 'animal deleted successfully.');
    }
}
