<h2 class="judul">Data Lagu</h2>
<hr class="garis-judul">
<div class="btn-tambah">
	<a href="dashboard.php?page=track_input">Tambah</a>
</div>

<?php 

$trc = new App\Track();
$rows = $trc->tampil();

?>

<table>
	<tr>
		<th>No.</th>
		<th>Judul</th>
		<th>Album</th>
		<th>Waktu</th>
		<th>Putar</th>
		<th>Opsi</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['track_id']; ?></td>
			<td><?php echo $row['track_name']; ?></td>
			<td><?php echo $row['ALB'] . " - " . $row['ART']; ?></td>
			<td><?php echo $row['track_time']; ?></td>
			<td>
				<?php if (!empty($row['track_file'])) { ?>
					<audio controls>
						<source src="<?php echo "./layout/assets/uploads/" . $row['track_file']; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>					
					<?php } ?>
				</td>
				<td><a href="dashboard.php?page=track_edit&id=<?php echo $row['track_id']; ?>" class="btn-edit">Edit</a></td>
			</tr>
		<?php } ?>
	</table>