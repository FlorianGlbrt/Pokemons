<?php
/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 21/06/17
 * Time: 13:48
 */
?>
<option value="">choisis un joueur</option>
    <?php
foreach ($joueurs as $joueur): ?>
    <option value="<?php echo $joueur['Joueur']['id']; ?>"><?php echo $joueur['Joueur']['pseudonyme']; ?></option>
<?php endforeach; ?>
