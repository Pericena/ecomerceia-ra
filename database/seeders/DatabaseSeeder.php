<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->call([
      RoleSeeder::class,
      PersonaSeeder::class,
      CategoriaSeeder::class,
      MarcaSeeder::class,
      PromocionSeeder::class,
      ProductoSeeder::class,
      CarritoSeeder::class,
      TipoPagoSeeder::class,
      AddressClientSeeder::class,
      ProveedorSeeder::class,
      PedidoSeeder::class, // Agregado el seeder de pedidos
    ]);
  }
}