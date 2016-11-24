<?php
 
             echo $this->Form->input('nombre');
            echo $this->Form->input('precio_actual');
            echo $this->Form->input('foto', ['type' => 'file']);
            echo $this->Html->script('ckeditor/ckeditor');
            echo $this->Form->input('descripcion', array(
            'class' => 'ckeditor'));
            //echo $this->Form->input('id_categoria');


?>