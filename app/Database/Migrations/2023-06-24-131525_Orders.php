<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'berat_barang' => [
                'type' => 'INT',
                'constraint' => 6,
            ],
            'panjang_barang' => [
                'type' => 'INT',
                'constraint' => 6,
            ],
            'lebar_barang' => [
                'type' => 'INT',
                'constraint' => 6,
            ],
            'tinggi_barang' => [
                'type' => 'INT',
                'constraint' => 6,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey("user_id", "users", "id", "CASCADE", "CASCADE", "FK_ORDERID_USRID");
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
