<?php

namespace Database\Seeders;

use App\Models\TipoPago;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPagoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    TipoPago::create(
      [
        'nombre' => 'Tigo Money',
        'nroCta' => '77561231',
        'qr' => 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/3d%2Fimages.png?alt=media&token=e7278a42-a5df-4262-bb19-b63a477ffdb6',
      ],
    );
  }
}