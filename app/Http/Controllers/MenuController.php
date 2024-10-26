<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuos = Section::all();
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
        $newMenu->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
