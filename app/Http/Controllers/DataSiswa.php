<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DataSiswa extends Controller
{
    public function Tampilkan(){
        $siswa = Siswa::all();
        $kelas = kelas::all();

        return view(
            "Pages.dashboard.MasterData.DataSiswa",
            [
                "DataSiswa" => $siswa->all()
            ]
        );
    }
}
