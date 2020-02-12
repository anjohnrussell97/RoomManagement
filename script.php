<?php
    
    $mySql_Connection = mysqli_connect('localhost','root','','room_management') or die(mysqli_error($mySql_Connection));

       $guest_name = $_POST['quest_name'];
       $room_no = $_POST['room_no'];
       $time_in = $_POST['Time_check-in'];
       $date_in = $_POST['date_in'];

    $mySql_insert_command = "INSERT INTO `checkin_management` (`guest_name`,`room_no`,`check_time`,`check_date`) VALUES('".$guest_name."', '".$room_no."', '".$time_in."', '".$date_in."')";
    //echo $mySql_insert_command;
    $results = mysqli_query($mySql_Connection, $mySql_insert_command);
    if(!$results){
        echo "Sorry, we don't seem to have a connection.";
    }else{
        //echo $guest_name." is successfully added to the database.";
        header("Location: dashboard.php");
    }

?>