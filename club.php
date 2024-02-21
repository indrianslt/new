<?php 
include "database.php";

$data = mysqli_query($conn, "SELECT* FROM club");

while ($club = mysqli_fetch_array($data)) {
    echo "<li>";
    echo $club["nama_club"];
    echo "</li>";
}
?>
<p>
    <form action="validasi_club.php" method="post">
        <table>
            <tr>
                <td>Nama Klub</td>
                <td><input type="text" name="nama_club"></td> 
            </tr> 
            <tr>
                <td>Kota Asal</td>
                <td><input type="text" name="kota_asal"></td> 
            </tr> 
            <tr>
                <td></td>
                <td><input type="submit" name = "simpan" value="Simpan Data"></td> 
            </tr> 
        </table>
    </form>
</p>