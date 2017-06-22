<?php
/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 16/06/17
 * Time: 11:20
 */
?>
<div id="p<?php echo $pokemon['id'] ;?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Info sur <?php echo $pokemon['nom'];?></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        Id :
                    </div>
                    <div class="col-sm-8">
                        <?php echo $pokemon['id'];?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        Nom :
                    </div>
                    <div class="col-sm-8">
                        <?php echo $pokemon['nom'];?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        Niveau :
                    </div>
                    <div class="col-sm-8">
                        <?php echo $pokemon['niveau'];?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        Points de vie :
                    </div>
                    <div class="col-sm-8">
                        <?php echo $pokemon['pv'];?>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
