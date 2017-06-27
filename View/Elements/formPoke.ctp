<?php
/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 15/06/17
 * Time: 13:49
 */

?>


<!-- Modal -->
<div id="<?php echo $joueur['Joueur']['id'];?>" data-backdrop="static" class="modal fade" tabindex="-1" role="dialog"aria-hidden="true">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ajouter un Pokemon à <?php echo $joueur['Joueur']['pseudonyme'];?></h4>
            </div>
            <div class="modal-body container-fluid">
                <form action="/pokemons/add/<?php echo $joueur['Joueur']['id']; ?>" class="eventInsForm" id="PokemonIndexForm<?php echo $joueur['Joueur']['id']; ?>" method="post" accept-charset="utf-8" data-toggle="validator">
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

                    <label for="PokemonPokedexId">Espèce</label>
                        <div class="input-group">
                            <div class="input-group-addon" style="background-color: #ffffff; border-width: 0px;">
                                <input type="text" id="recherche" />
                            </div>
                            <div class="">
                                <div class="input select required form-group has-feedback ">
                                    <select name="data[Pokemon][pokedex_id]" id="PokemonPokedexId">
                                        <?php
                                        foreach ($pokedexs as $pokedex):
                                            ?> <option value="<?php echo $pokedex['Pokedex']['id'];?> "><?php echo $pokedex['Pokedex']['espece'];?></option><?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <input type="hidden" name="data[Pokemon][joueur_id]" value="1" id="PokemonJoueurId"/>

                    <div class="submit"><input  type="submit" value="Save Poke"/></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script>


    $(document).ready(function() {
        $('#recherche').autocomplete({
            source : list,

            select : function(event, ui){ // lors de la sélection d'une proposition
                $('#PokemonPokedexId option').eq(ui.item.desc-1).prop('selected', true);
            }
        });
        $( "#recherche" ).autocomplete( "option", "appendTo", ".eventInsForm" );

    });

    var list = [
        <?php  foreach ($pokedexs as $pokedex): ?>
        { value : '<?php echo $pokedex['Pokedex']['espece'];?>', label : '<?php echo $pokedex['Pokedex']['espece'];?>', desc : '<?php echo $pokedex['Pokedex']['id'];?>'},
        <?php endforeach; ?>
    ];

</script>