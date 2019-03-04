<?php

ini_set('display_errors',1);

$airline_selected = $_POST['airlines'];
$departure = $_POST['from'];
$destination = $_POST['to'];
$seat_count = $_POST['seat'];

if(!isset($departure)&&!isset($destination))
{
    echo "Please fill the departure and the destination...";
    die();
}

if($departure === $destination)
{
    echo "Are you sure you want to have a return trip ?<br>".
    "Or you don't want to travel?";
    die();
}

$airport_data_json = file_get_contents('./airportdata.json');
$airport_data = json_decode($airport_data_json,true); 
$flight_data_json = file_get_contents('./flightdata.json');
$flight_data = json_decode($flight_data_json,true);

if(isset($_POST['check_availability']))
{
    foreach ($flight_data as $flights) {
        # code...
        if($flights['Airline'] == $airline_selected)
        {
            echo "The flight selected is $airline_selected<br>";
        }
    }
    $flag=1;
    foreach ($airport_data as $airports) {
        # code...
        if($airports['from'] == $departure && $airports['to']== $destination)
        {
            if($seat_count<=$airports['seats_available'])
            {
                echo 'The seats are available...<br>'.
                    'You can book your tickets <a href="#">here</a> !!!';
            }
            $flag=0;
            break;
        }
    }
    if($flag==1)
    {
        echo 'The destination or the departure city is not available ..<br>'.
            'Check back later !!';
    }
}

if(isset($_POST['book_tickets']))
{
    $flag=1;
    foreach ($airport_data as $airports) {
        # code...
        if($airports['from'] == $departure && $airports['to']==$destination)
        {
            if($seat_count<=$airports['seats_available'])
            {
                echo 'The tickets are booked...<br>'.
                    'Enjoy your journey ;)<br>'.
                    'Have a safe journey....<br>'.
                    'Print your tickets <a href="#">here</a> !!!';
            }
            $flag=0;
            echo $airports['seats_available']=$airports['seats_available']-$seat_count;
            break;
        }
    }
    echo '<br><br>'.json_encode($airport_data);
    if($flag==1)
    {
        echo 'The destination or the departure city is not available ..<br>'.
            'Check back later !!';
    }
}