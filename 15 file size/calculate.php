<html>
<head>
    <title>File Size Calculator</title>
</head>
<style>
  body{
     display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .result{
    background-color: aquamarine;
    border: 1px solid black;
  }
</style>
<body>
    <div class="result">
    <h1>File Size Calculator</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filename = $_POST['filename'];
        if (file_exists($filename)) {
            $size = filesize($filename);
            echo "<div>File size: $size bytes</div>";
        } else {
            echo "<div>File not found</div>";
        }
    }
    ?>
    <a href="index.html">Back to Calculator</a>
    </div>
</body>
</html>

