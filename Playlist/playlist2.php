<a href="index.php">Pick another playlist</a>
<h4>===playlist 2===</h4>
<p>song        Artist        </p>

<?php
  $sql = "SELECT name, singer FROM myplaylist2;";
  $connect = mysqli_connect($_SESSION['endPoint'], $_SESSION['userName'], $_SESSION['pwd'], $_SESSION['dbName']);
  mysqli_select_db($connect, $_SESSION['dbName']) or die('DB fail!');

  $result = mysqli_query($connect, $sql);

  while($info=mysqli_fetch_array($result)){
      echo "<br/>\n";
      echo $info["name"]." | ";
      echo $info["singer"];
      echo "<br/>\n";
  }
  mysqli_close($connect);
?>