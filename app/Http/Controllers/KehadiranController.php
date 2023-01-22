<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKehadiranRequest;
use App\Http\Resources\KehadiranResource;
use App\Models\Kehadiran;
use App\Models\Kelas;
use App\Models\Pertemuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role === 'guru') {

            return KehadiranResource::collection(Kehadiran::all());
        }

        if ($user->role === 'siswa') {
            $siswa = $user->siswa;
            $kehadiran = Kehadiran::where('siswa_id', $siswa->id)->get();
            return KehadiranResource::collection($kehadiran);
        }

        return response([
            'data' => Kehadiran::with(['siswa'])->find(1),
            'user' => $user,
        ]);
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
    public function store(StoreKehadiranRequest $request)
    {
        //
        $siswa = Kelas::find($request->kelas_id)->siswa;

        foreach ($siswa as $s) {
            Kehadiran::create([
                'kelas_id' => $request->kelas_id,
                'tanggal' => now(),
                'siswa_id' => $s->id,
            ]);
        }

        return KehadiranResource::collection(Kehadiran::where('kelas_id', $request->kelas_id)->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new KehadiranResource(Kehadiran::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function edit(Kehadiran $kehadiran)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //
        Kehadiran::find($id)->update([
            'keterangan' => $request->keterangan,
        ]);

        return new KehadiranResource(Kehadiran::findOrFail($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kehadiran $kehadiran)
    {
        //
    }
}
