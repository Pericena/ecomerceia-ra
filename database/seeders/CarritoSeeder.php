<?php

namespace Database\Seeders;

use App\Models\Carrito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarritoSeeder extends Seeder
{
  public function run()
  {
    $carritos = [
      [
        'fechaHora' => now()->subDays(1),
        'estado' => '1',
        'total' => '150',
        'idCliente' => '6'
      ],
      [
        'fechaHora' => now()->subHours(12),
        'estado' => '1',
        'total' => '280',
        'idCliente' => '7'
      ],
      [
        'fechaHora' => now()->subMinutes(30),
        'estado' => '0',
        'total' => '0',
        'idCliente' => '8'
      ],
      [
        'fechaHora' => now()->subDays(2),
        'estado' => '1',
        'total' => '90',
        'idCliente' => '6'
      ],
    ];

    foreach ($carritos as $carritoData) {
      Carrito::create($carritoData);
    }
  }
}