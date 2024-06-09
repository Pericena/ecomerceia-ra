<?php
namespace Database\Seeders;
use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Proveedor::create([
      'nombre' => 'Ropa Elegante S.A.',
      'correo' => 'contacto@ropaelegante.com',
      'celular' => '71234567',
      'direccion' => 'Av. Central N° 1234, Zona Centro',
    ]);

    Proveedor::create([
      'nombre' => 'Moda Urbana',
      'correo' => 'ventas@modaurbana.com',
      'celular' => '72223456',
      'direccion' => 'Calle Comercio N° 567, Zona Sur',
    ]);

    Proveedor::create([
      'nombre' => 'Vestidos y Más',
      'correo' => 'info@vestidosymas.com',
      'celular' => '73234567',
      'direccion' => 'Av. Principal N° 890, Zona Este',
    ]);

    Proveedor::create([
      'nombre' => 'Textiles Innovadores',
      'correo' => 'contacto@textilesinnovadores.com',
      'celular' => '74234567',
      'direccion' => 'Calle Industria N° 345, Zona Norte',
    ]);

    Proveedor::create([
      'nombre' => 'Fashion Pro',
      'correo' => 'ventas@fashionpro.com',
      'celular' => '75234567',
      'direccion' => 'Av. Libertad N° 678, Zona Oeste',
    ]);

    Proveedor::create([
      'nombre' => 'Ropa Deportiva S.R.L.',
      'correo' => 'info@ropadeportiva.com',
      'celular' => '76234567',
      'direccion' => 'Calle Deportiva N° 910, Zona Centro',
    ]);

    Proveedor::create([
      'nombre' => 'Estilo y Confort',
      'correo' => 'contacto@estiloyconfort.com',
      'celular' => '77234567',
      'direccion' => 'Av. Moda N° 123, Zona Sur',
    ]);

    Proveedor::create([
      'nombre' => 'Telas y Diseños',
      'correo' => 'ventas@telasydisenos.com',
      'celular' => '78234567',
      'direccion' => 'Calle Diseño N° 456, Zona Este',
    ]);
  }
}