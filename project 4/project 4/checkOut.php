<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Confirmation Page</title>
</head>
<body>

<?php
    //Get the input.
    $departDate = $_POST['departDate'];
    $departTime = $_POST['departTime'];
	  $departure = $_POST['departure'];
    //Compute totals.

    //$stock_total = $ipadair2 + $iphone6 + $imac;
    //Output totals.
    ?>
<p>Itinerary</p>
<table width="559" border="1" cellpadding="5" cellspacing="0">
  <tr>
    <th width="120">Flight Item</th>
    <th width="400">Deatails</th>
  </tr>
  <tr>
    <td>Departure Date</td>
    <td><?php print $departDate; ?></td>
  </tr>
  <tr>
    <td>Departure Time</td>
    <td><?php print $departTime; ?></td>
  </tr>
  <tr>
    <td>Departure Airline</td>
    <td><?php print $departure; ?></td>
  </tr>
  <tr>
    <td>Number of Tickets</td>
    <td><?php print $numberOfTickets; ?></td>
  </tr>
  <tr>
    <td>Seating</td>
    <td><?php print $seat; ?></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td >Ticket Price</td>
    <td width="126"><?php print $stock_total; ?></td>
  </tr>
</table>
</body>
</html>
