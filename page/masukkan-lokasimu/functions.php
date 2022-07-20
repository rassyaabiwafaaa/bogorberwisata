<?php 

    $conn = mysqli_connect("localhost", "root", "", "bogorberwisata");

?>

<?php 

function tambah($data){
    global $conn;
    $namaObjekWisata = htmlspecialchars($data["namaObjekWisata"]);
    $namaPengelola =  htmlspecialchars($data["namaPengelola"]);
    $kontakPengelola = htmlspecialchars($data["kontakPengelola"]);
    $email = htmlspecialchars($data["email"]); 
    $alamat =  htmlspecialchars($data["alamat"]); 


    $query = "INSERT INTO objekwisata
              VALUES
             ('', '$namaObjekWisata', '$namaPengelola', '$kontakPengelola', '$email', '$alamat')

             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>