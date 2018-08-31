<form method="get">
  <div>
    Operation:
    <select name="operation">
      <option value="sum">Sum</option>
      <option value="substract">Substract</option>
    </select>
  </div>
  <div>
    Number 1:
    <input type="number" name="number_one"/>
  </div>
  <div>
    Number 2:
    <input type="number" name="number_two"/>
  </div>
  <div>
    <input type="submit" name="calculate" value="Calculate"/>
  </div>
</form>
<?php
    if (isset($_GET['calculate'])) {
      $operation = $_GET['operation'];
      $numberOne = $_GET['number_one'];
      $numberTwo = $_GET['number_two'];

      if ($operation == "sum") {
        echo " == " . ($numberOne + $numberTwo);
      } elseif ($operation == "substract") {
        echo " == " . ($numberOne - $numberTwo);
      } else {
        echo " == Invalid operation supplied";
      }
    }
?>
