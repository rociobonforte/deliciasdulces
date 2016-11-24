
<div class="page-header">   
    <h2 id="pro-name"><?= $producto->nombre . ' ' ?></h2>
</div>


<div class="row">

  <div class="col col-sm-7">
    <img src="../../<?php  echo $producto->dir .  $producto->foto; ?>" height="500" width="600" id="img"/>
  </div>

  <div class="col col-sm-5">

   
    <br />

     <div> <h4><span id="dis">Descripción:</span></h4> <?= $producto->descripcion ?> </div>

    <br />

    <div> <h4><span id="dis">Precio:</span></h4></div>
   
    $ <span id="productprice"><?= $producto->precio_actual ?></span>

 
    <br />
    <br />
    <?php if($current_user['role'] == 'user'): ?>
      <?= $this->Form->create(null, [ 'url' => ['controller' => 'Compras', 'action' => 'agregar', $producto->id] ]) ?>

      <div> <h4><span id="dis">Cantidad:</span></h4></div>
      <?= $this->Form->input('cantidad', ['label' => '', 'type' => 'number']); ?>

      <?= $this->Form->button ('Comprar', ['class' => 'btn btn-sm btn-info']) ?>

      <?= $this->Form->end () ?>

    <?php endif; ?>
   

    <br />

  </div>
