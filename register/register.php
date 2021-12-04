<?php
  $status = 'notopen';

  if ($status == 'open') {
    include('register/open.php');
  } else if ($status == 'closed') {
    include('register/closed.php');
  } else if ($status == 'notopen') {
    include('register/notopen.php');
  } else {
    include('register/error.php');
  }