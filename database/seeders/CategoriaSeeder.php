<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $categorias = [
      'Polo',
      'Deportivo',
      'Clásico',
      'Casual',
      'Formal',
      'Fiesta',
      'Invierno',
      'Verano',
      'Accesorios',
      'Zapatos'
    ];

    foreach ($categorias as $nombre) {
      Categoria::create([
        'nombre' => $nombre,
      ]);
    }
  }
}