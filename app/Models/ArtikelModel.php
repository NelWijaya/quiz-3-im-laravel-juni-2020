<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;


class ArtikelModel{
    public static function get_all(){
        $data = DB::table('artikel')
                    ->join('users','artikel.id_pembuat','users.id')
                    ->get();
        return $data;
    }

    public static function get_user(){
        $user = DB::table('users')
                    ->get();
        return $user;
    }

    public static function get_data($id){
        $data = DB::table('artikel')
                    ->join('users','artikel.id_pembuat','users.id')
                    ->where('artikel.id_artikel', $id)
                    ->first();
        //dd($data);
        return $data;
    }

    public static function add_data($data){
        $slug = strtolower($data["judul"]);
        $slug = str_replace(' ', '-', $slug);
        $new_slug = array('slug'=>$slug);
        $new = array_merge($data, $new_slug);
        DB::table('artikel')
                ->insert($new);
        return redirect('/artikel');
    }


    public static function update_data($id, $request){
        $slug = strtolower($request["judul"]);
        $name = str_replace(' ', '-', $slug);
        $slug = str_replace(' ', '-', $slug);
        $new_slug = array('slug'=>$slug);
        $new = array_merge($request, $new_slug);
        $update = DB::table('artikel')
                        ->where('id_artikel', $id)
                        ->update([
                            'judul' => $new["judul"],
                            'isi' => $new["isi"],
                            'slug' => $new["slug"],
                            'tag' => $new["tag"]
                        ]);
        return $update;
    }

    public static function delete_data($id){
        $update = DB::table('artikel')
                        ->where('id_artikel', $id)
                        ->delete();
        return $update;
    }


}
