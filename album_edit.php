<?php 

$id = $_GET['id'];

$alb = new App\Album();
$row = $alb->edit($id);
$lst = $alb->listArtist();

?>

<h2 class="judul">Edit Album</h2>
<hr class="garis-judul">

<form class="form" method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	
	<label>Nama Album</label>
	<input type="text" name="album_name" value="<?php echo $row['album_name']; ?>" required="">

	<label>Artis</label>
	<select name="album_id_artist">
		<?php foreach ($lst as $ls) { ?>
		<option value="<?php echo $ls['artist_id']; ?>"<?php echo $row['album_id_artist']==$ls['artist_id'] ? " selected" : ""; ?>><?php echo $ls['artist_name']; ?></option>
		<?php } ?>
	</select>
	<input type="submit" name="btn-update" value="Update">
</form>