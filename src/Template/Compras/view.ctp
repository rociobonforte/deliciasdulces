<div class="well">
  <h2>Compra n°: <?= $compra->id . ' ' ?></h2>
  <br>
  <dl class="">


    <dt>Producto</dt>
    <dd>
      <?= $compra->id_producto ?>

      &nbsp;
    </dd>
    <br>


    <dt>Precio Total</dt>
    <dd>
      $<?= $compra->precio ?>
      &nbsp;
    </dd>
    <br>

    <dt>Cantidad</dt>
    <dd>
      <?= $compra->cantidad ?>
      &nbsp;
    </dd>
    <br>

    <dt>Fecha pedido</dt>
    <dd>
      <?= $compra->pedido ?>
      &nbsp;
    </dd>
    <br>

     <dt>Usuario</dt>
    <dd>
      <?= $compra->id_user ?>

      &nbsp;
    </dd>
    <br>

    
    
    


  </dl>
</div>