<?php
class View extends Config
{
  public function viewData()
  {
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'PENDING'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    // return $result;
    echo "<h3 class='my-4 fw-bolder'> PENDING TASK </h3>";
    echo "<table class='table table-dark table-striped table-sm table-hover'>";
    echo "<thead class='text-center'>
           <tr>
              <th>Task Item</th>
              <th>Action</th>
           </tr>
          </thead><tbody>";
    foreach ($result as $data) {
      echo "<tr>";
      echo "<td>$data[item]</td>";
      echo "<td class='text-center' >
              <a class='btn btn-success btn-sm shadow-sm' href='index.php?edit=$data[id]'>Mark as completed</a>
              <a class='btn btn-danger btn-sm shadow-sm' href='index.php?delete=$data[id]'>Delete Task</a>
            </td>";
      echo "</tr>";
    }
    echo "</tbody> </table>";
  }
  public function viewCompletedData()
  {
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'COMPLETED'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    // return $result;
    echo "<h3 class='my-4 fw-bolder'> COMPLETED TASK </h3>";
    echo "<table class='table table-dark table-striped table-sm table-hover mb-5'>";
    echo "<thead class='text-center'>
           <tr>
              <th>Task Item</th>
              <th>Date Completed</th>
              <th>Actions</th>
           </tr>
          </thead><tbody>";
    foreach ($result as $data) {
      echo "<tr>";
      echo "<td>$data[item]</td>";
      echo "<td class='text-center'>
                $data[date_completed]
              </td>";
      echo "<td class='text-center'>
              <a class='btn btn-danger btn-sm shadow-sm' href='index.php?delete=$data[id]'>Remove</a>
            </td>";
      echo "</tr>";
    }
    echo "</tbody> </table>";
  }
}
