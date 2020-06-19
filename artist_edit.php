<?php 

$id = $_GET['id'];

$art = new App\Artist();
$row = $art->edit($id);
?>

<h2 class="judul">Edit Artis</h2>
<hr class="garis-judul">

<form class="form" method="POST" action="artist_proses.php">
	<input type="hidden" name="artist_id" value="<?php echo $id; ?>">
	
	<label>Nama Artis</label>
	<input type="text" name="artist_name" value="<?php echo $row['artist_name']; ?>" required="">

	<input type="submit" name="btn-update" value="Update">
</form>