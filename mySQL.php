<?php
// database functions ************************************************

function fInsertToDatabase() {
  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
  // TODO: Fill in the rest of the function
}

function fDeleteFromDatabase() {
  $sql = "DELETE FROM tblCustomers WHERE CustID=$deleteID";
  // TODO: Fill in the rest of the function
}

function fListFromDatabase() {
  $sql = 'SELECT custID, nameF, nameL FROM tblCustomers ORDER BY CustID';
  // TODO: Fill in the rest of the fuction
}
