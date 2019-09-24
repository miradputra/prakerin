<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryPackage;
use File;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category =CategoryPackage::orderBy('created_at', 'desc')->get();
        return view('category.index', compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:50',
            'baner' => 'required|mimes:jpeg,jpg,png,gif|required|max:2048'
        ]);
        $category = new CategoryPackage();
        $category->name = $request->name;
        $category->description = $request->description;
        //Banner
        if ($request->hasFile('baner')){
            $file = $request->file('baner');
            $path = public_path() . '/backend/template/assets/images/category/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $category->baner = $filename;
        }
        $category->save();
        return redirect()->route('category.index')->with(['success' => 'Category: <strong>' . $category->name . '</strong> has been Added']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryPackage::findOrFail($id);
        return view('category.edit', compact('category'));
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
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:50',
            'baner' => 'required|mimes:jpeg,jpg,png,gif|required|max:2048'
        ]);
        $category = CategoryPackage::findOrFail($id);
        $category->name = $request->name;
        $category->description = $request->description;
        //Banner
        if ($request->hasFile('baner')){
            $file = $request->file('baner');
            $path = public_path() . '/backend/template/assets/images/category/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccsess = $file->move($path, $filename);
            //hapus Banner lama
            if ($category->baner){
                $old_banner = $category->baner;
                $filepath = public_path() . '/backend/template/assets/images/category/' . $category->baner;
                    File::delete($filepath);
            }
            $category->baner = $filename;
        }
        $category->save();
        return redirect()->route('category.index')->with(['success' => 'Category: <strong>' . $category->name . '</strong> has been Edited']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CategoryPackage::findOrFail($id);
        if ($category->baner){
            $old_banner = $category->baner;
            $filepath = public_path() . '/backend/template/assets/images/category/' . $category->baner;
                File::delete($filepath);
        }
        $category->delete();

        return redirect()->route('category.index')->with(['danger' => 'Category: <strong>' . $category->name . '</strong> has been Removed']);
    }
}
