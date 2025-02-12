<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $text = $_POST["text"];

    $number = escapeshellarg($number);
    $text = escapeshellarg($text);

    $output = shell_exec("python3 process.py $number $text");

    echo "<h2 style='font-size: 50px; color: red'>Processing Results</h2>";
    echo "<span><pre style='font-size: 40px'>$output</pre></span>";
}