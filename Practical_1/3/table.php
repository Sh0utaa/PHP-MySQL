<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $answers = [
        "q1" => $_POST["q1"] ?? null,
        "q2" => $_POST["q2"] ?? null,
        "q3" => $_POST["q3"] ?? null,
        "q4" => $_POST["q4"] ?? null,
        "q5" => $_POST["q5"] ?? null,
    ];

    $correct = [
        "q1" => "2", 
        "q2" => "3", 
        "q3" => "2", 
        "q4" => "id უნიკალურია ხოლო class არა, და css-ში id-ს უფრო დიდი უპირატესობა აქვს",
        "q5" => "CSS-ში box model ნიშნავს იმას, რომ თითოეული HTML ელემენტი ბრაუზერში აღიქმება როგორც მართკუთხა “ყუთი”, რომელსაც აქვს კონკრეტული სტრუქტურა და ზომები.",
    ];

    $score = 0;

    foreach ($correct as $question => $correctAnswer) {
        if ($answers[$question] === $correctAnswer) {
            $score++;
        }
    }

    echo "სწორი პასუხების რაოდენობა " . $score . " / 5";
}
?>