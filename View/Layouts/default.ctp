<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */


?><html>
<title>Poke site</title>
<head><?php
    echo $this->fetch('head');
    ?>
    </head>
<body>

    <div class="container-fluid">

        <?php echo $this->element('navbar');?>
        <?php echo $this->Session->flash(); ?>
        <div class="container" id="milieu">
            <?php echo $content_for_layout;?>
        </div>

    </div>
    <?php
    if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();
    // Writes cached scripts
    ?>
</body>
</html>