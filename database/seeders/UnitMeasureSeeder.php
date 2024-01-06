<?php

namespace Database\Seeders;

use App\Models\UnitMeasure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitMeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 'DPC', 'name' => 'Docenas de piezas', 'status_id' => 'AC', 'short_name' => null],
            ['id' => 'H87', 'name' => 'Pieza', 'status_id' => 'AC', 'short_name' => null],
            ['id' => 'KGM', 'name' => 'Kilos', 'status_id' => 'AC', 'short_name' => 'KG'],
            ['id' => 'XBX', 'name' => 'Cajas', 'status_id' => 'AC', 'short_name' => null],
            ['id' => 'XKI', 'name' => 'Kit (Conjunto de piezas)', 'status_id' => 'AC', 'short_name' => null],
            ['id' => 'XPK', 'name' => 'Paquete', 'status_id' => 'AC', 'short_name' => null],
        ];
        UnitMeasure::insert($data);
    }
}
