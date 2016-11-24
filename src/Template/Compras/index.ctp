<div class="row">
    <div class="col-md-12">
        <div class="page-header">
         <h2 id="produ">Mis compras</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>


                    <th class="lista">Producto</th>
                    <th class="lista">Cantidad</th>
                    <th class="lista">Precio</th>
                    <th class="lista">Fecha</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($compras as $compra): ?>
                <tr>

                <td id="comp"><?= $compra->producto->nombre ?></td>
                <td class="comp"><?= $this->Number->format($compra->cantidad) ?></td>
                <td class="comp">$<?= $this->Number->format($compra->precio) ?></td>
                <td class="comp"><?= h($compra->pedido) ?></td>

    


            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
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




