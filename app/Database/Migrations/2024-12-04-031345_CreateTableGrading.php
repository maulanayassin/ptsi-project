<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableGrading extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'year' =>[
                'type' => 'INT',
                'constraint' => 5,
                'null' => true,
            ],
            'city_name' => [
                'type'        => 'VARCHAR',
                'constraint'  => 100, 
                'null' => true,
            ],
            'city_id'   => [
                'type'        => 'INT',
                'constraint'  => 5,
                'null' => true,
            ],
            'province_name' => [
                'type'        => 'VARCHAR',
                'constraint'  => 100, 
                'null' => true,
            ],
            'province_id'   => [
                'type'        => 'INT',
                'constraint'  => 5,
                'null' => true,
            ],
            'goal'   => [
                'type'        => 'INT',
                'constraint'  => 5,
                'null' => true,
            ],
            'score' => [
                'type' => 'DECIMAL',
                'constraint' => '10,5',
                'null' => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ]
        ]);
        $this->forge->addKey('id', true);

        // Membuat tabel users
        $this->forge->createTable('grading');
    }

    public function down()
    {
        //
    }
}
