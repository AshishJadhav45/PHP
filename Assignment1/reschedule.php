<!-- reschedule.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Flight Journey Reschedule</title>
</head>
<body>
    <h2>Flight Journey Reschedule</h2>
    
    <?php
    // Check if the form is submitted
    if(isset($_POST['flight_number']) && isset($_POST['current_date']) && isset($_POST['new_date'])) {
        // Get the submitted form data
        $flight_number = $_POST['flight_number'];
        $current_date = $_POST['current_date'];
        $new_date = $_POST['new_date'];
        
        // Perform any necessary validation or data processing
        
        // Display the updated information
        echo "<p>Flight Number: $flight_number</p>";
        echo "<p>Current Date: $current_date</p>";
        echo "<p>New Date: $new_date</p>";
    }
    ?>
    
</body>
</html>
    