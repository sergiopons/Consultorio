<?php

namespace app\model;
use app\dbSession;

class ticket {
  private int $id;
  private string $coderTeam;
  private string $topic;
  private string $dateTime;
  private string $description;
  private $database;
  private $table = "agenda";

public function __construct(int $id = null, string $coderTeam ='', string $topic = '', string $dateTime = null, string $description = '') {
  $this->id = $id;
  $this->coderTeam = $coderTeam;
  $this->topic = $topic;
  $this->dateTime = $dateTime;
  $this->description = $description;

  if (!$this->database) {
    $this->database = new database();
    }
  }
}