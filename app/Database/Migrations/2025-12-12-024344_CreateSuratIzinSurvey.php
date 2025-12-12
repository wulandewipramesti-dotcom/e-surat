<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuratIzinSurvey extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'nama'          => ['type' => 'VARCHAR', 'constraint' => '100'],
            'nim'           => ['type' => 'VARCHAR', 'constraint' => '20'],
            'jurusan'       => ['type' => 'VARCHAR', 'constraint' => '100'],
            'kegiatan'      => ['type' => 'VARCHAR', 'constraint' => '255'],
            'lokasi_survey' => ['type' => 'VARCHAR', 'constraint' => '255'],
            'tanggal'       => ['type' => 'DATE'],
            'waktu_mulai'   => ['type' => 'TIME'],
            'waktu_selesai' => ['type' => 'TIME'],
            'status'        => ['type' => 'ENUM("pending","approved","rejected")', 'default' => 'pending'],

            'created_at'    => ['type' => 'DATETIME', 'null' => true],
            'updated_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('sism');
    }

    public function down()
    {
        $this->forge->dropTable('sism');
    }
}
