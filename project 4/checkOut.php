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
<br>
<link href="./ccStyle.css" rel="stylesheet">

<script>
  window.onload = function() {
    var elm = document.getElementById("ccnumber"),
        img = document.getElementById("cardImg");
    elm.onkeyup = function(event) { // capture the input keyup
        if (this.value.length === 1) { // make sure we are only checking the first value
            switch (event.keyCode) {
            case (49):
                img.src = "./ccPics/henry.jpg";
                break;
            case (51):
                 img.src = "./ccPics/amex.png";
                break;
            case (52):
                 img.src = "./ccPics/visa.png";
                break;
            case (53):
                 img.src = "./ccPics/mastercard.png";
                break;
            case (54):
                 img.src = "./ccPics/discover.png";
                break;
            }
        }
    }
  }
</script>

  <div class="outer-div">
    <div class="tableWrapper">
      <form id="ccForm">
        <table>
          <tr>
            <th>Card Number:</th>
            <th><input name="card-number" id="ccnumber"></th>
          </tr>
          <tr>
            <th>Name:</th>
            <th><input name="card-name" class="ccname"></th>
          </tr>
          <tr>
            <th>Security Code:</th>
            <th><input name="card-code" class="cccode"></th>
          </tr>
          <tr>
            <th>Expiration</th>
            <th>
              <select name="month">
                <option selected disabled>MM</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
              <select name="year">
                <option selected disabled>YY</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
                <option value="24">2024</option>
                <option value="25">2025</option>
                <option value="26">2026</option>
                <option value="27">2027</option>
              </select>
            </th>
          </tr>
          <tr>
            <th>
              <input type="submit" value="Submit">
            </th>
            <th><img id="cardImg" src="./ccPics/amex.png"></th>
          </tr>
        </table>
      </form>
    </div>
  </div>

</body>
</html>
