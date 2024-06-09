<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $productos = [
      [
        'name' => 'PUMA Polera Classics Small Logo',
        'descripcion' => 'Polera PUMA con logo pequeño en el pecho, ideal para uso diario.',
        'stock' => 27,
        'precioUnitario' => 150.00,
        'imagen' => 'polera-2.glb',
        'idcategoria' => 1,
        'idmarca' => 1,
        'idpromocion' => 5,
      ],
      [
        'name' => 'Polera Real Essential',
        'descripcion' => 'Polera básica ideal para cualquier ocasión.',
        'stock' => 16,
        'precioUnitario' => 140.00,
        'imagen' => 'polera-2.glb',
        'idcategoria' => 1,
        'idmarca' => 2,
      ],
      [
        'name' => 'Polera de Algodón Roja',
        'descripcion' => 'Polera de algodón en color rojo, cómoda y ligera.',
        'stock' => 23,
        'precioUnitario' => 70.00,
        'imagen' => 'polera-2.glb',
        'idcategoria' => 1,
        'idmarca' => 3,
        'idpromocion' => 1,
      ],
      [
        'name' => 'Polera de Algodón Negra',
        'descripcion' => 'Polera de algodón en color negro, perfecta para cualquier ocasión.',
        'stock' => 40,
        'precioUnitario' => 70.00,
        'imagen' => 'polera-1.glb',
        'idcategoria' => 1,
        'idmarca' => 4,
      ],
      [
        'name' => 'Polera de Algodón Blanca',
        'descripcion' => 'Polera de algodón en color blanco, ideal para uso diario.',
        'stock' => 45,
        'precioUnitario' => 80.00,
        'imagen' => 'polera-4.glb',
        'idcategoria' => 1,
        'idmarca' => 5,
        'idpromocion' => 4,
      ],
      [
        'name' => 'Polera Deportiva Azul',
        'descripcion' => 'Polera deportiva en color azul, adecuada para actividades físicas.',
        'stock' => 50,
        'precioUnitario' => 95.00,
        'imagen' => 'polera-5.glb',
        'idcategoria' => 2,
        'idmarca' => 1,
      ],
      [
        'name' => 'Polera Casual Verde',
        'descripcion' => 'Polera casual en color verde, perfecta para el día a día.',
        'stock' => 30,
        'precioUnitario' => 85.00,
        'imagen' => 'polera-6.glb',
        'idcategoria' => 3,
        'idmarca' => 2,
      ],
      [
        'name' => 'Polera de Manga Larga Gris',
        'descripcion' => 'Polera de manga larga en color gris, cómoda y versátil.',
        'stock' => 35,
        'precioUnitario' => 90.00,
        'imagen' => 'polera-7.glb',
        'idcategoria' => 4,
        'idmarca' => 3,
      ],
      [
        'name' => 'Polera Estampada',
        'descripcion' => 'Polera con estampado moderno, ideal para un look casual.',
        'stock' => 25,
        'precioUnitario' => 110.00,
        'imagen' => 'polera-8.glb',
        'idcategoria' => 5,
        'idmarca' => 4,
      ],
      [
        'name' => 'Polera Básica Blanca',
        'descripcion' => 'Polera básica en color blanco, esencial en cualquier guardarropa.',
        'stock' => 60,
        'precioUnitario' => 60.00,
        'imagen' => 'polera-9.glb',
        'idcategoria' => 1,
        'idmarca' => 5,
      ],
    ];

    foreach ($productos as $producto) {
      Producto::create($producto);
    }
  }
}