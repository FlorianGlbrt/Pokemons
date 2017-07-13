<?php
/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 19/06/17
 * Time: 12:23
 */
?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <i class="glyphicon glyphicon-chevron-right-left" aria-hidden="true"></i>
            <h4 class="panel-title">
                Choix du premier joueur
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control" id="selectJ1" name="data[joueur_id]">
                                <option value='0'>choisis un joueur</option>
                                <?php
                                    foreach ($joueurs as $joueur):
                                        echo "<option value='".$joueur['Joueur']['id']."'>".$joueur['Joueur']['pseudonyme']."</option>";
                                    endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="selectP1" name="data[P1]" >
                                <option value="">choisis un pokémon</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <button disabled id="button1" class="btn btn-primary pull-right" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseExample">
                            Confirmer
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                    Choix du second joueur
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control" id="selectJ2" name="data[joueur_id]">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="selectP2" name="data[P2]">
                                <option value="">choisis un pokémon</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <button disabled id="button2" class="btn btn-primary pull-right" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseExample">
                            Confirmer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                    Fight !
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   <span id="span1"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <h1>
                                VS
                            </h1>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span id="span2"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <button class="btn btn-primary pull-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseExample">
                            Corriger une erreur
                        </button>
                        <button id="button3" class="btn btn-primary pull-right" type="button" aria-expanded="false">
                            Confirmer
                        </button>
                    </div>
                </div>
                <div id="fight">

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#collapseOne').on('hidden.bs.collapse', function (e) {
        $('#collapseTwo').collapse('show');
    })
    $('#collapseTwo').on('hidden.bs.collapse', function (e) {
        $('#collapseThree').collapse('show');
    })
    $('#collapseThree').on('hidden.bs.collapse', function (e) {
        $('#collapseOne').collapse('show');
    })
    
    $('#selectP1').bind("change", function () {
        if ($(this).val() > 0){
            $('#span1').html( $("#selectP1 :selected").text() );
            $('#button1').prop('disabled', false);
        }else{
            $('#button1').prop('disabled', true);
        }
    })

    $('#selectP2').bind("change", function () {
        if ($(this).val() > 0){
            $('#span2').html( $("#selectP2 :selected").text() );
            $('#button2').prop('disabled', false);
        }else{
            $('#button2').prop('disabled', true);
        }
    })

</script>

<?php
$this->Js->get('#selectJ1')->event('change',
    $this->Js->request(array(
        'controller'=>'pokemons',
        'action'=>'getByJoueur'
    ), array(
        'update'=>'#selectP1',
        'async' => true,
        'method' => 'post',
        'dataExpression'=>true,
        'data'=> $this->Js->serializeForm(array(
            'isForm' => true,
            'inline' => true
        ))
    ))
);

$this->Js->get('#selectJ1')->event('change',
    $this->Js->request(array(
        'controller'=>'pokemons',
        'action'=>'restrictionJoueurDeux'
    ), array(
        'update'=>'#selectJ2',
        'async' => true,
        'method' => 'post',
        'dataExpression'=>true,
        'data'=> $this->Js->serializeForm(array(
            'isForm' => true,
            'inline' => true
        ))
    ))
);

$this->Js->get('#selectJ2')->event('change',
    $this->Js->request(array(
        'controller'=>'pokemons',
        'action'=>'getByJoueur'
    ), array(
        'update'=>'#selectP2',
        'async' => true,
        'method' => 'post',
        'dataExpression'=>true,
        'data'=> $this->Js->serializeForm(array(
            'isForm' => true,
            'inline' => true
        ))
    ))
);

$this->Js->get('#button3')->event('click',
    $this->Js->request(array(
        'controller'=>'pokemons',
        'action'=>'fight'),
    array(
        'update'=>'#fight',
        'async' => true,
        'method' => 'post',
        'dataExpression'=>true,
        'data'=> "$('#selectP1').serialize()+'&'+$('#selectP2').serialize()"
    ))
);
?>