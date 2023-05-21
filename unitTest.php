<?php
// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ticket_type = $_POST['ticket_type'];

  // Connect to MySQL database
  $conn = new mysqli("localhost", "username", "password", "database_name");

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert ticket into the database
  $sql = "INSERT INTO tickets (ticket_type, price) VALUES ('$ticket_type', '$ticket_type')";
  if ($conn->query($sql) === TRUE) {
    echo "Ticket purchased successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>


<?php
// Connect to MySQL database
$conn = new mysqli("localhost", "username", "password", "database_name");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve and display tickets from the database
$sql = "SELECT * FROM tickets";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['ticket_id'] . "</td>";
    echo "<td>" . $row['ticket_type'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='3'>No tickets available.</td></tr>";
}

// Close the database connection
$conn->close();
?>
