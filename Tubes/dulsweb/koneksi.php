<?php 
$conn = mysqli_connect("localhost", "root", "", "registrasi");



function registrasi($data) {
    global $conn;

    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);
    $error = "";

    if($nama == ""){
        $error = "nama tidak ada";
    }

    // cek keberadaan user
    $result = mysqli_query($conn, "SELECT nama FROM user WHERE nama ='$nama'");
                    if(mysqli_fetch_assoc($result)) {
                        echo "<script>
                           alert('nama sudah terdaftar');
                        </script>";
                        return false;
                    }
        if($nama == "" or $password == ""){
            $error = "isi dulu nama dan Password";
            }
    
    if($password !== $password2){
        echo "<script>
        alert('Password tidak sesuai');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user (nama, password) 
                         VALUES ('$nama', '$password')");

}
//fungsi upload

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}



// Fungsi Hapus Produk
function hapus ($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM anime WHERE id = $id");
  return mysqli_affected_rows($conn);
}



function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}
?>
