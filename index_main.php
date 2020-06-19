<?php 

$ind = new App\Index();
$rows = $ind->track();

?>

<h2 class="judul">Dengarkan Musik Favorit Anda Disini.</h2>
<hr class="garis-judul">

<div class="grid-music">
	<?php foreach ($rows as $row) { ?>
		<?php if (!empty($row['track_file'])) { ?>

			<div>
				<p><b><?php echo $row['track_name']; ?></b></p>
				<p><?php echo $row['ALB'] . " - " . $row['ART']; ?></p>
				<p>

					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $row['track_file']; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>					

					</p>
				</div>

			<?php } ?>
		<?php } ?>
	</div>