<?= $this->append('script'); ?>
    <script>
        $(function () {
            $('[title]').tooltip()
        })
    </script>
<?= $this->end(); ?>

<?php
use Cake\Core\Configure;

$this->Html->css('BootstrapUI.dashboard', ['block' => true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', array(
        $this->request->controller, $this->request->action
    )) . '" ');
$this->start('tb_body_start');
?>
    <body <?= $this->fetch('tb_body_attrs') ?>>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header col-sm-3 col-md-2">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= $this->Html->link(Configure::read('App.title'), [], ['class' => 'navbar-brand']) ?>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><?= $this->Html->link('Categori\'ler', ['controller' => 'categories', 'action' => 'index', 'plugin' => false]); ?></li>
                    <li><?= $this->Html->link('Item\'ler', ['controller' => 'categories', 'action' => 'index', 'plugin' => false]); ?></li>
                    <li><?php //echo $this->Html->link('Çıkış Yap', ['controller' => 'users', 'action' => 'logout', 'plugin' => 'CakeManager']); ?></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <?= $this->fetch('tb_sidebar') ?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php
$this->end();

/**
 * Default `footer` block.
 */
if (!$this->fetch('tb_footer')) {
    $this->start('tb_footer');
    printf('<footer>Copyright &copy; 2014-%s KobitBilisim %s</footer>', date('Y'), Configure::read('App.title'));
    $this->end();
}

$this->start('tb_body_end');
echo '</body>';
$this->end();
$this->append('content', $this->fetch('tb_footer'));
$this->append('content', '</div></div></div>');
echo $this->fetch('content');
