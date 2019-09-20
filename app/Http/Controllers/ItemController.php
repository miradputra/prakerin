<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Itempackage;
use App\CategoryPackage;
use File;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Itempackage::orderBy('created_at', 'desc')->get();
        return view('item.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryPackage::all();
        $item = Itempackage::all();
        return view('item.create', compact('category','item'));
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
            'description' => 'required|min:40',
            'media_sample' => 'required|mimes:jpeg,jpg,png,gif,mkv,mp4|required|max:2048'
        ]);
        $item = new Itempackage();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->rate = $request->rate;
        //Media_Sample
        if ($request->hasFile('media_sample')){
            $file = $request->file('media_sample');
            $path = public_path() . '/backend/template/assets/images/item/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $item->media_sample = $filename;
        }
        //Proposal
        if ($request->hasFile('proposal')){
            $file = $request->file('proposal');
            $path = public_path() . '/backend/template/assets/images/item/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $item->proposal = $filename;
        }
        $item->enable_quantity = $request->enable_quantity;
        $item->type_quantity = $request->type_quantity;
        $item->save();
        $item->category()->attach($request->category);

        return redirect()->route('item.index')->with(['success' => 'Item: <strong>' . $item->name . '</strong> has been Added']);
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
       $item = Itempackage::findOrFail($id);
        return view('item.edit', compact('item'));
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
            'description' => 'required|min:40',
        ]);
        $item = Itempackage::findOrFail($id);
        $item->name = $request->name;
        $item->description = $request->description;
        $item->rate = $request->rate;
        //Media_Sample
        if ($request->hasFile('media_sample')){
            $file = $request->file('media_sample');
            $path = public_path() . '/backend/template/assets/images/item/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccsess = $file->move($path, $filename);
            //hapus Media_Sample lama
            if ($item->media_sample){
                $old_foto = $item->media_sample;
                $filepath = public_path() . '/backend/template/assets/images/item/' . $item->media_sample;
                try {
                    File::delete($filepath);
                }
                catch (FileNotFoundException $e){
                    //File sudah dihapus atau tidak ada
                }
            }
            $item->media_sample = $filename;
        }
        //Proposal
        if ($request->hasFile('proposal')){
            $file = $request->file('proposal');
            $path = public_path() . '/backend/template/assets/images/item/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccsess = $file->move($path, $filename);
            //hapus Media_Sample lama
            if ($item->proposal){
                $old_foto = $item->proposal;
                $filepath = public_path() . '/backend/template/assets/images/item/' . $item->proposal;
                try {
                    File::delete($filepath);
                }
                catch (FileNotFoundException $e){
                    //File sudah dihapus atau tidak ada
                }
            }
            $item->proposal = $filename;
        }
        $item->enable_quantity = $request->enable_quantity;
        if ($item->enable_quantity == '0') {
            $item->type_quantity = "not registered";
        }
        elseif ($item->enable_quantity == '1') {
            $item->type_quantity = $request->type_quantity;
        }
        $item->save();
        return redirect()->route('item.index')->with(['success' => 'Item: <strong>' . $item->name . '</strong> has been Edited']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Itempackage::findOrFail($id);
        //Hapus Media_Sample file
        if ($item->media_sample){
            $old_foto = $item->media_sample;
            $filepath = public_path() . '/backend/template/assets/images/item' . $item->media_sample;
            try {
                File::delete($filepath);
            }
            catch (FileNotFoundException $e){
                //File sudah dihapus/tidak ada
            }
        }
        //Hapus Proposal file
        if ($item->proposal){
            $old_foto = $item->proposal;
            $filepath = public_path() . '/backend/template/assets/images/item' . $item->proposal;
            try {
                File::delete($filepath);
            }
            catch (FileNotFoundException $e){
                //File sudah dihapus/tidak ada
            }
        }
        $item->delete();

        return redirect()->route('item.index')->with(['danger' => 'Item: <strong>' . $item->name . '</strong> has been Removed']);
    }
}
