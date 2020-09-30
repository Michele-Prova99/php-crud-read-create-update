<?php

include __DIR__ .'/partials/templates/header.php';

include __DIR__ .'/partials/show/server.php';

 ?>

<body>

  <div class="container">

    <a href="index-php.php">Torna Indietro</a>

    <ul class="list-group">
      <li class="list-group-item">ID: <?php echo $row['id']; ?> </li>
      <li class="list-group-item">Numero della stanza: <?php echo $row['room_number']; ?> </li>
      <li class="list-group-item">Piano: <?php echo $row['floor']; ?> </li>
      <li class="list-group-item">Numeri di letti: <?php echo $row['beds']; ?> </li>
    </ul>

  </div>

</body>

</html>