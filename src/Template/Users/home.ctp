<div class="home">

	  <?php if($current_user['role'] == 'user'): ?>

	<div class="slider"></div>
<h2 class="bien">Bienvenid@ <?= $current_user['first_name'] . ' ' . $current_user['last_name'] ?></h2>

<p id="p">Delicias Dulces es una empresa que se dedica a la repostería hace 20 años... Nuestro objetivo es que aquel que compre una delicia  sienta como si estuviera hecho en casa. Vendemos todo tipo de tortas para cualquier evento: cumpleaños, comunión, aniversarios, casamientos, bautismos y mucho más! <strong>Te invitamos a recorrer nuestro sitio.</strong></p>

<?php endif; ?>

  <?php if($current_user['role'] == 'admin'): ?>
  <h2 class="bien">Bienvenid@ <?= $current_user['first_name'] . ' ' . $current_user['last_name'] ?></h2>


<?php endif; ?>
</div>