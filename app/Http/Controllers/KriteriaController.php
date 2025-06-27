<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKriteriaRequest;
use App\Http\Requests\UpdateKriteriaRequest;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriterias = Kriteria::orderBy('kode_kriteria')->get();
    return view('kriteria.index', compact('kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          // Method ini tidak perlu mengirim data apa pun,
        // hanya menampilkan halaman form.
        return view('kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKriteriaRequest $request)
    {
        
        Kriteria::create($request->validated()); // Gunakan validated() untuk keamanan

        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil ditambahkan.');
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
    public function edit(Kriteria  $kriterium)
    {
           // Nama variabel $kriterium otomatis dicocokkan oleh Laravel dari route model binding
          return view('kriteria.edit', ['kriteria' => $kriterium]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKriteriaRequest  $request, Kriteria $kriterium)
    {
         $request->validate([
        'kode_kriteria' => 'required|max:10|unique:kriterias,kode_kriteria,' . $kriterium->id,
        'nama_kriteria' => 'required|string',
        'bobot' => 'required|numeric|min:0',
        'tipe' => 'required|in:benefit,cost',
    ]);

    
    $kriterium->update($request->all());

    return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kriteria $kriterium)
    {
         $kriterium->delete();
    return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil dihapus.');
    }
}