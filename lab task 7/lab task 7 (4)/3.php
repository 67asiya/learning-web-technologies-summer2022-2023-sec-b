<?php
   $Date= $_POST['Date'];
   $Month= $_POST['Month'];
   $Year= $_POST['Year'];
   if(strlen($date) == 0 or strlen($mnth) == 0 or strlen($year) == 0) {
      echo 'Cannot be empty';
      return;
  }

  if($date < 1 or $date > 31){
      echo 'Invalid Date';
      return;
  }

  if($mnth < 1 or $date > 12){
      echo 'Invalid Month';
      return;
  }

  if($date < 1953 or $date > 1998){
      echo 'Invalid Year';
      return;
  }

   echo "Date:{$Date}/{$Month}/{$Year}";

?>