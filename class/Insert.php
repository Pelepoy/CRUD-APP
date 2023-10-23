<?php

class Insert extends Config
{
  public function __construct(
    public string $task // to filled by GET METHOD
  ) {
  }
  public function insertTask()
  {
    $con = $this->con();
    $sql = "INSERT INTO `tbl_todolist` (`item`) VALUES ('$this->task')";
    $data = $con->prepare($sql);
    if ($data->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
