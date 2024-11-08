<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => Hash::make('password#2024')

        ]);
        $admin->assignRole('admin');
        $admin->givePermissionTo('kelola_akun');

        $pustakawan = User::create([
            'name' => 'Pustakawan',
            'email' => 'pustakawan@gmail.com',
            'password' => Hash::make('password#2024')
        ]);
        $pustakawan->assignRole('pustakawan');
        $pustakawan->givePermissionTo('kelola_buku');
        $pustakawan->givePermissionTo('kelola_peminjaman');
        $pustakawan->givePermissionTo('kelola_pengembalian');


        $mahasiswa = User::create([
            'name' => 'Mahasiswa',
            'email' => 'Mahasiswa123@gmail.com',
            'password' => Hash::make('password#2024')
        ]);
        $mahasiswa->assignRole('member');
        $mahasiswa->givePermissionTo('lihat_buku');
        $mahasiswa->givePermissionTo('pinjam_buku');
    }
}
