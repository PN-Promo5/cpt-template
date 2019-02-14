<?php
// On déclare une variable image qui récupère tout le champ dans un array
$image = get_field('image_principale');
// On impose une condition, au cas où il n'y ait pas d'image
if (!empty($image)):
?>
	<div class="recipe-img">
		<!-- On appelle dans le tableau $image, la clé 'url' et 'alt' -->
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	</div>
<?php endif; ?>
