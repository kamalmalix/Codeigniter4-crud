<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Forge as DatabaseForge;
use CodeIgniter\Database\Migration;
use CodeIgniter\Database\MySQLi\Forge;

class Blog extends Migration
{
    public function up()
    {
        //Membuat kolom tabel blog
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'author'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'default'        => 'John Doe',
            ],
            'content' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('blog', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('blog');
    }
}
