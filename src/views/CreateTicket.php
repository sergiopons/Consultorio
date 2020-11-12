<?php require_once("Modules/Layout.php"); ?>

<body>
  <?php require_once("Modules/Header.php"); ?>

  <main class="container text-center">

    <h2 class="text-center">Nuevo Ticket</h2>

    <form action='?action=store' method="post">
      <input type="text" name="coderTeam" required>
      <input type="text" name="topic" required>
      <input type="text" name="description" required>
      <input type="submit" value="Crear">
      <input type="reset" value="Reset">
    </form>
  </main>

</body>