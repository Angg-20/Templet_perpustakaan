<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class DataBuku extends Controller
{
    public function Tampilkan(){
        $buku = Buku::all();


        return view(
            "Pages.dashboard.MasterData.DataBuku",
            [
                "DataBuku" => $buku->all()
            ]
        );
    }
}
