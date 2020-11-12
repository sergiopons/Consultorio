<?php require_once("Modules/Layout.php"); ?>

<body>

  <?php require_once("Modules/Header.php") ?>
  <main class="container">
    <a href="index.php">
      <button type="button" class="btn btn-primary">Go Back</button>
    </a>
    <table class="table table-dark">

      <thead class="thead-dark">
        <tr>
          <th>Coder/Team</th>
          <th>Topic</th>
          <th>Data/Time</th>

        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($data["ticket"] as $ticket) {
          echo "
            <tr>
                <td>{$ticket->getCoderTeam()}</td>
                <td>{$ticket->getTopic()}</td>
                <td>{$ticket->getDateTime()}</td>
            </tr>
            ";
        } ?>
      </tbody>
    </table>
  </main>
</body>

</html>