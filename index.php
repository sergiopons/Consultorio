///////////////// INCLUDES ///////////
<?php include('./controller/db/dbSession.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendar</title>
</head>

<body>
  <header>
    <h1>Agenda</h1>
  </header>
  <main>
    <button>Crear Cita</button>
    <section>
      <table>
        <thead>
          <tr>
            <th>CODER/TEAM</th>
            <th>TOPIC</th>
            <th>DATE</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <?php include('src/controller/db/requestList.php')?>
        <tbody>
      </tbody>
     </table>
    </section>
  </main>
</body>

</html>