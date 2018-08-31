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
  <?php if (isset($output)) : ?>
    <div>
      Result:
      <input type="number" disabled="disabled" readonly="readonly" value="<?= $output; ?>"/>
    </div>
  <?php endif; ?>
  <div>
    <input type="submit" name="calculate" value="Calculate"/>
  </div>
</form>
