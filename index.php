<!DOCTYPE html>

<head>
    <title>Assignment</title>
</head>

<body>
    <h1>Crack the Hash</h1>
    <pre>
Debug Output:
<?php
$pin = "Not found";

if (isset($_GET['Hash'])) {
    $time_pre = microtime(true);
    $Hash = $_GET['Hash'];

    $show = 15;

    for ($i = 0; $i < 10; $i++) {
        $ch1 = $i;

        for ($j = 0; $j < 10; $j++) {
            $ch2 = $j; 
            for ($k = 0; $k < 10; $k++) {
                $ch3 = $k;
                for ($l = 0; $l < 10; $l++) {
                    $ch4 = $l;

                    $try = $ch1 . $ch2 . $ch3 . $ch4;

                    
                    $check = hash('md5', $try);
                    if ($check == $Hash) {
                        $pin = $try;
                        break;   
                    }

                    if ($show > 0) {
                        print "$check $try\n";
                        $show = $show - 1;
                    }
                }
            }
        }
    }
    // Compute elapsed time
    $time_post = microtime(true);
    print "Elapsed time: ";
    print $time_post - $time_pre;
    print "\n";
}
?>
</pre>
    <p>Original Pin: <?= htmlentities($pin); ?></p>
    <form method="get">
        <input type="text" name="Hash" size="60" />
        <input type="submit" value="Crack Hash" />
    </form>
</body>

</html>