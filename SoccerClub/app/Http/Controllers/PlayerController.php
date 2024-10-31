<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('players', compact('players'));
    }

    public function display($id)
    {
        $player_detail = Player::find($id);
        return view('player-detail', compact('player_detail'));
    }


}
