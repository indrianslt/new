<?php 
    include "database.php";
    $club1 = mysqli_query($conn, "SELECT * FROM club");
    $club2 = mysqli_query($conn, "SELECT * FROM club");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="validasi_skor.php">
        <label>Pilih Club 1</label>
            <select name="nama_club1" id="nama_club1">
                <?php 
                    while ($nama_club1 = mysqli_fetch_array($club1)) {
                ?>
                    <option value="<?=$nama_club1['id_klub']; ?>/<?=$nama_club1['nama_club']; ?>"><?=$nama_club1['nama_club']; ?></option>
                <?php } ?>
            </select>
        <label>Skor</label>
            <input type="number" name ="skor_club1" required> </br></br>
        <label>Pilih Club 2</label>
            <select name="nama_club2" id="nama_club2">
                <?php 
                        while ($nama_club2 = mysqli_fetch_array($club2)) {
                    ?>
                        <option value="<?=$nama_club2['id_klub']; ?>/<?=$nama_club2['nama_club']; ?>"><?=$nama_club2['nama_club']; ?></option>
                    <?php } ?>
                </select>
                <label>Skor</label>
            <input type="number" name ="skor_club2" required> </br>
            <button type= "submit" name ="submit">Save</button>
    </form>
</body>
</html>