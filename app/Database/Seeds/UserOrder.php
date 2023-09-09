<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserOrder extends Seeder
{
    public function run()
    {
        $data = [
            'tanggal' => "2023-12-21",
            'kodebarang'    => 'ES-1010333',
            'qty'    => 2,
            'beratsatuan'    => 2,
            'berattotal'    => 4,
            'lokasipltu'    => "Muara Karang",
            'hargasatuan'    => 0,
            'jumlahharga'    => 0,
            'keagen' => "",
            'dariagen' => "",
            'ups' => "",
            'sampaikantor' => "",
            'tanggalpengiriman' => "",
        ];

        // Simple Queries
        $this->db->table('UserOrder')->insert($data);
    }
}