<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminManageItemsController extends Controller
{
    public function showAll(){
        $Items = Item::all();
        return view('Admin.Item.index', ["Items"=>$Items]);
    }
    public function showPerID($id){
        $Item = Item::findorFail($id);
        return view('Admin.Item.show', ["Item"=>$Item]);

    }
    public function showAdd(){
        return view('Admin.Item.create',['Item'=>null]);
    }
    public function doAdd(Request $req){

        $req->validate([
            'title' => ['required', 'string','min:2','max:255',],
            'author' => ['required', 'string','min:2','max:255'],
            'director' => ['required', 'string','min:1','max:255'],
            'genre' => ['required', 'string','min:2','max:255'],
            'publication_year' => ['required'],
            'release_year' => ['required'],
            'item_type' => ['required'],
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $Img1 = time().'-1.'.$req->pic->extension();
        $req->pic->move(public_path('SiteImages/Items/'. auth()->user()->id), $Img1);


        Item::create([
            'title'=>$req['title'],
            'author'=>$req['author'],
            'director'=>$req['director'],
            'genre'=>$req['genre'],
            'publication_year'=>$req['publication_year'],
            'release_year'=>$req['release_year'],
            'item_type'=>$req["item_type"],
            'pic'=>$Img1,

        ]);
        return redirect()->route('admin.Item.showAll');
    }
    public function showUpdate($id){
        $Item = Item::findorFail($id);
        return view('Admin.Item.create',["Item"=>$Item]);
    }
    public function doUpdate(Request $req, $id){
        $data = Item::findorFail($id);

        $req->validate([
            'title' => ['required', 'string','min:2','max:255',],
            'author' => ['required', 'string','min:2','max:255'],
            'director' => ['required', 'string','min:1','max:255'],
            'genre' => ['required', 'string','min:2','max:255'],
            'publication_year' => ['required'],
            'release_year' => ['required'],
            'item_type' => ['required'],
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);
        $Img1 = time().'.'.$req->pic->extension();
        $req->pic->move(public_path('SiteImages/Items/'. auth()->user()->id), $Img1);

      /*  $Img2 = time().'.'.$req->picUrl2->extension();
        $req->picUrl2->move(public_path('SiteImages/Items/'. auth()->user()->id), $Img2);

        $Img3 = time().'.'.$req->picUrl3->extension();
        $req->picUrl3->move(public_path('SiteImages/Items/'. auth()->user()->id), $Img3);
*/
        Item::where('id', $id)->update([
            'title'=>$req['title'],
            'author'=>$req['author'],
            'director'=>$req['director'],
            'genre'=>$req['genre'],
            'publication_year'=>$req['publication_year'],
            'release_year'=>$req['release_year'],
            'item_type'=>$req["item_type"],
            'pic'=>$Img1,
        ]);
        return redirect()->route('admin.Item.showPerID', ['id'=>$id]);
    }


    public function showStop($id){
        if(Item::where('id', $id)->get('status')->first()['status']=="0"){
            $para = "UnBlock";
        }else{
            $para = "Block";
        }
        return view('Admin.Item.confirm', ['id'=>$id,'para'=>$para]);
    }

    public function doStop($id){
        if(Item::where('id', $id)->get('status')->first()['status']=="0"){
            Item::where('id', $id)->update([
                'status'=>'1',
            ]);
        }else{
            Item::where('id', $id)->update([
                'status'=>'0',
            ]);
        }

        return redirect()->route('admin.Item.showPerID', ['id'=>$id]);
    }



    public function showDelete($id){
        return view('Admin.Item.confirm', ['id'=>$id,'para'=>'Delete']);
    }
    public function doDelete($id){
        Item::destroy($id);
        return redirect()->route('admin.Item.showAll');
    }
}
