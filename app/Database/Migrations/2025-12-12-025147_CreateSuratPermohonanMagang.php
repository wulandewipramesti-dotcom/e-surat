<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuratPermohonanMagang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],

            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],

            'nim' => [
                'type'       => 'VARCHAR',
                'constraint' => 20
            ],

            'jurusan' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],

            'tempat_magang' => [
                'type'       => 'VARCHAR',
                'constraint' => 150
            ],

            'tanggal_pengajuan' => [
                'type' => 'DATE'
            ],

            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['pending', 'approved', 'rejected'],
                'default'    => 'pending'
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('spm');
    }

    public function down()
    {
        $this->forge->dropTable('spm');
    }
}
