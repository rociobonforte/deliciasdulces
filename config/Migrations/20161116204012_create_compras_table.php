<?php

use Phinx\Migration\AbstractMigration;

class CreateComprasTable extends AbstractMigration
{
     public function change()
    {
        $table = $this->table('compras');

        $table->addColumn('cantidad', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('precio', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('pedido', 'datetime');
        
        $table->create();

        $refTable = $this->table('compras');
        $refTable->addColumn('id_producto', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('id_producto', 'productos', 'id', array('delete' => 'CASCADE', 'update'=>'NO_ACTION'))
                 ->addColumn('id_user', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('id_user', 'users', 'id', array('delete' => 'CASCADE', 'update'=>'NO_ACTION'))
                 ->update();
    }
}
