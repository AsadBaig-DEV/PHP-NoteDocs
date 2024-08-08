
  <?php

  $config = require('config.php');
  $db = new Database($config['database']);

  $heading = 'View Note';

  $id = $_GET['id'];

  $note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $id])->fetch();

  // dd($note);

  require "views/note.view.php";
