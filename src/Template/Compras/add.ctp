<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="page-header">
			<h2>Crear Compra</h2>
		</div>
		<?= $this->Form->create($compra, ['novalidate']) ?>
		<fieldset>
			<?php
            echo $this->Form->input('precio_cobrado');
            echo $this->Form->input('cantidad');
            echo $this->Form->input('id_pedido');
            echo $this->Form->input('id_producto');
			?>
    </fieldset>
 	<?= $this->Form->button('Crear') ?>
    <?= $this->Form->end() ?>
</div>
</div>