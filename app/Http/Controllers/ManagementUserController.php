<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        $nama = "Dwi Bina Fitriono";
        $pelajaran = ["Matematika", "Kalkulus","Pemrograman Web"];
        return view("home", compact("nama", "pelajaran"));
    }
    // {
    //     return "method ini nantinya akan digunakan untuk mengambil semua data user";

    // }
    // public function create()
    // {
    //     return "method ini nantinya akan digunakan untuk menampilkan form tambah data user";
    // }
    // public function store(Request $request)
    // {
    //     return "method ini nantinya akan digunakan untuk menyimpan data user baru ke database";
    // }   
    // public function show($id)
    // {
    //     return "method ini nantinya akan digunakan untuk mengambil data user berdasarkan id";
    // }
    // public function edit($id)
    // {
    //     return "method ini nantinya akan digunakan untuk menampilkan form edit data user berdasarkan id";
    // }
    // public function update(Request $request, $id)
    // {
    //     return "method ini nantinya akan digunakan untuk memperbarui data user berdasarkan id";
    // }
    // public function destroy($id)
    // {
    //     return "method ini nantinya akan digunakan untuk menghapus data user berdasarkan id";
    // }

}