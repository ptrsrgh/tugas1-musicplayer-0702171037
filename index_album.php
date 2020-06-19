<h2 class="judul">Daftar Album</h2>
<hr class="garis-judul">

<?php 

$ind = new App\Index();
$rows = $ind->album();

?>

<table>
	<tr>
		<th>Album</th>
		<th>Artis</th>
		<th>Lagu</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $row['ALB']; ?></td>
			<td><?php echo $row['ART']; ?></td>
			<td>
				<?php if (!empty($row['track_file'])) { ?>
					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $row['track_file']; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>					
					<?php } ?>
				</td>
			</tr>
		<?php } ?>
	</table>