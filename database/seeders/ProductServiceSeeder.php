<?php

namespace Database\Seeders;

use App\Models\ProductService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Café (Café molido)', 'sat_key' => '50201706'],
            ['name' => 'Sustituto de café', 'sat_key' => '50201707'],
            ['name' => 'Bebida de café', 'sat_key' => '50201708'],
            ['name' => 'Café instantáneo (Café soluble)', 'sat_key' => '50201709'],
            ['name' => 'Té instantáneo', 'sat_key' => '50201711'],
            ['name' => 'Bolsas de té (Sobres de té)', 'sat_key' => '50201713'],
            ['name' => 'Cerveza', 'sat_key' => '50202201'],
            ['name' => 'Agua (Agua embotellada, Agua potable, Agua purificada)', 'sat_key' => '50202301'],
            ['name' => 'Hielo', 'sat_key' => '50202302'],
            ['name' => 'Jugos de repisa (Jugos de fruta naturales o con conservadores envasados, Zumo de frutas, Néctar de frutas)', 'sat_key' => '50202304'],
            ['name' => 'Refrescos', 'sat_key' => '50202306'],
            ['name' => 'Aceites vegetales o de planta comestibles (Aceite de ajonjolí, Aceite de canola (colza), Aceite de coco, Aceite de cártamo, Aceite de girasol, Aceite de linaza, Aceite de maíz, Aceite de olivo (oliva), Aceite de soya, Margarina)', 'sat_key' => '50151513'],
            ['name' => 'Grasas saturadas de vegetales o plantas comestibles', 'sat_key' => '50151514'],
            ['name' => 'Papas fritas de talego o mezclas (Botanas surtidas, Frituras)', 'sat_key' => '50192109'],
            ['name' => 'Mermeladas o preservativos de fruta (Mermeladas, jaleas o conservas de fruta)', 'sat_key' => '50192401'],
            ['name' => 'Azucares naturales o productos endulzantes (Azúcar moscabada o morena, Inulina de maguey o agave, Piloncillo)', 'sat_key' => '50161509'],
            ['name' => 'Azúcar o sustituto de azúcar, confite (Gomitas)', 'sat_key' => '50161814'],
            ['name' => 'Productos de leche o mantequilla frescos (Crema, Crema de leche, Lácteos probióticos, Nata, Suero de mantequilla, Yogurt, Licuado, Bebida lactea)', 'sat_key' => '50131701'],
            ['name' => 'Queso natural', 'sat_key' => '50131801'],
            ['name' => 'Huevos en la cascara de gallina (Huevos de gallina en cáscara)', 'sat_key' => '50131612'],

            
        ];
        ProductService::insert($data);
    }
}
