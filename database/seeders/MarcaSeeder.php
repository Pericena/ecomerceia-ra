<?php

namespace Database\Seeders;

use App\Models\marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $marcas = [
      'Puma',
      'Nike',
      'Adidas',
      'Reebok',
      'Under Armour',
      'New Balance',
      'Converse',
      'Levi\'s',
      'H&M',
      'Zara',
      'Uniqlo',
      'Gap',
      'Tommy Hilfiger',
      'Calvin Klein',
      'Ralph Lauren',
      'Gucci',
      'Prada',
      'Chanel',
      'Versace',
      'Louis Vuitton',
      'Burberry',
      'Fendi',
      'Armani',
      'Dolce & Gabbana',
      'Hugo Boss',
      'Diesel',
      'Balenciaga',
      'Givenchy',
      'Valentino',
      'Hermès',
      'Lacoste',
      'Superdry',
      'Guess',
      'Patagonia',
      'The North Face',
      'Columbia',
      'Fila',
      'Champion',
      'Vans',
      'Timberland',
      'Quiksilver',
      'Billabong',
      'Roxy',
      'Rip Curl'
    ];

    foreach ($marcas as $nombre) {
      Marca::create([
        'nombre' => $nombre,
      ]);
    }
  }
}
