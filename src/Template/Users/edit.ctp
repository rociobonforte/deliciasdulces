<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <div class="page-header">
    <h2>Editar usuario</h2>
    </div>
    <?= $this->Form->create($user, ['novalidate']) ?>
    <fieldset>
      
    <?php
           echo $this->Form->input('first_name', ['label' => 'Nombre']);
          echo $this->Form->input('last_name', ['label' => 'Apellido']);
          echo $this->Form->input('email');
          echo $this->Form->input('password', ['label' => 'Clave', 'value' => '']);
?>
    </fieldset>
    <?= $this->Form->button('Editar') ?>
    <?= $this->Form->end() ?>
    </div>
</div>