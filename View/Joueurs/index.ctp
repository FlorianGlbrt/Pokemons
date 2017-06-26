<?php
/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 14/06/17
 * Time: 15:08
 */

$this->start('head');
echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>";
echo $this->Html->css('cake.generic');
echo $this->Html->script('bootstrap.min.js');
echo $this->Html->script('validator.min.js');
echo $this->Html->css('bootstrap.min.css');
echo $this->Html->css('default-background.css');
$this->end();
echo $this->Js->writeBuffer(array('onDomReady' => false));
?>

    <p>
        <a class="btn btn-primary" href="/joueurs/add">Add joueur</a>
    </p>


        <table class="table-striped table-bordered table-responsive display nowrap" width="100%">
            <tr>
                <th>Id</th>
                <th>Pseudo</th>
                <th>Niveau</th>
                <th>Pokemons</th>
            </tr>


            <?php foreach ($joueurs as $joueur): ?>
                <div>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <?php echo $joueur['Joueur']['id']; ?>
                            </span>
                            <?php echo $this->Form->postLink('Delete', array(
                                'controller' => 'joueurs',
                                'action' => 'delete',
                                $joueur['Joueur']['id']
                            ),
                                array(
                                        'class' => 'btn btn-danger',
                                        'confirm' => 'Are you sure ?'
                                )) ?>
                            <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#<?php echo $joueur['Joueur']['id']; ?>">Add pokemon</button></td>
                        </div>
                    <td><?php echo $joueur['Joueur']['pseudonyme']; ?></td>
                    <td><?php echo $joueur['Joueur']['niveau']; ?></td>
                    <td>
                        <?php foreach ($joueur['Pokemon'] as $pokemon):?>
                         <div class="input-group">
                             <span class="input-group-addon">
                                <?php echo $pokemon['nom'];?>
                             </span>
                                <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#<?php echo 'p'.$pokemon['id']; ?>">Zoom in</button><?php echo '<br>'; ?>
                         </div>
                        <?php endforeach;?>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>

<div class="container-fluid">
    <?php echo $this->element('accordeon', array('joueurs' => $joueurs)) ?>
</div>

<?php
    foreach ($joueurs as $joueur):
        echo $this->element('formPoke', array('joueur' => $joueur ,'pokedexs' => $pokedexs));?>
        <?php
    endforeach;

        echo "<br><br>";
        foreach ($pokedexs as $pokedex):
            foreach ($pokedex['Pokemon'] as $pokemon):
                echo $this->element('zoomPoke', array('pokemon' => $pokemon , 'pokedex' => $pokedex['Pokedex'], 'types' => $pokedex['Type']));
            endforeach;
        endforeach;
        ?>

