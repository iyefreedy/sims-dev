<?php

namespace App\Http\Controllers;

use App\Http\Resources\NilaiResource;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::user()->role == 'guru') {
            // $guru = Auth::user()->info;
            $nilai = Nilai::all();


            if (request()->has('mata_pelajaran_id')) {
                $nilai = $nilai->where('mata_pelajaran_id', '==', request('mata_pelajaran_id'));
            }

            if (request()->has('kelas_id')) {
                $nilai = $nilai->where('kelas_id', '==', request('kelas_id'));
            }


            return NilaiResource::collection($nilai);
        }

        if (Auth::user()->role == 'siswa') {
            $siswa = Auth::user()->info;
            $nilai = Nilai::where('siswa_id', $siswa->id)->get();
            return NilaiResource::collection($nilai);
        }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
