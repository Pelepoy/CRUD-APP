<?php

class Edit extends Config
{
  public function __construct(
    public int $id // to filled by GET METHOD
  ) {
  }
  public function editTask()
  {
    $con = $this->con();
    $sql = "UPDATE `tbl_todolist` SET `status` = 'COMPLETED', `date_completed` = NOW() WHERE `id` = $this->id";
    $data = $con->prepare($sql);
    if ($data->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
