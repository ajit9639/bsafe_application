<?php
// Function to save holiday application
function saveHolidayApplication($date, $reason) {
    // In a real-world scenario, you would save the holiday application to a database
    // For demonstration purposes, let's just print out the application details
    echo "Holiday Application Saved: Date - $date, Reason - $reason";
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted date and reason for the holiday
    $date = $_POST["date"];
    $reason = $_POST["reason"];

    // Save the holiday application
    saveHolidayApplication($date, $reason);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Holiday Application</title>
</head>
<body>
    <h2>Apply for Holiday</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Date: <input type="date" name="date" required><br><br>
        Reason: <input type="text" name="reason" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
