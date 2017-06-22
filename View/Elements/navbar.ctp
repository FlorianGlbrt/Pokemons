<?php
/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 14/06/17
 * Time: 15:14
 */
?>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">test Cake et Bootstrap</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">liste Joueurs <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach ($joueurs as $joueur) {
                            ?>
                            <li><?php echo $joueur['Joueur']['pseudonyme']; ?></li><?php
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
