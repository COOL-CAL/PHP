5번
<br>
<?php
  for($i=1; $i<=100; $i++)
  {
    if ( $i % 2 == 0 ) { continue; }
    print $i;
  }
  print "<br>";
  for($i=1; $i<=100; $i++)
  {
    if ( $i % 2 == 1 ) { continue; }
    print $i;
  }
?>