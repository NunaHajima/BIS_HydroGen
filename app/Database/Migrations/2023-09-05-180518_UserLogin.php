<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserLogin extends Migration
{
    public function up()
    {
        $fields = [
            "id_user" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "namaperusahaan" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "email" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "alamatperusahaan" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "notelp" => [
                "type"=> "INT",              
            ],
            "password" => [
                "type"=> "TEXT",
            ]
        ];
        $this->forge->addKey('id_user', true);
        $this->forge->addField($fields);
        $this->forge->createTable('userlogin', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('userlogin', true); //If Exists drop table products
    }
}
