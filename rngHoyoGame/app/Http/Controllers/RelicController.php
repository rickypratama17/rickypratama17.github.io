<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Substat;

class RelicController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function tambah(Request $request)
    {
        // Validasi input
        $request->validate([
            'level' => 'required',
            'hasil' => 'required',
            'statInput' => 'required|array',
            'statInput.*' => 'required|string',
            'statInput1' => 'required|array',
            'statInput1.*' => 'required|string',
        ]);

        // Ambil data dari input
        $statInput = $request->input('statInput');
        $statInput1 = $request->input('statInput1');
        $level = $request->input('level');
        $hasil = $request->input('hasil');

        // Simpan data ke database
        $statistik = new Substat();
        $statistik->substat1 = isset($statInput[0]) ? $statInput[0] : null;
        $statistik->substat2 = isset($statInput[1]) ? $statInput[1] : null;
        $statistik->substat3 = isset($statInput[2]) ? $statInput[2] : null;
        $statistik->substat4 = isset($statInput[3]) ? $statInput[3] : null;
        $statistik->submat1 = isset($statInput1[0]) ? $statInput1[0] : null;
        $statistik->submat2 = isset($statInput1[1]) ? $statInput1[1] : null;
        $statistik->submat3 = isset($statInput1[2]) ? $statInput1[2] : null;
        $statistik->submat4 = isset($statInput1[3]) ? $statInput1[3] : null;
        $statistik->level = $level; // Tetapkan nilai level
        $statistik->hasil = $hasil;

        $statistik->save();


        // Redirect dengan pesan sukses
        return redirect()->route('home')->with('success', 'Data berhasil disimpan.');
    }

    // public function cari(Request $request){
    //     $request->validate([
    //         'statInput' => 'required|array',
    //         'statInput.*' => 'required|string',
    //     ]
    //     );
    //     $statInput = $request->input('statInput');
    //     $query = Substat::select()
    //     ->whereIn('substat1', $statInput)
    //     ->orWhereIn('substat2', $statInput)
    //     ->orWhereIn('substat3', $statInput)
    //     ->orWhereIn('substat4', $statInput)
    //     ->orderBy('level', 'ASC')
    //     ->get();

    //     // dd($query);

    //     // return view('index', compact('query'));
    //     return (compact('query'));

    //     $query2 = Substat::select()
    //     ->whereIn('substat1', 'query'->'submat1')
    //     ->orWhereIn('substat1', 'query'->'submat2')
    //     ->orWhereIn('substat1', 'query'->'submat3')
    //     ->orWhereIn('substat1', 'query'->'submat4')
    //     ->orderBy('level', 'ASC')
    //     ->get();
    //     return view('index', compact('query2')):
    // }

    public function cari(Request $request){
        $request->validate([
            'statInput' => 'required|array',
            'statInput.*' => 'required|string',
        ]);
    
        $statInput = $request->input('statInput');
    
        $query = Substat::select()
            ->whereIn('substat1', $statInput)
            ->orWhereIn('substat2', $statInput)
            ->orWhereIn('substat3', $statInput)
            ->orWhereIn('substat4', $statInput)
            ->orderBy('level', 'ASC')
            ->get();
    
        // Ambil nilai submat1-4 dari hasil kueri pertama
        $submatInput = $query->pluck('submat1')
                            ->merge($query->pluck('submat2'))
                            ->merge($query->pluck('submat3'))
                            ->merge($query->pluck('submat4'))
                            ->unique()
                            ->toArray();
    
        // Jalankan kueri kedua menggunakan nilai submatInput
        $query2 = Substat::select()
            ->whereIn('substat1', $submatInput)
            ->orderBy('level', 'ASC')
            ->get();
    
        // Kembalikan kedua hasil kueri
        return view('index', compact('query', 'query2'));
    }
    
}
