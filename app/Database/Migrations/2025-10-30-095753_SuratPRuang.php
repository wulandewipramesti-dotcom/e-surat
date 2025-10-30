<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuratPRuang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_surat_p_ruang' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nomor_surat' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_peminjam' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'nama_ruangan' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'tanggal_peminjaman' => [
                'type' => 'DATE',
            ],
            'waktu_mulai' => [
                'type' => 'TIME',
            ],
            'waktu_selesai' => [
                'type' => 'TIME',
            ],
            'keperluan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'default'    => 'menunggu',
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

        $this->forge->addKey('id_surat_p_ruang', true);
        $this->forge->createTable('surat_p_ruang');
    }

    public function down()
    {
        $this->forge->dropTable('surat_p_ruang');
    }
}
