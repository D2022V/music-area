<?php

namespace App\Http\Controllers;

use App\User;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::has('albums', '>', 0)->get();

        return view('artists.index', ['users' => $users]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $artists)
    {
        $albums = $artists->albums;

        return view('artists.artist', ['artist' => $artists, 'albums' => $albums,]);
    }
}
