<?php
  $status = 'open';

  if ($status == 'open') {
    include('register/open.php');
  } else if ($status == 'closed') {
    include('register/closed.php');
  } else {
    include('register/error.php');
  }