<nav class='navbar navbar-inverse nav-users'>
    <div class="container">
        <div class="navbar-header">
            <button type="buttton" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('DELICIAS DULCES', ['controller' => 'Users', 'action' => 'home'], ['class' => 'navbar-brand']) ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <?php if(isset($current_user)): ?>
            
            <ul class="nav navbar-nav">
            <?php if($current_user['role'] == 'admin'): ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link('Listar productos', ['controller' => 'Productos', 'action' => 'index'] )?>
                        </li>
                        <li>
                             <?= $this->Html->link('Crear producto', ['controller' => 'Productos', 'action' => 'add'] )?>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Compras <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link('Listar compras', ['controller' => 'Compras', 'action' => 'indexAdm'] )?>
                        </li>
                      

                    </ul>
                </li>

                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link('Listar usuarios', ['controller' => 'Users', 'action' => 'index'] )?>
                        </li>
                        <li>
                             <?= $this->Html->link('Crear usuario', ['controller' => 'Users', 'action' => 'add'] )?>
                        </li>

                    </ul>
                </li>
            <?php endif; ?>


             <?php if($current_user['role'] == 'user'): ?>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link('Catálogo', ['controller' => 'Productos', 'action' => 'index'] )?>
                        </li>
                    </ul>
                </li>

                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mis Compras <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link('Listar compras', ['controller' => 'Compras', 'action' => 'index'] )?>
                        </li>
                      
                    </ul>
                </li>

            <?php endif; ?>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li> 
                    <?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout'])?>
                </li>

        <?php else: ?>

       
        <ul class="nav navbar-nav navbar-right">
        <li>
        <?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add']) ?>
        </li>
        </ul>
        <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>