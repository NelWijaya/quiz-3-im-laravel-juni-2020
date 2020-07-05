<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    //
    public function index(){
        return view('layouts.index');
    }

    public function artikel(){
        $data = ArtikelModel::get_all();
        return view('layouts.tabel', compact('data'));
    }

    public function artikel_form(){
        $users = ArtikelModel::get_user();
        return view('layouts.create', compact('users'));
    }

    public function artikel_post(Request $request){
        $data = $request->all();
        unset($data['_token']);
        ArtikelModel::add_data($data);
        return redirect('/artikel');
    }

    public function artikel_detail($id){
        $users = ArtikelModel::get_data($id);
        return view('layouts.detail', compact('users'));
    }

    public function artikel_detail_edit($id){
        $users = ArtikelModel::get_data($id);
        return view('layouts.form_edit', compact('users'));
    }

    public function artikel_edited($id, Request $request){
        $data = $request->all();
        $users = ArtikelModel::update_data($id, $data);

        return redirect('/artikel/'.$id);
    }

    public function delete_artikel($id){
        $users = ArtikelModel::delete_data($id);

        return redirect('/artikel');
    }
}
