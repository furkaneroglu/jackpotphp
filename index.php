<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jackpot Oyunu</title>
  </head>
  <body bgcolor="#95a5a6"> <center><br/><br/><br/><br/><br/><br/><br/><font size="6" color ="#c0392b" face="ravie">
    <?php
      $jack1 = rand (1,5);
	  $jack2 = rand (1,5);
	  $jack3 = rand (1,5);
		  echo ("<img src=\"images/jack$jack1.png\" alt=\"$jack1\"/> ");
		  echo ("<img src=\"images/jack$jack2.png\" alt=\"$jack2\"/> ");
		  echo ("<img src=\"images/jack$jack3.png\" alt=\"$jack3\"/> <br/><br/>");
		  
		  if($jack1 == $jack2 && $jack1 == $jack3 && $jack2 == $jack3)
			  echo ("JACKPOT! Tebrikler Kazandınız!");
			else 
				echo "<input type='submit' name='submitAdd' value='Tekrar Deneyiniz.' onclick='window.location.reload();'>";
    ?>
		</center></font>
  </body>
</html>