<?php 

    $conn = mysqli_connect("localhost", "root", "", "bogorberwisata"); 

 

    function registrasi($data) {
        global $conn;

        
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        //cek username sudah ada atau belum

        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
        
        if(mysqli_fetch_assoc($result)){
            echo "<script>alert('username sudah terdaftar');</script>";
            return false;
        }

        // cek konfirmasi password

        if( $password !== $password2 ){
            echo " <script>
                alert ('password yang dimasukkan tidak sama');
            </script> ";
            return false;
        } 

        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
 

        //tambahkan userbaru ke dalam database
        mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");
        
        return mysqli_affected_rows($conn);


    }


?>