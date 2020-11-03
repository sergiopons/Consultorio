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
}