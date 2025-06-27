<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          // 1. Ambil semua data kriteria untuk membuat header tabel secara dinamis.
        // Diurutkan berdasarkan kode agar konsisten (C1, C2, C3, ...)
        $kriterias = Kriteria::orderBy('kode_kriteria')->get();

        // 2. Ambil semua data alternatif beserta relasi kriteria-nya (Eager Loading).
        // Eager loading `with('kriteria')` sangat penting untuk performa agar tidak terjadi N+1 query problem.
        $alternatifs = Alternatif::with('kriteria')->orderBy('nama_provider')->get();

        // 3. Kirim kedua data tersebut ke view.
        return view('alternatif.index', compact('alternatifs', 'kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          // Ambil semua kriteria untuk ditampilkan di form
        $kriterias = Kriteria::orderBy('kode_kriteria')->get();
        return view('alternatif.create', compact('kriterias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'nama_provider' => 'required|string|max:255',
        'kriteria_nilai' => 'required|array',
        'kriteria_nilai.*' => 'required|numeric',
     ]);
        $alternatif = Alternatif::create(['nama_provider' => $request->nama_provider]);

            // Loop untuk menyimpan ke tabel pivot
    foreach ($request->kriteria_nilai as $kriteria_id => $nilai) {
        $alternatif->kriteria()->attach($kriteria_id, ['nilai' => $nilai]);
    }

        return redirect()->route('alternatif.index')->with('success', 'Data Paket berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alternatif $alternatif)
    {
         $kriterias = Kriteria::orderBy('kode_kriteria')->get();
    // Eager load nilai kriteria siswa untuk ditampilkan di form
    $alternatif->load('kriteria'); 
    return view('alternatif.edit', compact('alternatif', 'kriterias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alternatif $alternatif)
    {
        // Validasi input
        $request->validate([
            'nama_provider' => 'required|string|max:255',
            'kriteria_nilai' => 'required|array',
            'kriteria_nilai.*' => 'required|numeric|min:0',
        ]);
        try {
            // 1. Perbarui nama provider
            $alternatif->update(['nama_provider' => $request->nama_provider]);
            // 2. Validasi semua kriteria_id ada di database
            $validKriteriaIds = Kriteria::whereIn('id', array_keys($request->kriteria_nilai))
                ->pluck('id')
                ->toArray();
            if (count($validKriteriaIds) !== count($request->kriteria_nilai)) {
                return redirect()->back()
                    ->withErrors(['kriteria_nilai' => 'Salah satu atau lebih ID kriteria tidak valid.'])
                    ->withInput();
            }
            // 3. Format data untuk sync dengan menyertakan nilai
            $syncData = [];
            foreach ($request->kriteria_nilai as $kriteriaId => $nilai) {
                $syncData[$kriteriaId] = ['nilai' => $nilai];
            }
            // 4. Lakukan sync dengan transaction untuk memastikan konsistensi data
            DB::transaction(function () use ($alternatif, $syncData) {
                $alternatif->kriteria()->sync($syncData);
            });
            return redirect()->route('alternatif.index')
                ->with('success', 'Data Paket berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alternatif $alternatif)
    {
        // Karena kita pakai onDelete('cascade'), nilai di tabel pivot akan ikut terhapus
    $alternatif->delete();
    return redirect()->route('alternatif.index')->with('success', 'Data Paket berhasil dihapus.');
    }
}