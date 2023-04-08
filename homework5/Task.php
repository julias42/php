<?php

class Task{
  private User $user;
  private Array $comments = [];
  private string $description;
  private DateTime $dateCreated;
  private DateTime $dateUpdated;
  private DateTime $dateDone; 
  private ?int $priority;
  private bool $isDone = false;
  
  function __construct(User $user, ?int $priority, string $description)
  {
    $this->user = $user;
    $this->priority = $priority;
    $this->description = $description;
  }

  public function markAsDone()
  {   $format = 'd.m.Y H.i';
      $this->isDone = true;
      $this->dateUpdated = new DateTime();
      $this->dateDone = new DateTime();
      return [
        $this->dateUpdated->format($format),
        $this->dateDone->format($format),
        $this->isDone
      ];
  }

  public function getUser(): User
  {
    return $this->user;
  }

  public function getPriority(): ?int
  {
    return $this->priority;
  }

  public function setPriority(): ?int
  {
    $this->priority = $priority;
  }

  public function getDescription(): string
  {
    return $this->description;
  }
  
  public function getDateDone(): DateTime
  {
    return $this->dateDone;
  }

  public function getDateUpdated(): DateTime
  { 
    
    return $this->dateUpdated;
  }

  public function getComment(): array
  {
    return $this->comments;
  }

  public function setDescription(): void
  {
    $this->dateUpdated = new DateTime();
    $this->description = $description;
    
  }

  public function setComment(Comment $comment): void
  { 
    $this->comments[] = $comment;
  } 

  public function setUser(User $user): void
  {
    $this->user = $user;
  }
}

