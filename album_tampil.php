<h2 class="judul">Data Album</h2>
<hr class="garis-judul">
<div class="btn-tambah">
	<a href="dashboard.php?page=album_input">Tambah</a>
</div>

<?php 

$alb = new App\Album();
$rows = $alb->tampil();

?>

<table>
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Artis</th>
		<th>Opsi</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><?php echo $row['ART']; ?></td>
			<td><a href="dashboard.php?page=album_edit&id=<?php echo $row['album_id']; ?>" class="btn-edit">Edit</a></td>
		</tr>
	<?php } ?>
</table>