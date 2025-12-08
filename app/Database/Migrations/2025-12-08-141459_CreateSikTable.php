<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSikTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_mahasiswa' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nim' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'semester' => [
                'type' => 'ENUM',
                'constraint' => ['Ganjil','Genap'],
            ],
            'tahun_ajaran' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'tanggal_izin' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'alasan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'prodi' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'default' => 'Pending',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('sik', true);
    }

    public function down()
    {
        $this->forge->dropTable('sik', true);
    }
}
