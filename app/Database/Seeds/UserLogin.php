<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserLogin extends Seeder
{
    public function run()
    {
        $data = [
            'namaperusahaan' => 'IP Muara Karang',
            'email'    => 'muarakarang@gmail.com',
            'alamatperusahaan'    => 'Muara Karang, Jakarta Utara',
            'notelp'    => '21123345',
            'password'    => md5("ipmuarakarang"),
        ];

        // Simple Queries
        $this->db->table('userlogin')->insert($data);

        $data = [
            'namaperusahaan' => 'Admin HydroGen',
            'email'    => 'adminhydrogen@gmail.com',
            'alamatperusahaan'    => 'Jakarta',
            'notelp'    => '213333333',
            'password'    => md5("hydro01gen"),
        ];

        // Simple Queries
        $this->db->table('userlogin')->insert($data);
    }
}
