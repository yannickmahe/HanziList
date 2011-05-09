<?php

require_once('include.php');

$csv = fopen($csv_file,'w');
fputcsv($csv, array(
        'rank',
        'char',
        'pinyin',
        'pinyin_no_accents',
        'meaning',
        'alternative',
        'alternative2',
        'trad1',
        'trad2',
));

$mysqli->query("SET NAMES 'utf8'");

$query = "SELECT * FROM hanzi";
$result = $mysqli->query($query);


while($row = $result->fetch_assoc()){
    fputcsv($csv, array(
        $row['rank'],
        $row['char'],
        $row['pinyin'],
        $row['pinyin_no_accents'],
        $row['meaning'],
        $row['alternative'],
        $row['alternative2'],
        $row['trad1'],
        $row['trad2'],
    ));
}

fclose($csv);
