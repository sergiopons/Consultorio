<?php

use App\Core\View;
use App\Model\Ticket;

class TicketController
{

    public function __construct()
    {
        if (isset($_GET) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if (isset($_GET) && ($_GET["action"] == "store")) {
            $this->store($_POST);
            return;
        }

        if (isset($_GET) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
            return;
        }

        if (isset($_GET) && ($_GET["action"] == "update")) {
            $this->update($_POST, $_GET["id"]);
            return;
        }

        if (isset($_GET) && ($_GET["action"] == "delete")) {

            $this->delete($_GET["id"]);
            return;
        }

        $this->index();
    }

    public function index(): void
    {

        $ticket = new Ticket();
        $tickets = $ticket->all();

        new View("ticketsList", [
            "tickets" => $tickets,
        ]);
    }

    public function create(): void
    {
        new View("createTicket");
    }

    public function store(array $request): void
    {
        $newTicket = new Ticket();
        $newTicket->save($request["Coder/Team"], $request["Topic"], $request["Description"]);

        $this->index();
    }

    public function delete($id)
    {
        $ticketHelper = new Ticket();
        $ticketHelper->deleteById($id);

        $this->index();
    }

    public function edit($id)
    {
        //Find Student By Id
        $ticketHelper = new Ticket();
        $ticket = $ticketHelper->findById($id);
        //Execute view with student atributes
        new View("editStudent", ["ticket" => $ticket]);
    }

    public function update(array $request, $id)
    {
        // Update Student By ID
        $ticketHelper = new Ticket();
        $ticket = $ticketHelper->findById($id);
        $ticket->UpdateById($request["Coder/Team"], $request["Topic"], $request["Description"], $id);
        // Return to Viwe List
        $this->index();
    }
  }