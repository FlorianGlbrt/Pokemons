<?php
/**
 * Created by PhpStorm.
 * User: florianguilbert
 * Date: 19/06/17
 * Time: 17:26
 */?>
    <option value="0">choisis un pokémon</option>
    <?php
foreach ($pokemons as $pokemon): ?>
    <option value="<?php echo $pokemon['Pokemon']['id']; ?>"><?php echo $pokemon['Pokemon']['nom']; ?></option>
<?php endforeach; ?>
