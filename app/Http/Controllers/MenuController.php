<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Http\Requests\AddtionRequest;
use App\Http\Requests\UpdateSecRequest;
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
        return view('Admin.pages.Menu.create');
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
        
        $image = json_decode($section->image, true);
        // Agar model topilmasa, 404 xatolik qaytaramiz
        if (!$section) {
            return response()->json(['message' => 'Section not found'], 404);
        }
    
        // Section ma'lumotlarini yuborib, sahifaga o'tamiz
        return view('Admin.pages.Menu.section', compact('section' , 'image'));
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

        $menu->title = $request->title ?? '---';
        $menu->text = $request->text ?? '---';
        $menu->link = $request->link ?? '---';
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
