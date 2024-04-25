<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Search</title>
</head>
<body>
    <h2>Array Search</h2>

    <?php
       
        $employee_names = array(
           "College of Engineering, Pune (COEP)",
"Vishwakarma Institute of Technology (VIT)",
"Pune Institute of Computer Technology (PICT)",
"Maharashtra Institute of Technology (MIT)",
"Sinhgad College of Engineering",
"Army Institute of Technology (AIT)",
"Bharati Vidyapeeth Deemed University College of Engineering",
"Pimpri Chinchwad College of Engineering (PCCOE)",
"DY Patil College of Engineering",
"International Institute of Information Technology (IIIT), Pune",
"MIT Academy of Engineering",
"Symbiosis Institute of Technology (SIT)",
"Dr. D.Y. Patil Institute of Technology",
"Indira College of Engineering and Management",
"Rajarshi Shahu College of Engineering",
"All India Shri Shivaji Memorial Society's College of Engineering",
"Genba Sopanrao Moze College of Engineering",
"Alard College of Engineering and Management",
"Marathwada Mitra Mandal's College of Engineering",
"Sinhgad Institute of Technology and Science (SITS)"
        );

       
        if (isset($_POST['search_name'])) {
            $search_name = $_POST['search_name'];

           
            $found = in_array($search_name, $employee_names);

            
            if ($found) {
                echo "<p>The name '$search_name' exists in the array.</p>";
            } else {
                echo "<p>The name '$search_name' does not exist in the array.</p>";
            }
        }
    ?>

    <!-- Display the form for searching -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="search_name">Enter a name to search:</label>
        <input type="text" name="search_name" id="search_name">
        <button type="submit">Search</button>
    </form>
</body>
</html>

