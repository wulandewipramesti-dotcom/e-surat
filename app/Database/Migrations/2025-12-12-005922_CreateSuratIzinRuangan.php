<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSimrTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'        => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nim'         => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'jurusan'     => [        // ubah dari matkul menjadi jurusan
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kegiatan'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal'     => [
                'type' => 'DATE',
            ],
            'waktu_mulai' => [
                'type' => 'TIME',
            ],
            'waktu_selesai' => [
                'type' => 'TIME',
            ],
            'ruangan'     => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'status'      => [
                'type'       => 'ENUM',
                'constraint' => ['pending', 'approved', 'rejected'],
                'default'    => 'pending',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('simr');
    }

    public function down()
    {
        $this->forge->dropTable('simr');
    }
}
