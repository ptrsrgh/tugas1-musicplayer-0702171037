<?php 

$alb = new App\Album();
$lst = $alb->listArtist();
?>

<h2 class="judul">Tambah Album</h2>
<hr class="garis-judul">

<form class="form" method="POST" action="album_proses.php">
	<label>Nama Album</label>
	<input type="text" name="album_name" required="" placeholder="Masukkan nama album...">
	
	<label>Artis</label>
		<select name="album_id_artist">
			<?php foreach ($lst as $ls) { ?>
			<option value="<?php echo $ls['artist_id']; ?>"><?php echo $ls['artist_name']; ?></option>
			<?php } ?>
		</select>
	<input type="submit" name="btn-simpan" value="Simpan">
</form>