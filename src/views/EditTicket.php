<?php require_once("Modules/Layout.php"); ?>

<body>
    <?php require_once("Modules/Header.php"); ?>

    <main class="container text-center">

        <h2 class="text-center">New Ticket</h2>
        <?php echo $data["ticket"]->getId() ?>
        <form action='?action=update&id=<?php echo $data["ticket"]->getId() ?>' method="post">
            <input type="text" name="coderTeam"required value='<?php echo $data["ticket"]->getCoderTeam() ?>'>
            <input type="text" name="topic" required value='<?php echo $data["ticket"]->getTopic() ?>'>
            <input type="text" name="description" required value='<?php echo $data["ticket"]->getDescription() ?>'>
            <input type="submit" value="Edit">
            <input type="reset" value="Reset">
        </form>
    </main>

</body>