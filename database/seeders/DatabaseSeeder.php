<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    // Reemplaza el ingreso manual de datos por phpMyAdmin que pide la guía
    public function run(): void
    {
        $now = now();

        // 3 usuarios
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Juan Perez',    'email' => 'juan@gmail.com',  'password' => Hash::make('password'), 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'pedro morales', 'email' => 'pedro@gmail.com', 'password' => Hash::make('password'), 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Ana Pinto',     'email' => 'ana@gmail.com',   'password' => Hash::make('password'), 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 5 teléfonos (el usuario 1 tiene 3 -> Actividad 3)
        DB::table('phones')->insert([
            ['id' => 1, 'prefijo' => 54, 'numero' => 123456789, 'user_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'prefijo' => 51, 'numero' => 98765432,  'user_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'prefijo' => 45, 'numero' => 24689451,  'user_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'prefijo' => 48, 'numero' => 54678932,  'user_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'prefijo' => 42, 'numero' => 98876534,  'user_id' => 1, 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 4 roles
        DB::table('roles')->insert([
            ['id' => 1, 'nombre' => 'Admin',    'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'nombre' => 'Soporte',  'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'nombre' => 'User',     'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'nombre' => 'Invitado', 'created_at' => $now, 'updated_at' => $now],
        ]);

        // Tabla pivote role_user (usuario 1: Admin, Soporte, User)
        DB::table('role_user')->insert([
            ['id' => 1, 'role_id' => 1, 'user_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'role_id' => 2, 'user_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'role_id' => 1, 'user_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'role_id' => 3, 'user_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'role_id' => 3, 'user_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 6, 'role_id' => 4, 'user_id' => 2, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
