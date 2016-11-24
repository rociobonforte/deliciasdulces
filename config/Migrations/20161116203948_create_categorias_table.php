<?php

use Phinx\Migration\AbstractMigration;

class CreateCategoriasTable extends AbstractMigration
{
      public function change()
    {
        $table = $this->table('categorias');
        $table->addColumn('nombre', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('descripcion', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
