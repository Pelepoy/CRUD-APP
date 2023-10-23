<?php

class Delete extends Config
{
  public function __construct(
    public int $id // to filled by GET METHOD
  ) {
  }
  public function deleteTask()
  {
    $con = $this->con();
    $sql = "DELETE FROM `tbl_todolist` WHERE `id` = $this->id";
    $data = $con->prepare($sql);
    if ($data->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
