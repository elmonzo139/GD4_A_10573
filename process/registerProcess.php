<?php

if (isset($_POST['register'])) {

    include('../db.php');

    $tes = $_POST['phonenum'];
    $result = mysqli_query($con,"SELECT id FROM users WHERE phonenum = '$tes'")or die(mysqli_error($con));
    if($result->num_rows == 0) {

        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_POST['membership'];

        $query = mysqli_query($con,"INSERT INTO users(email, password, name, phonenum, membership)VALUES
        ('$email', '$password', '$name', '$phonenum', '$membership')")
                or die(mysqli_error($con));

            if ($query) {
                echo
                '<script>
                alert("Register Success");
                window.location = "../index.php"
                </script>';
            } else {
                echo
                '<script>
                alert("Register Failed");
                </script>';
            }
    }else{

        echo '<script>
        alert("Register Failed (PhoneNum harus Unik/tidak boleh sama dengan yang diinputkan sebelumnya)");
        window.location = "../index.php"
        </script>';

        
    }
    
} else {
    echo
    '<script>
window.history.back()
</script>';
}
?>