<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function itemCreate(Request  $request)
    {
        $newItem = new Item();
        $newItem->section_id = $request->section_id;

        $newItem->title = $request->title;
        $newItem->text = $request->text;
        $newItem->link = $request->link;
        if ($request->hasFile('image')) {
            $paths = [];
            $images = $request->file('image');
            foreach ($images as $image){
                $path = $image->store('images', 'public'); // 'images' papkasi ichiga saqlaydi
                array_push($paths, $path);
            }

            $newItem->image = json_encode($paths);
        }
        
        $newItem->description = $request->description;

        $newItem->save();

        $items = Item::where('section_id', $request->section_id)->get();
        
        return view('Admin.pages.Menu.section');

        // return view('Admin.pages.Menu.addItem');
        

        // $menuos = Section::orderBy('updated_at', 'desc')
        // ->get();
        // return view('Admin.pages.Menu.create',  compact('menuos'));
    }


    public function formCreate(Request $request)
    {
        $id = $request->id;
        return view('Admin.pages.Menu.addItem' , compact('id'));
    }
}
