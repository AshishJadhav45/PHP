<!DOCTYPE html>
<html>
<head>
  <title>Student Marks System</title>
</head>
<body>
  <h1>Student Marks</h1>
  
  <form action="markssheet.php" method="POST">
    <?php
    // Retrieve student information from previous form
    $name = $_POST['name'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    
    // Display student information
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Class:</strong> $class</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    ?>
    
    <h2>Enter Marks</h2>
    
    <label for="phy">Physics:</label>
    <input type="number" id="phy" name="phy" required>
    <br><br>
    
    <label for="bio">Biology:</label>
    <input type="number" id="bio" name="bio" required>
    <br><br>
    
    <label for="chem">Chemistry:</label>
    <input type="number" id="chem" name="chem" required>
    <br><br>
    
    <label for="math">Mathematics:</label>
    <input type="number" id="math" name="math" required>
    <br><br>
    
    <label for="marathi">Marathi:</label>
    <input type="number" id="marathi" name="marathi" required>
    <br><br>
    
    <label for="english">English:</label>
    <input type="number" id="english" name="english" required>
    <br><br>
    
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="class" value="<?php echo $class; ?>">
    <input type="submit" value="Submit">
  </form>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <title>Student Marks Sheet</title>
</head>
<body>
  <h1>Student Marks Sheet</h1>
  
  <?php
  // Retrieve marks from previous form
  $name = $_POST['name'];
  $class = $_POST['class'];
  $phy = $_POST['phy'];
  $bio = $_POST['bio'];
  $chem = $_POST['chem'];
  $math = $_
