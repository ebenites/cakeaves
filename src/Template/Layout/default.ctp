<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aves | <?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Aves</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><?=$this->Html->link('Arbol', ['controller' => 'Arbol', 'action' => 'index'])?></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenimiento <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?=$this->Html->link('Aves', ['controller' => 'aves'])?></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Reportes</a></li>
                        </ul>
                    </li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Salir</a></li>
                </ul>
                
                <p class="navbar-text navbar-right">Bienvenido Invitado</p>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    
    <?= $this->Flash->render() ?>
    <div class="container-fluid">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
