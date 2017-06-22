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

                        <div style="...">
                            <input name="_method" value="POST" type="hidden" class="form-control">
                        </div>

                        <div class="input text form-group has-feedback">
                            <label class="col-sm-2 control-label" for="PokemonNom">Nom</label>
                            <div class="col-sm-10">
                                <input name="data[Pokemon][nom]" maxlength="30" id="PokemonNom" type="text" required>
                            </div>
                        </div>

                        <div class="input number form-group has-feedback">
                            <label class="col-sm-2 control-label" for="PokemonNiveau">Niveau</label>
                            <div class="col_sm-10">
                                <input name="data[Pokemon][niveau]" id="PokemonNiveau" type="number" value="1">
                            </div>
                        </div>

                        <div class="input number form-group has-feedback">
                            <label class="col-sm-2 control-label" for="PokemonPv">Pv</label>
                            <div class="col-sm-10">
                                <input name="data[Pokemon][pv]" id="PokemonPv" type="number" value="1">
                            </div>
                        </div>

                        <input name="data[Pokemon][joueur_id]" value="<?php echo $joueur['Joueur']['id'];?>" id="PokemonJoueurId" type="hidden" class="form-group">

                        <div class="submit form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input value="Ajouter ce pokemon" type="submit">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>