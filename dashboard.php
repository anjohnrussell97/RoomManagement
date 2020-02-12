<!doctype html>

   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .rectangle {
    height: 80px;
    width: 14.5in;
    margin-top: -8px;
    margin-left: -8px;
    background-color: #2d0344;
    }
    </style>

<body background="background-gray.png">

    <div class="rectangle"> <!--head shaper-->
    
        <table width="100%">
            <tr >
               <td style="color: white;">
                 <h3 style="margin-left: 6%; font-size 8px;">
                     Room Management System
                 </h3> 
                </td>
                <td width="71%" style="margin-top: 10px">
                
                 <div style="color: white; font-family: Arial; font-size: 14px; text-align: right;  margin-right: 8%;"> 
                     <label > Login<label>
                         <label > | </label>
                     <label>User Name<label>
                     <label > | </label>
                     <img src="setting-icon.png" width="18px" alt="icon-setting" style="margin-top: 10px;">
                 </div>
             </td>
             </tr>
             
             
        </table>
     </div>
     <div align="right" style="margin-top: 2%">

        <input type="submit" name="check-in"  onclick="checkIn()" value="Check-in" Style="width: 1in; height: .2in; background-color: #8b03d5; color: white; border-radius: 8px; border-style: unset; ">
        <input type="submit" name="check-out" onclick="checkOut()"  value="check-out" Style="width: 1in; height: .2in; background-color: #ff4848; color: white; border-radius: 8px; border-style: unset; margin-right: 10%;">
    
        <script>
            function checkIn() {
              location.replace("check-in.html")
            }
            function checkOut() {
              location.replace("check-out.html")
            }
        </script>
    </div>

    <table class='table table-hover'>
			<thead >
				<tr >
					<th>#</th>
					<th>Guest Name</th>
					<th>Room</th>
					<th>Date Check-In</th>
					<th>Time Check-In</th>
				</tr>
			</thead>
			<tbody>
                
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "room_management";

                $conn = mysqli_connect('localhost','root','','room_management') or die(mysqli_error($conn));

                // Create connection
                //$conn = new mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $count = 1;

                $sql = "SELECT * FROM checkin_management";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$count++."</td>";
                        echo "<td>".$row["guest_name"]."</td>";
                        echo "<td>".$row["room_no"]."</td>";
                        echo "<td>".$row["check_time"]."</td>";
                        echo "<td>".$row["check_date"]."</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>

		  	</tbody>
        </table>
        
    <div class="container">
        <div class="row">
           
        </div>
    </div>
     
</body>