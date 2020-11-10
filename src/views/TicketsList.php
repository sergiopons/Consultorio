<?php require_once("Modules/Layout.php"); ?>

<body>

    <?php require_once("Modules/Header.php") ?>
    <main class="container">
        <a href="?action=create">
            <button class="btn btn-primary btn-circle btn-lg">
                <i class="fas fa-plus"></i>
            </button>
        </a>
        <table class="table table-light">

            <thead class="thead-light">
                <tr>                    
                    <th>Coder/Team</th>
                    <th>Topic</th>
                    <th>Data/Time</th>
                    <th>Options</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($data["tickets"] as $ticket) {
                    echo "
                    <tr>
                        <td>{$ticket->getCoderTeam()}</td>
                        <td>{$ticket->getTopic()}</td>
                        <td>{$ticket->getDateTime()}</td>
                        <td>               
                        <a href='?action=edit&id={$ticket->getId()}'><i class='lnr lnr-pencil'></i></a>
                            <a href='?action=delete&id={$ticket->getId()}'><i class='lnr lnr-trash'></i></a>
                        </td>
                    </tr>
                    ";
                } ?>
            </tbody>
        </table>
    </main>
</body>

</html>