<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shape Area Calculator</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #333;
    }
    form {
        text-align: center;
    }
    input[type="radio"] {
        margin: 0 10px;
    }
    input[type="submit"] {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    .output {
        text-align: center;
        margin-top: 20px;
    }
    .output p {
        font-size: 18px;
        color: #333;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Area Calculator</h1>
    <form method="get">
        <input type="radio" name="shape" value="triangle" required> Triangle
        <input type="radio" name="shape" value="square"> Square
        <input type="radio" name="shape" value="circle"> Circle
        <br><br>
        <input type="submit" value="Calculate Area">
    </form>
    <div class="output">
        <?php
        class Shape {
            public function calculateArea() {
                return 0;
            }
        }
        class Triangle extends Shape {
            private $base;
            private $height;
            public function __construct($base, $height) {
                $this->base = $base;
                $this->height = $height;
            }
            public function calculateArea() {
                return 0.5 * $this->base * $this->height;
            }
            public function getParameters() {
                return "Base: $this->base, Height: $this->height";
            }
        }
        class Square extends Shape {
            private $side;
            public function __construct($side) {
                $this->side = $side;
            }
            public function calculateArea() {
                return $this->side * $this->side;
            }
            public function getParameters() {
                return "Side: $this->side";
            }
        }
        class Circle extends Shape {
            private $radius;
            public function __construct($radius) {
                $this->radius = $radius;
            }
            public function calculateArea() {
                return M_PI * $this->radius * $this->radius;
            }
            public function getParameters() {
                return "Radius: $this->radius";
            }
        }
        if (isset($_GET["shape"])) {
            $selectedShape = $_GET["shape"];
            switch ($selectedShape) {
                case "triangle":
                    $shape = new Triangle(10, 5);
                    break;
                case "square":
                    $shape = new Square(8);
                    break;
                case "circle":
                    $shape = new Circle(4);
                    break;
                default:
                    $shape = new Shape();
                    break;
            }
            echo "<p>Selected Shape: $selectedShape</p>";
            echo "<p>" . $shape->getParameters() . "</p>";
            echo "<p>Area: " . $shape->calculateArea() . "</p>";
        }
        ?>
    </div>
</div>
</body>
</html>

