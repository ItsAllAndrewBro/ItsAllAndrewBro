<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Flight Booking Form</title>
    <script type="text/javascript" >
      function calcParkingCharge(value) {
        var hour=parseInt(value);
        var tot=5;
        if (hour<=2)
          tot=5;
        else {
          tot=5+(3*(hour-2));
        }

        var total = document.createElement("div");  // Creates a new <div> node
        total.textContent = "$" + tot.toString() + ".00";         // Sets the text content
        document.body.appendChild(total);
    }
    </script>
  </head>
  <body>
    <form action="" method="GET">
      <fieldset>
        <!--user information-->
              <!--login stuff-->
        <legend><h1><b>Departure Flight Booking Information</b></h1></legend>
            <p><h2><b>Departure Airport</b></h2></p>
            <label for ="date">Booking Date:</label><input type="date" name="departDate" required>
          <label for="departTime">Available Departure Time:<select name="departTime" requred>
              <!--dpt = departure time-->
            <option value="dpt1">9:00 AM</option>
            <option value="dpt2">1:00 PM</option>
            <option value="dpt3">4:00 PM</option>
          </select>
            <br>
            <p><h3><b>Select Airline</b><h3></p>
            <select name="departure" required>
            <option value=""> </option>
            <option value="atl">Atlanta, GA: Hartsfield Jackcon Airport</option>
            <option value="va">Arlington, VA: Ronald Reagan Washington National Airport</option>
            <option value="tn">Nashville, TN: Nashville International Airport</option>
            <option value="fl">Orlando, FL: Orlando International Airport</option>
          </select>
          <p><h3><b>Seating Information</b></h3></p>
          <label for="number">Number of Tickets:<input type="number" name="numberOfTickets" min="1" max="10"required>
              <lable for="firtClass">First Class:<select name="firstClass">
                <option value""> </option>
                <option value"A1">A1</option>
                <option value"A2">A2</option>
                <option value"A3">A3</option>
              </select>
                <lable for="economy">Economy:<select name="economy">
                  <option value""> </option>
                  <option value"B1">B1</option>
                  <option value"B2">B2</option>
                  <option value"B3">B3</option>
              </select>
                  <lable for="coach">Coach:<select name="coach">
                    <option value""> </option>
                    <option value"C1">C1</option>
                    <option value"C2">C2</option>
                    <option value"C3">C3</option>
                    <option value"C4">C4</option>
              </select>
      <br>
        <p><h3><b>Destination Airport</b></h3></p>
         </select>
            <select name="destination" required>
            <option value=""> </option>
            <option value="atl">Atlanta, GA: Hartsfield Jackcon Airport</option>
            <option value="va">Arlington, VA: Ronald Reagan Washington National Airport</option>
            <option value="tn">Nashville, TN: Nashville International Airport</option>
            <option value="fl">Orlando, FL: Orlando International Airport</option>
          </select>
      </fieldset>
      <br>
      <br>
      <!--**********Return Flight**********-->
      <fieldset>
          <!--user information-->
                <!--login stuff-->
          <legend><h1><b>Return Flight Booking Information</b></h1></legend>
              <p><h2><b>Departure Airport</b></h2></p>
              <label for ="date">Booking Date:</label><input type="date" name="departDate" required>
            <label for="departTime">Available Departure Time:<select name="departTime" requred>
                <!--dpt = departure time-->
              <option value="dpt1">7:00 AM</option>
              <option value="dpt2">3:00 PM</option>
              <option value="dpt3">8:00 PM</option>
            </select>
              <br>
              <p><h3><b>Select Airline</b><h3></p>
              <select name="departure" required>
              <option value=""> </option>
              <option value="atl">Atlanta, GA: Hartsfield Jackcon Airport</option>
              <option value="va">Arlington, VA: Ronald Reagan Washington National Airport</option>
              <option value="tn">Nashville, TN: Nashville International Airport</option>
              <option value="fl">Orlando, FL: Orlando International Airport</option>
            </select>
            <p><h3><b>Seating Information</b></h3></p>
            <label for="number">Number of Tickets:<input type="number" name="numberOfTickets" min="1" max="10"required>
                <lable for="firtClass">First Class:<select name="firstClass">
                  <option value""> </option>
                  <option value"A1">A1</option>
                  <option value"A2">A2</option>
                  <option value"A3">A3</option>
                </select>
                  <lable for="economy">Economy:<select name="economy">
                    <option value""> </option>
                    <option value"B1">B1</option>
                    <option value"B2">B2</option>
                    <option value"B3">B3</option>
                </select>
                    <lable for="coach">Coach:<select name="coach">
                      <option value""> </option>
                      <option value"C1">C1</option>
                      <option value"C2">C2</option>
                      <option value"C3">C3</option>
                      <option value"C4">C4</option>
                </select>
        <br>
          <p><h3><b>Destination Airport</b></h3></p>
           </select>
              <select name="destination" required>
              <option value=""> </option>
              <option value="atl">Atlanta, GA: Hartsfield Jackcon Airport</option>
              <option value="va">Arlington, VA: Ronald Reagan Washington National Airport</option>
              <option value="tn">Nashville, TN: Nashville International Airport</option>
              <option value="fl">Orlando, FL: Orlando International Airport</option>
            </select>
        </fieldset>
        <br><br>
        <h1>Choose a rental car:</h1>
          <select name="cars">
            <option value="suv">SUV</option>
            <option value="compact">Compact</option>
            <option value="midsize">Midsize</option>
            <option value="luxury">luxury</option>
          </select>
          <br><br>
          <input type="submit">

          <h1>Parking Payment</h1>
          <p>$3.00 per hour. Minimum fee of $5. First 2 hours are free.</p>
          <input type="button" value="Calculate" onclick="calcParkingCharge(document.getElementById('parkingHours').value)"/>
          <input type="text" id="parkingHours"/>
          <br><br>
          <h3>Your total:</h3>
      </form>

    </body>
<html>
