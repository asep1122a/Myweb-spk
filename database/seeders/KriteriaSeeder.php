<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kriteria;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama untuk menghindari duplikat saat seeding ulang
        Kriteria::query()->delete();


        $kriterias = [
            ['kode_kriteria' => 'C1', 'nama_kriteria' => 'Harga', 'bobot' => 0.30, 'tipe' => 'cost'],
            ['kode_kriteria' => 'C2', 'nama_kriteria' => 'Kuota Data', 'bobot' => 0.25, 'tipe' => 'benefit'],
            ['kode_kriteria' => 'C3', 'nama_kriteria' => 'Masa Aktif', 'bobot' => 0.20, 'tipe' => 'benefit'],
            ['kode_kriteria' => 'C4', 'nama_kriteria' => 'Bonus Tambahan', 'bobot' => 0.15, 'tipe' => 'benefit'],
            ['kode_kriteria' => 'C5', 'nama_kriteria' => 'Keceptan Internet', 'bobot' => 0.10, 'tipe' => 'benefit'],
        ];

        foreach ($kriterias as $kriteria) {
            Kriteria::create($kriteria);
        }
    }
}