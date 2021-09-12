<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_users extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field([
                        'id_users' => [
                                'type' => 'INT',
                                'constraint' => 11,
                                'auto_increment' => TRUE
                        ],
                        'username' => [
                                'type'          => 'VARCHAR',
                                'constraint'    => '50',
                        ],
                        'email' => [
                                'type'          => 'VARCHAR',
                                'constraint'    => '100',
                        ],
                        'password' => [
                                'type'          => 'VARCHAR',
                                'constraint'    => '50',
                        ],
                        'first_name' => [
                                'type'          => 'VARCHAR',
                                'constraint'    => '50',
                        ],
                        'last_name' => [
                                'type'          => 'VARCHAR',
                                'constraint'    => '50',
                        ],
                        'pic' => [
                                'type'          => 'VARCHAR',
                                'constraint'    => '155',
                        ],
                ]);
                $this->dbforge->add_key('id_users', TRUE);
                $this->dbforge->create_table('users');
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}