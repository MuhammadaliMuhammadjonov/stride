<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Http\Requests\AddtionRequest;
use App\Http\Requests\UpdateSecRequest;
use App\Models\Item;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Random\Engine\Secure;

// use App\Models\Section;
// use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuos = Section::orderBy('updated_at', 'desc')
            ->get();

        return view('Admin.pages.Menu.menu', compact('menuos') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuos = Section::orderBy('updated_at', 'desc')
        ->get();
        return view('Admin.pages.Menu.create',  compact('menuos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {

        $newMenu = new Section();
        $newMenu->name = $request->name;

        $newMenu->title = 'saqlanmagan';
        $newMenu->text =  'saqlanmagan';
        $newMenu->link =  'saqlanmagan';

        $newMenu->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // Section modelidan ID ga teng ma'lumotni olish
        $section = Section::find($request->id);
    
        // Agar model topilmasa, 404 xatolik qaytaramiz
        if (!$section) {
            return response()->json(['message' => 'Section not found'], 404);
        }
    
        // Section ma'lumotlarini yuborib, sahifaga o'tamiz
        return view('Admin.pages.Menu.addtion', compact('section'));
    }

    public function showSection(Request $request)
    {
        // Section modelidan ID ga teng ma'lumotni olish
        $section = Section::find($request->id);
        $items = Item::where('section_id', $request->id)->get();
        $menuos = Section::orderBy('updated_at', 'desc')
            ->get();

        $image = json_decode($section->image, true);
        // Agar model topilmasa, 404 xatolik qaytaramiz
        if (!$section) {
            return response()->json(['message' => 'Section not found'], 404);
        }
    
        // Section ma'lumotlarini yuborib, sahifaga o'tamiz
        return view('Admin.pages.Menu.section', compact('section' , 'image' , 'menuos' , 'items'));
    }

    public function redirectSection($id)
    {
        // Section modelidan ID ga teng ma'lumotni olish
        $section = Section::find($id);
        $items = Item::where('section_id', $id)->get();
        $menuos = Section::orderBy('updated_at', 'desc')
            ->get();

        $image = json_decode($section->image, true);
        // Agar model topilmasa, 404 xatolik qaytaramiz
        if (!$section) {
            return response()->json(['message' => 'Section not found'], 404);
        }
    
        // Section ma'lumotlarini yuborib, sahifaga o'tamiz
        return view('Admin.pages.Menu.section', compact('section' , 'image' , 'menuos' , 'items'));
    }

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
        
        return $this->redirectSection($request->section_id);
        // return $this->index();

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

    public function itemEditshow(Request $request) {
        $menu = Item::where('section_id', $request->route('slug'))
             ->where('id', $request->route('id'))
             ->first();
             $section_id = $request->route('slug');


            //  echo $menu;
        return view('Admin.pages.Item.edit', compact('menu' , 'section_id'));
    }

    public function itemEdit(Request $request) {

        $menu = Item::where('section_id', $request->route('slug'))
        ->where('id', $request->route('id'))
        ->first();
        $menu->title = $request->title;
        $menu->text = $request->text;
        $menu->link = $request->link;
        $menu->description = $request->description;
        if ($request->hasFile('image')) {
            $paths = [];
            $images = $request->file('image');
            foreach ($images as $image){
                $path = $image->store('images', 'public'); // 'images' papkasi ichiga saqlaydi
                array_push($paths, $path);
            }

            $menu->image = json_encode($paths);
        }
      
        $menu->save();
        return $this->redirectSection($menu->section_id);
        // return $this->index();

    }

    public function itemDestroy(Request $request) {
        $item = Item::where('section_id', $request->slug)->where('id', $request->id)->first();

        if ($item) {
            $item->delete();
            return $this->redirectSection($request->slug);
            // return response()->json(['message' => 'Element muvaffaqiyatli o‘chirildi.'], 200);
        }
    
        // return response()->json(['message' => 'Element topilmadi.'], 404);   
    }


    public function updateSection(UpdateSecRequest $request) 
    {
        $menu =  Section::find($request->id);
        $menu->name = $request->name;
        $menu->title = $request->title;
        $menu->text = $request->text;
        $menu->link = $request->link;


        if ($request->hasFile('image')) {
            $paths = [];
            $images = $request->file('image');
            foreach ($images as $image){
                $path = $image->store('images', 'public'); // 'images' papkasi ichiga saqlaydi
                array_push($paths, $path);
            }

            $menu->image = json_encode($paths);
        }
      

        $menu->save();

        return $this->index();

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $menu = Section::find($id);
        return view('Admin.pages.Menu.update', compact('menu'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request)
    {
        $menu = Section::find($request->id);
        $menu->name = $request->name;
        $menu->save();
        return $this->index();
    }

    public function updateAddtion(AddtionRequest $request) 
    {
        $menu =  Section::find($request->id);

        if ($menu->is_section == 1) {
            return "Bu section allaqachon saqlangan";
        }

        $menu->title = $request->title ?? null;
        $menu->text = $request->text ?? null;
        $menu->link = $request->link ?? null;
        $menu->is_section = 1;
        
        if ($request->hasFile('image')) {
            $paths = [];
            $images = $request->file('image');
            foreach ($images as $image){
                $path = $image->store('images', 'public'); // 'images' papkasi ichiga saqlaydi
                array_push($paths, $path);
            }

            $menu->image = json_encode($paths);
        }
      

        $menu->save();
        
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Section::destroy($id);
    return $this->index();

    }
}
