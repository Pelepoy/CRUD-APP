<?php
function controller()
{
  insertT();
  deleteT();
  editT();
}
function insertT()
{
  if (!empty($_GET['items'])) {
    $insert = new Insert($_GET['items']);
    if ($insert->insertTask()) {
      echo '<div class=" col-md-10 alert alert-success alert-dismissible fade show" role="alert">
      <strong>Amazing!</strong> Task Inserted Successfully!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else {
      echo '<div class="col-md-12 alert alert-success alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> Failed to Insert Task!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
  }
}

function deleteT()
{
  if (!empty($_GET['delete'])) { // from force GET method see view.php
    $delete = new Delete($_GET['delete']);
    if ($delete->deleteTask()) {
      echo '<div class=" col-md-10 alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Heyyyy!</strong> Task Deleted Successfully!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else {
      echo '<div class="col-md-12 alert alert-success alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> Failed to Delete Task!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
  }
}

function editT()
{
  if (!empty($_GET['edit'])) { // from force method see view.php
    $edit = new Edit($_GET['edit']);
    if ($edit->editTask()) {
      echo '<div class=" col-md-10 alert alert-info alert-dismissible fade show" role="alert">
      <strong>Heyyyy!</strong> Congrats dawg you completed the goddaman task!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else {
      echo '<div class="col-md-12 alert alert-success alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> Failed to Edit the Task!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
  }
}

function viewTable()
{
  $view = new View();
  $view->viewData();
  $view->viewCompletedData();
}
