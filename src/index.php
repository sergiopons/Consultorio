<?php

namespace App;

use App\Model\Ticket;

// $controller = new supportTicketController();
$newTicket = new Ticket();
// $newTicket->save('jose', 'tomato', 'myTestDesc');
// foreach($newTicket->all() as $ticket){
//     echo $ticket["Coder/Team"];
// };
// $newTicket->deleteById(6);
$foo = $newTicket->findById(10);
echo $foo->getCoderTeam();
// foreach($newTicket->findById(7) as $ticket){
//     echo $ticket;
// };