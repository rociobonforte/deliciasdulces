<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="page-header">
			<h2>Editar compra</h2>
		</div>
		<?= $this->Form->create($compra, ['novalidate']) ?>
		<fieldset>
			<?php

		if($current_user['role'] == 'user'){
            echo $this->Form->input('precio');
            echo $this->Form->input('cantidad');
            echo $this->Form->input('pedido');
            echo $this->Form->input('id_producto');
        }else {
        
        	 echo $this->Form->input('precio');
            echo $this->Form->input('cantidad');
            echo $this->Form->input('pedido');
            echo $this->Form->input('id_producto');
            echo $this->Form->input('id_user');
        }
       
			?>
    </fieldset>
 	<?= $this->Form->button('Editar') ?>
    <?= $this->Form->end() ?>
</div>
</div>