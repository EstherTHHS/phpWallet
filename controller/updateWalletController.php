<?php
require "../model/dbConnection.php";
$balance = 0;
if (!isset($_SESSION["username"])) {
  header("Location: /login");
} else {
  if (isset($_POST["walletUpdate"])) {

    $upDate = $_POST["update"];
    $upCategory = $_POST["upCategory"];
    $upIncome = $_POST["upIncome"] ?? 0;
    $upExpense = $_POST["upExpense"] ?? 0;

    $userID = $_SESSION["userid"];
    $upid = $_POST["upID"];
    $upbalance += ($income -  $expense);
    $sql = $pdo->prepare("
  UPDATE wallet SET
  date=:date,
  description=:description,
  income=:income,
  expense=:expense,
  balance=:balance,
  user_id=:userid 
  WHERE id=:id
  ");
    $sql->bindValue(":date", $upDate);
    $sql->bindValue(":description", $upCategory);
    $sql->bindValue(":income", $upIncome);
    $sql->bindValue(":expense", $upExpense);
    $sql->bindValue(":balance", $upbalance);
    $sql->bindValue(":userid", $userID);
    $sql->bindValue(":id", $upid);
    $sql->execute();

    header("Location: /listwallet");
  } else {
    echo "ERR";
  }
}
