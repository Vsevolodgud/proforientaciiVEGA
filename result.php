<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
   $ot = 100;
      if ([answer-1] == 2){$ot++;} else if([answer-1]==1){;} else {if([answer-1]==0){;}}
      if ([answer-2] == 2){;} else if([answer-2]==1){$ot-2;} else{if([answer-2]==0){$ot-5;}}
      if ([answer-3] == 2){;} else if([answer-3]==1){$ot-2;} else{if([answer-3]==0){$ot-5;}}
      if ([answer-4] == 2){;} else if([answer-4]==1){$ot-2;}  else{if([answer-4]==0){$ot-5;}}
      if ([answer-5] == 2){;} else if([answer-5]==1){$ot-2;}  else{if([answer-5]==0){$ot-5;}}
      if ($_POST[q2] == a){$ot++;} else {$ot++;}
?>

  <p>Вам подходит данный факультет на <?php echo $ot; ?> % </p>
</body>
    </html>
