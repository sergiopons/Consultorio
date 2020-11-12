<?php require_once("Modules/Layout.php"); ?>

<body>
    <?php require_once("Modules/Header.php"); ?>

    <main class="container text-center">

        <h2 class="text-center">Confirm Ticket</h2>
        <form action='?action=archive&id=<?php echo $data["ticket"]->getId() ?>' method="post">
            <input type="text" name="coderTeam"required value='<?php echo $data["ticket"]->getCoderTeam() ?>'>
            <input type="text" name="topic" required value='<?php echo $data["ticket"]->getTopic() ?>'>
            <input type="text" name="description" required value='<?php echo $data["ticket"]->getDescription() ?>'>
            <div class="btn-group buttonGroup" role="group" aria-label="Basic example">
                <button type="submit" value="Done">Yes</button>
                <button value="Cancel"><a href="index.php">No</a></button>
            </div>
        </form>
    </main>

</body>