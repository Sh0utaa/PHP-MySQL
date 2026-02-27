<?php
    $saxeli = $_GET["saxeli"];
    $gvari = $_GET["gvari"];
    $tanamdeboba = $_GET["tanamdeboba"];
    $xelfasi = $_GET["xelfasi"];
    $procenti = $_GET["procenti"] ?? 20;


    echo "<h2>შედეგი</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><td>სახელი</td><td>" . $saxeli . "</td></tr>";
    echo "<tr><td>გვარი</td><td>" . $gvari . "</td></tr>";
    echo "<tr><td>თანამდებობა</td><td>" . $tanamdeboba . "</td></tr>";
    echo "<tr><td>ხელფასი</td><td>" . $xelfasi . "</td></tr>";
    echo "<tr><td>პროცენტი</td><td>" . $procenti . "%</td></tr>";
    echo "<tr><td>ხელზე ასაღები</td><td>" . ($xelfasi - ($xelfasi * $procenti / 100)) . "</td></tr>";
    echo "</table>";
?>