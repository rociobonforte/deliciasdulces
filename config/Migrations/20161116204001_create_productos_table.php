<?php

use Phinx\Migration\AbstractMigration;

class CreateProductosTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('productos');
        $table->addColumn('nombre', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('precio_actual', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('foto', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
         $table->addColumn('dir', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('descripcion', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();


        $refTable = $this->table('productos');
        $refTable->addColumn('id_categoria', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('id_categoria', 'categorias', 'id', array('delete' => 'CASCADE', 'update'=>'NO_ACTION'))

                 ->update();
    }
    
}
