<?php
require 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search customers by country</title>
</head>
<body>
  <header>
    <form action="customer.php" method="get">
      <label for="country">
        <select name="country" id="country">
<?php
$sql ="select distinct Country from customers order by Country"
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  echo "<option>Germany</option>"
}
?>
{$row['Country']}
          <!-- add options hear ex.
          <option>Germany</option>
          -->
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>