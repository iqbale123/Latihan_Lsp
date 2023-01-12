<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class APIUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_admin(Request $request)
    {
        $now = new DateTime();
        $formated = $now->format('Y-m-d H:i:s');

        $user = User::create([
            'kode' => $request->kode,
            'nis' => $request->nis,
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => $request->password,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'photo' => $request->photo,
            'verif' => $request->verif,
            'role' => $request->role,
            'join_date' => $formated,
            'terakhir_login' => null,
        ]);
        return response()->json(['msg' => 'Data created', 'data' => $user], 201);
    }

    public function store_user(Request $request)
    {
        $now = new DateTime();
        $formated = $now->format('Y-m-d H:i:s');

        $user = User::create([
            'kode' => $request->kode,
            'nis' => $request->nis,
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => $request->password,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'photo' => $request->photo,
            'verif' => $request->verif,
            'role' => 'user',
            'join_date' => $formated,
            'terakhir_login' => null,
        ]);
        return response()->json(['msg' => 'Data created', 'data' => $user], 201);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
