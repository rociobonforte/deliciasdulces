<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="page-header">
			<h2>Crear Producto</h2>
		</div>
		<?= $this->Form->create($producto, ['type' => 'file']) ?>
		<fieldset id="agregar">
			<?= $this->element('productos/fields') ?>
				<?= $this->Form->label('id_categoria', 'Seleccione una categoría', ['class' => 'control-label']) ?>
			<?= $this->Form->select('id_categoria', $categorias, ['class' => 'form-control']) ?>
    </fieldset>
 	<?= $this->Form->button('Crear') ?>
    <?= $this->Form->end() ?>
</div>
</div>