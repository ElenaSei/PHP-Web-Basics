<?php
include "Song.php";

$numOfSongs = readline();
$totalLength = 0;
$counter = 0;

for ($i = 0; $i < $numOfSongs; $i++){
    $input = explode(';', readline());
    $artist = $input[0];
    $songName = $input[1];
    $length = $input[2];

    try{
        $song = new Song($artist, $songName, $length);
        echo "Song added.\n";
        $counter++;
        $totalLength += $song->getLength();
    }
    catch (Exception $e){
        echo $e->getMessage() . "\n";
    }
}

echo "Songs added: " . $counter . "\n";
echo "Playlist length: " . gmdate("G:i:s", $totalLength); // not in the correct format!