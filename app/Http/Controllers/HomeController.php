<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Item;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuos = Section::all();
        $home = Section::where('name', 'Home')->first();
        $home['photo'] = $home['image'] != null ? asset('').'storage/'.json_decode($home['image'], true)[0] : '/' ;
       
        $service = Section::where('name', 'Service')->first();
        $aboutus = Section::where('name' , 'Aboutus')->first();
        $aboutus['photo'] = $aboutus['image'] != null ? asset('').'storage/'.json_decode($aboutus['image'], true)[0] : '/' ;

        $numbers = Section::where('name', 'Numbers')->first();

        $gallery = Section::where('name', 'Gallery')->first();
        $gallery['photo'] = $gallery['image'] != null ? asset('').'storage/'.json_decode($gallery['image'], true)[0] : '/' ;
        if (!$numbers) {
            return view('home', compact('menuos', 'home'))->with('error', 'Service bo\'limi topilmadi.');
        }
        
        $number_items = Item::where('section_id', $numbers->id)->get();

if (!$service) {
    return view('home', compact('menuos', 'home'))->with('error', 'Service bo\'limi topilmadi.');
}

$service_items = Item::where('section_id', $service->id)->get();



return view('home', compact('menuos', 'home', 'service', 'service_items' , 'aboutus' , 'numbers' , 'number_items' , 'gallery'));
}


     /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
