<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\PromoEvent;
use App\CategoryPackage;
use App\Itempackage;
use App\listTools;
use DB;
use File;
use Session;
class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo = PromoEvent::orderBy('created_at', 'desc')->get();
        return view('promo.index', compact('promo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = Itempackage::all();
        return view('promo.create', compact('item'));
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
            'marketing_name' => 'required',
            'campaign_name' => 'required',
            'promo_description' => 'required|min:50',
            'media' => 'required|mimes:jpeg,jpg,png,gif,mkv,mp4|required|max:2048'
        ]);
        $promo = new PromoEvent();
        $promo->marketing_name = $request->marketing_name;
        $promo->campaign_name = $request->campaign_name;
        $promo->campaign_duration_start = $request->campaign_duration_start;
        $promo->campaign_duration_end = $request->campaign_duration_end;
        $promo->priority = $request->priority;
        $promo->promo_description = $request->promo_description;
        //Media
        if ($request->hasFile('media')){
            $file = $request->file('media');
            $path = public_path() . 'backend/template/assets/images/promo/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $promo->media = $filename;
        }
        $promo->gross_total = $request->gross_total;
        $promo->sv = $request->sv;
        $promo->package_total = $request->package_total;
        $promo->ppn = $request->ppn;
        $promo->grand_total = $request->grand_total;
        $promo->type_post = $request->type_post;
        $promo->save();
        if ($request->pra_item) {
            for($i = 0; $i < count($request->pra_item); $i++){
                $listTool = new listTools();
                $listTool->promo_id = $promo->id;
                $listTool->item_id = $request->pra_item[$i];
                $listTool->type = 'pra';
                $listTool->save();
            }
        }

        if ($request->event_item) {
            for($i = 0; $i < count($request->event_item); $i++){
                $listTool = new listTools();
                $listTool->promo_id = $promo->id;
                $listTool->item_id = $request->event_item[$i];
                $listTool->type = 'event';
                $listTool->save();
            }
        }
        if ($request->post_item) {
                for($i = 0; $i < count($request->post_item); $i++){
                $listTool = new listTools();
                $listTool->promo_id = $promo->id;
                $listTool->item_id = $request->post_item[$i];
                $listTool->type = 'post';
                $listTool->save();
            }
        }

        Session::flash('flash_notification', [
            'level' => 'success',
            'message' => 'a New Promo has been Added'
        ]);
        return redirect()->route('promo.index');
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
        $praItemList = [];
        $eventItemList = [];
        $postItemList= [];

        $promo = PromoEvent::findOrFail($id);
        if(count($promo->list_tools) > 0) {
            foreach($promo->list_tools as $row) {
                switch($row->type) {
                    case "pra":
                        $praItemList[$row->item_id] = $row;
                        break;
                    case "event":
                        $eventItemList[$row->item_id] = $row;
                        break;
                    case "post":
                        $postItemList[$row->item_id] = $row;
                        break;
                }
            }
        }

        $promo->list_tools = [
            'pra' => $praItemList,
            'event' => $eventItemList,
            'post' => $postItemList
        ];
        $item = Itempackage::all();
        return view('promo.edit', compact('promo', 'item'));
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
            'marketing_name' => 'required',
            'campaign_name' => 'required',
            'promo_description' => 'required|min:50'
        ]);
        $promo = PromoEvent::findOrFail($id);
        $promo->marketing_name = $request->marketing_name;
        $promo->campaign_name = $request->campaign_name;
        $promo->campaign_duration_start = $request->campaign_duration_start;
        $promo->campaign_duration_end = $request->campaign_duration_end;
        $promo->priority = $request->priority;
        $promo->promo_description = $request->promo_description;
        //Media
        if ($request->hasFile('media')){
            $file = $request->file('media');
            $path = public_path() . 'backend/template/assets/images/promo/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccsess = $file->move($path, $filename);
            //hapus Media lama
            if ($promo->media){
                $old_foto = $promo->media;
                $filepath = public_path() . 'backend/template/assets/images/promo/' . $promo->media;
                try {
                    File::delete($filepath);
                }
                catch (FileNotFoundException $e){
                    //File sudah dihapus atau tidak ada
                }
            }
            $promo->media = $filename;
        }
        $promo->gross_total = $request->gross_total;
        $promo->sv = $request->sv;
        $promo->package_total = $request->package_total;
        $promo->ppn = $request->ppn;
        $promo->grand_total = $request->grand_total;
        $promo->type_post = $request->type_post;
        $promo->save();
        if ($request->pra_item) {
            for($i = 0; $i < count($request->pra_item); $i++){
                $listTool = new listTools();
                $listTool->promo_id = $promo->id;
                $listTool->item_id = $request->pra_item[$i];
                $listTool->type = 'pra';

                $listTool->save();
            }
        }

        if ($request->event_item) {
            for($i = 0; $i < count($request->event_item); $i++){
                $listTool = new listTools();
                $listTool->promo_id = $promo->id;
                $listTool->item_id = $request->event_item[$i];
                $listTool->type = 'event';
                $listTool->save();
            }
        }
        if ($request->post_item) {
                for($i = 0; $i < count($request->post_item); $i++){
                $listTool = new listTools();
                $listTool->promo_id = $promo->id;
                $listTool->item_id = $request->post_item[$i];
                $listTool->type = 'post';
                $listTool->save();
            }
        }
        Session::flash('flash_notification', [
            'level' => 'success',
            'message' => 'a New Promo has been Added'
        ]);
        return redirect()->route('promo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = PromoEvent::findOrFail($id);
        //Hapus Media file
        if ($promo->media){
            $old_foto = $promo->media;
            $filepath = public_path() . 'backend/template/assets/images/promo/' . $promo->media;
            try {
                File::delete($filepath);
            }
            catch (FileNotFoundException $e){
                //File sudah dihapus/tidak ada
            }
        }
        $promo->delete();
        $list_tools = DB::table('list_tools')->where('promo_id',$id)->delete();
        Session::flash('flash_notification', [
            'level' => 'danger',
            'message' => 'the Promo that you choosen has been Removed'
        ]);
        return redirect()->route('promo.index');
    }
}
