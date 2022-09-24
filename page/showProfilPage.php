<?php include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <h4>Profil User</h4>
          <hr>
          <div>
                    <?php
                    $user =    $_SESSION['user'];
                    ?>

                    <table>
                              <tr>
                                        <td>User :</td>
                                        <td> <?php print_r($user['name']); ?> </td>
                              </tr>

                              <tr>
                                        <td>Phonenumber :</td>
                                        <td> <?php print_r($user['phonenum']); ?> </td>
                              </tr>

                              <tr>
                                        <td>Email :</td>
                                        <td> <?php print_r($user['email']); ?> </td>
                              </tr>

                              <tr>
                                        <td>Members :</td>
                                        <td> <?php print_r($user['synopsis']); ?> </td>
                              </tr>

                    </table>
          </div>
</div>
</aside> <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>