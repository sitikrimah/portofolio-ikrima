<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\portofolio;

class PortofolioController extends Controller
{
    //
    function show(){
        $data['portofolio']=Portofolio::all();
        return view('portofolio',$data);
    }

    function template(){
        // $data['portofolio']=Portofolio::all();
        return view('template');
    }

    function add(){
        $data = [
            'action'=>url('portofolio/create'),
            'tombol'=>'simpan',
            'portofolio'=>(object)[
                'nama'=>'',
                'kategori'=>'',
                'deskripsi'=>'',
                'foto'=>''
            ],
        ];
        return view ('formportofolio', $data);
        
    }
    function create (Request $req){
        portofolio::create([
            'nama'=>$req->nama,
            'kategori'=>$req->kategori,
            'deskripsi'=>$req->deskripsi,
            'foto' => $req->file('foto')->store('foto')
            // 'foto'=>$req->foto
        ]);
        return redirect('portofolio');
    }
    function hapus($id){
        $portofolio=portofolio::where('id',$id)->first();
        $portofolio->delete();
        // Storage::delete($portofolio->foto);
        return redirect('portofolio');
    }
    
    function edit ($id) {
        $data['portofolio']=portofolio::find($id);
        $data['action']= url('portofolio/update').'/'.$data['portofolio']->id;
        // $data['tombol']='update';
        return view('formportofolio',$data);
    }
    function update(Request $req){

        // if($req->file('foto')){
        //     $portofolio = portofolio::where('id',$req->id)->first();
        //     Storage::delete($portofolio->foto);
        //     $file= $req->file('foto')->storage('foto');
        // }else{
        //     $file=DB::raw('foto');
        // }

        portofolio::where('id',$req->id)->update([
            'nama'=>$req->nama,
            'kategori'=>$req->kategori,
            'deskripsi'=>$req->deskripsi,
            // 'foto'=>$req->foto
            'foto' => $req->file('foto')->store('foto')

        ]);
        return redirect('portofolio');
    }
    
}
