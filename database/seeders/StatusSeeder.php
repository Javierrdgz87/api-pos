<?php

namespace Database\Seeders;

use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 'AC', 'name' => 'Activo', 'icon' => 'fa-solid fa-check', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'AE', 'name' => 'Aceptada', 'icon' => 'fa-solid fa-check', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'AP', 'name' => 'Aprovada', 'icon' => 'fa-solid fa-check', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'CA', 'name' => 'Cancelada', 'icon' => 'fa-solid fa-xmark', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'EL', 'name' => 'Eliminado', 'icon' => 'fa-solid fa-xmark', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'EN', 'name' => 'Enviado', 'icon' => 'fa-solid fa-paper-plane', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'FA', 'name' => 'Facturado', 'icon' => 'fa-solid fa-money-bill-1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'IN', 'name' => 'Inactivo', 'icon' => 'fa-solid fa-ban', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'NU', 'name' => 'Nuevo', 'icon' => 'fa-solid fa-pencil', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'PE', 'name' => 'Pendiente', 'icon' => 'fa-solid fa-hourglass-half', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'PG', 'name' => 'Pagado', 'icon' => 'fa-solid fa-money-bill-1-wave', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'PP', 'name' => 'Pendiente Pago', 'icon' => 'fa-solid fa-hourglass', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'PR', 'name' => 'En Proceso', 'icon' => 'fa-solid fa-cogs', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 'RE', 'name' => 'Rechazado', 'icon' => 'fa-solid fa-ban', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        Status::insert($data);
    }
}
