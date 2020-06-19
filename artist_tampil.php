<h2 class="judul">Data Artis</h2>
<hr class="garis-judul">
<div class="btn-tambah">
	<a href="dashboard.php?page=artist_input">Tambah</a>
</div>

<?php 

$art = new App\Artist();
$rows = $art->tampil();

?>

<table>
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Opsi</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['artist_id']; ?></td>
			<td><?php echo $row['artist_name']; ?></td>
			<td><a href="dashboard.php?page=artist_edit&id=<?php echo $row['artist_id']; ?>" class="btn-edit">Edit</a></td>
		</tr>
	<?php } ?>
</table>