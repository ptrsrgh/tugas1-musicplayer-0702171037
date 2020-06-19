<?php 

$id = $_GET['id'];

$alb = new App\Track();
$row = $alb->edit($id);
$lst = $alb->listAlbum();
?>

<h2 class="judul">Edit Lagu</h2>
<hr class="garis-judul">

<form class="form" method="POST" action="track_proses.php" enctype="multipart/form-data">
	<input type="hidden" name="track_id" value="<?php echo $id; ?>">
	
	<label>Judul</label>
	<input type="text" name="track_name" value="<?php echo $row['track_name']; ?>" required="">
	
	<label>Album</label>
	<select name="track_id_album">
		<?php foreach ($lst as $ls) { ?>
		<option value="<?php echo $ls['album_id']; ?>"<?php echo $row['track_id_album']==$ls['album_id'] ? " selected" : ""; ?>><?php echo $ls['album_name']; ?></option>
		<?php } ?>
	</select>
	
	<label>Durasi</label>
	<input type="text" name="track_time" value="<?php echo $row['track_time']; ?>" required="">
	
	<label>File Lagu (MP3)</label>
	<input type="file" name="track_file">
	
	<input type="submit" name="btn-update" value="Update">
</form>

<br>