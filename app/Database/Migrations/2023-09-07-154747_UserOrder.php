<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserOrder extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "tanggal" => [
                "type"=> "DATE",
            ],
            "kodebarang" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
                "default" => null,
            ],
            "qty" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "beratsatuan" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "berattotal" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "lokasipltu" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
                "default" => null,
            ],
            "hargasatuan" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "jumlahharga" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "keagen" => [
                "type"=> "DATE",                
            ],
            "dariagen" => [
                "type"=> "DATE",                
            ],
            "ups" => [
                "type"=> "DATE",                
            ],
            "sampaikantor" => [
                "type"=> "DATE",                
            ],
            "tanggalpengiriman" => [
                "type"=> "DATE",                
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('UserOrder', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('UserOrder', true); //If Exists drop table products
    }
}
