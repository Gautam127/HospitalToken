<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="token.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Token</title>
    <style></style>
</head>
<body>
    <?php
        require("tokenreg.php");
    ?>
    <form method=post>
        <div class="container btn-primary ">
            <h1> AMC Appointment Booking</h1>
        <div class="row btn-danger p-2">
            <div class="col-4">
                <h4>Doctor Name:</h4><input type="text" name="doctorName"/>
            </div>
            <div class="col-4">
                <h4>Specialist:</h4>
                <select name="specialist">
                    <option value="Dentist">Dentist</option>
                    <option value="Orthopedics">Orthopedics</option>
                    <option value="Cardiology">Cardiology</option>
                </select>
            </div>
        </div>

        <div class="row btn-info p-2">
            <div class="col-4">
                <h4>Appointment Date:</h4><input type="date" name="aDate"/>
            </div>
            <div class="col-4">
                <h4>Appointment Time:</h4><input type="time" name="aTime"/>
            </div>
        </div>

        <div class="row btn-success p-2">
            <div class="col-4">
                <h4>Full name:</h4><input type="text" name="patientName"/></br>
            </div>
            <div class="col-4">
                <h4>Phone No:</h4><input type="number" name="patientPhone"></br>
            </div>
        </div>
        <div class="row btn-warning p-2">
            <div class="col-12">
                <h4>Message:</h4><input class="message" type="text" name="text" placeholder="Type the message"/></br>
            </div>
        </div>
        <div class="text-center p-2">
            <h3><input type="Submit"/></h3>
        </div>
        
    </div>
    </form>
</body>
</html>