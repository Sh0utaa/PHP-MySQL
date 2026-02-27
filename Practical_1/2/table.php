<?php
    $saxeli = htmlspecialchars($_POST["studentis_saxeli"]);
    $gvari = htmlspecialchars($_POST["studentis_gvari"]);
    $kursi = htmlspecialchars($_POST["studentis_kursi"]);
    $semestri = htmlspecialchars($_POST["studentis_semestri"]);
    $saswavlo = htmlspecialchars($_POST["studentis_saswavlo_kursi"]);
    $nishani = htmlspecialchars($_POST["studentis_mighebuli_nishani"]);
    $teqsturi_ganmarteba = "";

    if($nishani >= 91 && $nishani <= 100) {
        $teqsturi_ganmarteba = "A ფრიადი";
    } else if ($nishani >= 81) {
        $teqsturi_ganmarteba = "B ძალიან კარგი";
    } else if ($nishani >= 71) {
        $teqsturi_ganmarteba = "C კარგი";
    } else if ($nishani >= 61) {
        $teqsturi_ganmarteba = "D დამაკმაყოფილებელი";
    } else if ($nishani >= 51) {
        $teqsturi_ganmarteba = "E საკმარისი";
    } else if ($nishani >= 41) {
        $teqsturi_ganmarteba = "FX";
    } else {
        $teqsturi_ganmarteba = "F";
    }


    echo "<h2>სტუდენტი:</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><td>სახელი</td><td>$saxeli</td></tr>";
    echo "<tr><td>გვარი</td><td>$gvari</td></tr>";
    echo "<tr><td>კურსი</td><td>$kursi</td></tr>";
    echo "<tr><td>სემესტრი</td><td>$semestri</td></tr>";
    echo "<tr><td>სასწავლო კურსი</td><td>$saswavlo</td></tr>";
    echo "<tr><td>შეფასება</td><td>$nishani - " . $teqsturi_ganmarteba . "</td></tr>";
    echo "</table>";
?>