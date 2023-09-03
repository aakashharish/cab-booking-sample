<html>
<head?>
  <link rel="stylesheet" href="./cars.css">
</head>
<body>
<nav class="navbar">
      <h1>A1 CAB</h1>
      <ul>
        <li><a href="../frontend/index.html">Home</a></li>
        <li><a href="../frontend/about.html">About Us</a></li>
        <li><a href="../frontend/contact.html">Contact </a></li>
        <li></li>
      </ul>
    </nav>    
<?php

$con = mysqli_connect("localhost","root","root123","cabbooking");

$res = mysqli_query($con, "select * from cars");
?>
<h1>CARS DETAILS</h1>
<table><thead>
<tr><th>Car No</th><th>Car Naame</th><th>Driver Name</th><th>KM</th>
<th>Amount</th><th>Persons Allow</th><th>Book</th></tr>
</thead>

<?php
while($row = mysqli_fetch_array($res)){
?>
<tr>
<td><?php echo $row['sno']; ?></td>
<td><?php echo $row['car']; ?></td>
<td><?php echo $row['dname']; ?></td>
<td><?php echo $row['km']; ?></td>
<td><?php echo $row['amount']; ?></td>
<td><?php echo $row['persons']; ?></td>
<td><a href="./book.html"><?php echo $row['link']; ?></a></td>
</tr>

<?php
}
?>
</table>
</body>
</html>