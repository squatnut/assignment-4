<?php
// database functions ************************************************
    include "../dbConnect.php";

function fInsertToDatabase($asin, $title, $price) {
    $myDB = fConnectToDatabase();
    $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
    $result = $myDB->prepare($sql);
    $result->execute();
}

function fDeleteFromDatabase($asin) {
    $myDB = fConnectToDatabase();
    $sql = "DELETE FROM dvdtitles WHERE asin='$asin'";
    $result = $myDB->prepare($sql);
    $result->execute();

}

function fListFromDatabase() {
  $myDB = fConnectToDatabase();
    $sql = 'SELECT asin, title, price FROM dvdtitles ORDER BY title';
    $result = $myDB->prepare($sql);
    $result->execute();

    $set = $result->fetchAll();

    foreach($set as $i=>$link ) {
        echo $link["asin"] . " " . $link["title"] . " " . $link["price"] . " <br> " . "<img src=http://images.amazon.com/images/P/" . $link['asin'] . ".01.MZZZZZZZ.jpg />";
        echo "<br>";
    }

}

function ActorfInsertToDatabase($fname, $lname) {
    $myDB = fConnectToDatabase();
    $sql = "INSERT INTO dvdActors (fname, lname) VALUES ('$fname', '$lname')";
    $result = $myDB->prepare($sql);
    $result->execute();
}

function ActorfDeleteFromDatabase($fname, $lname) {
    $myDB = fConnectToDatabase();
    $sql = "DELETE FROM dvdActors WHERE fname='$fname' AND lname = '$lname'";
    $result = $myDB->prepare($sql);
    $result->execute();

}

function ActorfListFromDatabase() {
    $myDB = fConnectToDatabase();
    $sql = 'SELECT actorID, fname, lname FROM dvdActors ORDER BY actorID';
    $result = $myDB->prepare($sql);
    $result->execute();

    $set = $result->fetchAll();

    foreach($set as $i=>$link ) {
        echo $link["actorID"] . " " . $link["fname"] . " " . $link["lname"];
        echo "<br>";
    }

}

//function TitleActorfInsertToDatabase($asin, actorID) {
  //  $myDB = fConnectToDatabase();
    //$sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
    //$result = $myDB->prepare($sql);
 //$result->execute();
//}

//function TitleActorfDeleteFromDatabase($asin) {
  //  $myDB = fConnectToDatabase();
    //$sql = "DELETE FROM dvdtitles WHERE asin='$asin'";
   // $result = $myDB->prepare($sql);
   // $result->execute();

//}


function JoinTitleActorListFromDatabase(){
    $myDB = fconnectToDatabase();
    $sql = "SELECT d.asin, d.title, d.price , a.actorID, a.fname, a.lname
from dvdtitles d, titleActor ta, dvdActors a
where ta.asin = d.asin and ta.actorID = a.actorID ";
    $result = $myDB->prepare($sql);
    $result->execute();

    $set = $result->fetchAll();

    foreach($set as $i=>$link ) {
        echo " <br> " . "<img src=http://images.amazon.com/images/P/" . $link['asin'] . ".01.MZZZZZZZ.jpg />" . "<br>" . "ASIN: " . $link["asin"] . "<br>" . "TITLE: " . $link["title"] . "<br>" . "ACTOR ID: " . $link["actorID"] . "<br>" . "ACTORS: " . $link["fname"] . " " . $link["lname"] . "<br>" . "DVD PRICE: $" . $link["price"] ;
        echo "<br>";
    }
}
