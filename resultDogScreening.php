<!DOCTYPE html >
<html lang="en">
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <title>Dog Screening Result</title>

<body style="background-color: rgb(240, 235, 248);">
    <div id="screening_page">
        <div id="screening_header">
            <h2>Dog Screening Result</h2>
                <?php

                    	$fname = $_POST['fname'];
                    	$lname = $_POST['lname'];

                    	echo "Thanks". $fname . $lname ", Your dog is eligible for appointment.";


                    }


                ?>
                Thank You <?php $fname. $lname ?> for submitting form. Your dog is eligible.

        </div>
    </div>
</body>
</html>