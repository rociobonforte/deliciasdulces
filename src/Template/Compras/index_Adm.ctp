<div class="row">
    <div class="col-md-12">
        <div class="page-header">

            <h2>Compras</h2>
       
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>

                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Nombre producto') ?></th>
                    <th><?= $this->Paginator->sort('Cantidad') ?></th>
                    <th><?= $this->Paginator->sort('Precio') ?></th>
                    <th><?= $this->Paginator->sort('Fecha') ?></th>
                    <th><?= $this->Paginator->sort('Usuario') ?></th>
                    <th>Acciones</th>

            </tr>
            </thead>
            <tbody>
                <?php foreach ($compras as $compra): ?>
                <tr>

                 <td><?= $this->Number->format($compra->id) ?></td>                
                 <td><?= $compra->producto->nombre ?></td>
                <td><?= $this->Number->format($compra->cantidad) ?></td>
                <td>$<?= $this->Number->format($compra->precio) ?></td>
                <td><?= h($compra->pedido) ?></td>
                <td><?= $compra->user->first_name . ' ' . $compra->user->last_name?></td>

 
                <td>
                    <?= $this->Html->link('Ver', ['action' => 'view', $compra->id], ['class' => 'btn btn-sm btn-info']) ?>


                    <?= $this->Html->link('Editar', ['action' => 'edit', $compra->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $compra->id], ['confirm' =>'Desea eliminar la compra?', 'class' => 'btn btn-sm btn-danger']) ?>


                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< Anterior') ?>
            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
            <?= $this->Paginator->next('Siguiente >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>




