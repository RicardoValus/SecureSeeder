<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('contacts')->insert([
            'name'             => Crypt::encryptString('Ricardo Valus'),
            'email'            => Crypt::encryptString('ricardo@email.com'),
            'telefone'         => Crypt::encryptString('(00) 9999-9999'),
            'data_nascimento'  => Crypt::encryptString('2004-06-03')
        ]);

        DB::table('contacts')->insert([
            'name'             => Crypt::encryptString('Maria Souza'),
            'email'            => Crypt::encryptString('maria@email.com'),
            'telefone'         => Crypt::encryptString('(00) 5456-9999'),
            'data_nascimento'  => Crypt::encryptString('2020-05-18')
        ]);

    }
}
