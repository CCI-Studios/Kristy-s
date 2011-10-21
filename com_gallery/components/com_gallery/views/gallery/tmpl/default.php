<?= @helper('behavior.mootools'); ?>
<style src="media://com_gallery/site.css" />
<script src="media://com_gallery/lightbox.js" />

<ul class="images">
	<? foreach ($images as $i=>$image):	?>
	<li
		<?= ($i % $columns == 0)? 'class="first"':'' ?>
		<?= ($i % $columns == 4)? 'class="last"':'' ?>
		style="
<?= ($i % $columns != 0)? "padding-left: {$col_space}px;":'' ?>
<?= ($i >= $columns)? "padding-top: {$row_space}px;":'' ?>
"
	>
		<a href="<?= $folder .'/full/'. $image ?>" rel="lightbox"><img src="<?= $folder .'/'. $image ?>" /></a>
	</li>
	<? endforeach; ?>
</ul>