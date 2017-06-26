<?php
/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 15/06/17
 * Time: 13:49
 */

?>
<!-- Modal -->
<div id="<?php echo $joueur['Joueur']['id'];?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ajouter un Pokemon à <?php echo $joueur['Joueur']['pseudonyme'];?></h4>
            </div>
            <div class="modal-body container-fluid">
                <form action="/pokemons/add/<?php echo $joueur['Joueur']['id']; ?>" id="PokemonIndexForm<?php echo $joueur['Joueur']['id']; ?>" method="post" accept-charset="utf-8" data-toggle="validator">
                    <div style="display:none;">
                        <input type="hidden" name="_method" value="POST"/>
                    </div>

                    <div class="input text required form-group has-feedback ">
                        <label for="PokemonNom">Nom</label>
                        <input name="data[Pokemon][nom]" maxlength="30" type="text" id="PokemonNom" required="required"/>
                    </div>

                    <div class="input number required form-group has-feedback ">
                        <label for="PokemonNiveau">Niveau</label>
                        <input name="data[Pokemon][niveau]" type="number" id="PokemonNiveau" required="required"/>
                    </div>

                    <div class="input number required form-group has-feedback ">
                        <label for="PokemonPv">Pv</label>
                        <input name="data[Pokemon][pv]" type="number" id="PokemonPv" required="required"/>
                    </div>

                    <div class="input select required form-group has-feedback ">
                        <label for="PokemonPokedexId">Pokedex</label>
                        <select name="data[Pokemon][pokedex_id]" id="PokemonPokedexId">
                            <?php
                                foreach ($pokedexs as $pokedex):
                                   ?> <option value="<?php echo $pokedex['Pokedex']['id'];?> "><?php echo $pokedex['Pokedex']['espece'];?></option><?php
                                endforeach;
                            ?>
                        </select>
                    </div>

                    <input type="hidden" name="data[Pokemon][joueur_id]" value="1" id="PokemonJoueurId"/>

                    <div class="submit"><input  type="submit" value="Save Poke"/></div></form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>