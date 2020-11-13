<?php require_once("Modules/Layout.php"); ?>
<body>
  <header class="u-flex u-center u-flex-row header header-fixed u-unselectable p-1">
    <h1 class="header-brand">Archive</h1>
    <a class="btn btn-info mx-2" href="index.php">
      <i class="fas fa-arrow-circle-left"></i>
    </a>
  </header>
  <main class="u-flex u-flex-column mt-10">
    <table class="table striped mx-2"; style="width: 100%;">
      <thead class="bg-purple-200">
        <tr>
          <th><abbr title="Name of the coder or the team">Coder/Team</abbr></th>
          <th><abbr title="Kind of topic">Topic</abbr></th>
          <th><abbr title="When the ticket was created">Date/Time</abbr></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          echo "
         <td>{$data["ticket"]->getCoderTeam()}</td>
         <td>{$data["ticket"]->getTopic()}</td>
         <td>{$data["ticket"]->getDateTime()}</td>
        " ?>
        </tr>
      </tbody>
    </table>
    <form action='?action=archive&id=<?php echo $data["ticket"]->getId()?>' method="post" class="u-flex">
      <div class="btn-group u-center"; style="width: 61rem;">
        <a class="btn outline btn-danger" href="index.php"; style="width: 50%;">No</a>
        <button type="submit" class="btn-success"; style="width: 50%;">Yes</button>
      </div>
    </form>
  </main>
</body>