<?php

namespace App\Model;
use App\DbSession;

class Ticket {
  private ?int $id;
  private ?string $coderTeam;
  private ?string $topic;
  private ?string $dateTime;
  private ?string $description;
  private $database;
  private $table = "agenda";

  public function __construct(string $coderTeam = null, string $topic = null, string $description = null, int $id = null, string $dateTime = null) {
    $this->id = $id;
    $this->coderTeam = $coderTeam;
    $this->topic = $topic;
    $this->dateTime = $dateTime;
    $this->description = $description;

    if (!$this->database) {
      $this->database = new DbSession();
      }
    }
  
  public function getCoderTeam()
  {
    return $this->coderTeam;
  }  

  public function getId()
  {
    return $this->id;
  }

  public function getTopic()
  {
    return $this->topic;
  }

  public function getDateTime()
    {
        return $this->dateTime;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function renameCoderTeam($coderTeam)
    {
        $this->coderTeam = $coderTeam;
    }

    public function changeTopic($topic)
    {
        $this->topic = $topic;
    }

    public function changeDescription($description)
    {
        $this->description = $description;
    }
    
    public function save($coderTeam, $topic, $description): void
    {
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`Coder/Team`, `Topic`, `Description`) VALUES ('{$coderTeam}', '{$topic}' , '{$description}');");
    }

    public static function all()
    {   
        $database = new DbSession();
        $query = $database->mysql->query("select * FROM agenda");
        $ticketsArray = $query->fetchAll();
        $ticketsList = [];
        foreach ($ticketsArray as $ticket) {
            $ticketItem = new self($ticket["Coder/Team"], $ticket["Topic"], $ticket["Date/Time"]);
            array_push($ticketsArray, $ticketItem);
        }

        return $ticketsArray;
    }

    public function deleteById($id)
    {
        $query = $this->database->mysql->query("DELETE FROM `agenda` WHERE `agenda`.`id` = {$id}");
    }

    public static function findById($id): Ticket
    {
        $database = new DbSession();
        $query = $database->mysql->query("SELECT * FROM `agenda` WHERE `id` = {$id}");
        $result = $query->fetchAll();

        
        return new self($result[0]["Coder/Team"], $result[0]["Topic"], $result[0]["Date/Time"]);
    }

    public function UpdateById($coderTeam, $topic, $description, $id)
    {
        $this->database->mysql->query("UPDATE `agenda` SET `Coder/Team` = '{$coderTeam}', `Topic` = '{$topic}', `Description` = '{$description}' WHERE `id` = {$id}");
    }
}
