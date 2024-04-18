<html>
<body>
  <?php
    include 'get-params.php';
    $_playlist = $_POST['selectedPlaylist'];

    if (strcmp($_playlist,"playlist1") == 0) {
      include "playlist1.php";
    } else {
      include "playlist2.php";
    }
  ?>
</body>
</html>