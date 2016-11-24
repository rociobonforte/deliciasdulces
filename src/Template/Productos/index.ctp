<div class="page-header">   
    <h2 id="produ">Catálogo de Productos</h2>
</div>

<div class="row">


<?php foreach ($productos as $producto): ?>
    <div class="col col-sm-3">

     
        <figure class="producto">
            <img src="<?php  echo $producto->dir .  $producto->foto; ?>" height="180" width="220"/>
        </figure>
        <br />
        <h3><?= $producto->nombre ?></h3>
        <br />
          
        <?= $producto->descripcion ?>

        <br />
        <div> <h4><span id="dis">Categoria:</span> <?= $producto->categoria->nombre ?></h4>  </div>
   
        <div><h4><span  id="dis">Precio:</span> $<?= $this->Number->format($producto->precio_actual) ?></h4> </div> &nbsp;
        <br />

       
        <div class="boton">

    <?php if($current_user['role'] == 'user'): ?>

         <?= $this->Html->link('Ver', ['controller' => 'Productos' ,'action' => 'view', $producto->id], ['class' => 'btn btn-sm btn-info']) ?>

        
         <?php else: ?>
                    <?= $this->Html->link('Ver', ['action' => 'view', $producto->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $producto->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $producto->id], ['confirm' =>'Desea eliminar el producto?', 'class' => 'btn btn-sm btn-danger']) ?>
        <?php endif; ?>
        </div>
        <br />



    </div>


<?php endforeach; ?>

</div>

<div class="pagi">
<div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< Anterior') ?>
            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
            <?= $this->Paginator->next('Siguiente >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
</div>




