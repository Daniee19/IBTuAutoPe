<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;
class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar un solo registro
        Vehiculo::create([
            'marca' => 'Toyota',
            'modelo' => 'Corolla',
            'tipo_vehiculo' => 'Nuevo',
            'precio' => '9200',
            'anio' => '2020',
            'hasta' => '0km',
            'combustible' => 'Gasolina',
            'transmision' => 'Mecánica',
            'foto' => "images/catalogo/toyota_rarrr.png"
        ]);

        // Insertar múltiples registros a la vez
        Vehiculo::insert([
            ['marca' => 'Mercedes', 'modelo' => 'Fiesta', 'tipo_vehiculo'=> 'Nuevo','precio' => '10100', 'anio' => '1998', 'hasta' => '200km', 'combustible' => 'Eléctrico', 'transmision' => 'Automático', 'foto' => "images/catalogo/mercedes_run.png"],
            ['marca' => 'Honda', 'modelo' => 'Civic', 'tipo_vehiculo'=> 'Usado','precio' => '9200', 'anio' => '2005', 'hasta' => '0km', 'combustible' => 'Gasolina', 'transmision' => 'Automático', 'foto' => "images/catalogo/honda_ron.png"],
            ['marca' => 'Kia', 'modelo' => 'Spark', 'tipo_vehiculo'=> 'Seminuevo','precio' => '5600', 'anio' => '2005', 'hasta' => '0km', 'combustible' => 'Híbrido', 'transmision' => 'Manual', 'foto' => "images/catalogo/kia_rioo.png"],
            ['marca' => 'Chevrolet', 'modelo' => 'Civic', 'tipo_vehiculo'=> 'Nuevo','precio' => '11000', 'anio' => '2005', 'hasta' => '0km', 'combustible' => 'Eléctrico', 'transmision' => 'Manual', 'foto' => "images/catalogo/chevrolet_tu.png"],
            ['marca' => 'Suzuki', 'modelo' => 'Spark', 'tipo_vehiculo'=> 'Usado','precio' => '7200', 'anio' => '1977', 'hasta' => '100km', 'combustible' => 'Gasolina', 'transmision' => 'Automático', 'foto' => "images/catalogo/suzuki_rar.png"]
        ]);
    }
}
