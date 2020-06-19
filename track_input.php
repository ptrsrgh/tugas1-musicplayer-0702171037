<?php 

$alb = new App\Track();
$lst = $alb->listAlbum();
?>

<h2 class="judul">Tambah Lagu</h2>
<hr class="garis-judul">

<form class="form" method="POST" action="track_proses.php" enctype="multipart/form-data">
	<label>Judul</label>
	<input type="text" name="track_name" required="" placeholder="Masukkan judul lagu...">

	<label>Album</label>
	<select name="track_id_album">
		<?php foreach ($lst as $ls) { ?>
		<option value="<?php echo $ls['album_id']; ?>"><?php echo $ls['album_name']; ?></option>
		<?php } ?>
	</select>

	<label>Durasi</label>
	<input type="text" name="track_time" required="" placeholder="Masukkan durasi lagu...">
	
	<label>File Lagu (MP3)</label>
	<input type="file" name="track_file">
	
	<input type="submit" name="btn-simpan" value="Simpan">
</form>