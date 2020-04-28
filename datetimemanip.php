<?php 
    $title = 'DATA & TIME Manipulation';
    include 'includes/header.php' 
?>
    
<h2>DATE & TIME Manipulation</h2>

<?php
    $datenow = getdate();
    echo "Today's date : <br>";
    echo $datenow['mday'] . '<br>';
    echo $datenow['mon'] . '<br>';
    echo $datenow['year'] . '<br><br>';

    echo "Today's date : " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br><br>';

    echo time() . '<br>';

    print date("d/m/y G.i:s<br>", time()) . '<br>';
    print "Today is ";
    print date("j");
    print " of ";
    print date("F Y, \a\\t g.i a", time()) . '<br>';
    echo "Today is " . date("j") . " of" . date(" F Y, \a\\t g.i a", time()) . '<br>';
    print "Today is " . date("j") . " of" . date(" F Y, \a\\t g.i a", time()) . '<br>';

    require 'includes/footer.php' 
?>