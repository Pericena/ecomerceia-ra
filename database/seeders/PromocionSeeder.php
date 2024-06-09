<?php

namespace Database\Seeders;

use App\Models\Promocion;
use Illuminate\Database\Seeder;

class PromocionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Promocion::create([
      'descuento' => '10',
      'fhiniciada' => '2023-11-01 07:00:00',
      'fhfinalizada' => '2024-02-01 07:00:00'
    ]);

    Promocion::create([
      'descuento' => '20',
      'fhiniciada' => '2023-11-01 07:00:00',
      'fhfinalizada' => '2024-02-01 07:00:00'
    ]);

    Promocion::create([
      'descuento' => '30',
      'fhiniciada' => '2023-11-01 07:00:00',
      'fhfinalizada' => '2024-02-01 07:00:00'
    ]);

    Promocion::create([
      'descuento' => '40',
      'fhiniciada' => '2023-11-01 07:00:00',
      'fhfinalizada' => '2024-02-01 07:00:00'
    ]);

    Promocion::create([
      'descuento' => '50',
      'fhiniciada' => '2023-11-01 07:00:00',
      'fhfinalizada' => '2024-02-01 07:00:00'
    ]);
  }
}