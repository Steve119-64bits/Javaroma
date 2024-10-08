<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <!-- for interactive coffee animation -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="icon" type="image/png" href="../images/Javaromalogo.png">
    <script src="steam-animation.js"></script>
    <style>
        svg {
            width: 300px;
            margin: 0 auto;
            display: block;
            margin-top: -350px;
        }

        #steam {
            opacity: .5;
        }

        h1 {
            text-align: center;
            margin-top: -350px;
            font-size: 60px;
            font-family: "Bree Serif", serif;
            color: #543A1C;
            text-transform: uppercase;
        }
    </style>
    <!-- -------------------------------- -->
</head>

<body>
    <div class="container">
        <div class="left">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1000px" height="1000px"
                viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                <rect id="bg" x="-29" y="-37" fill="#C2B59B" width="1064" height="1073" />
                <ellipse id="mug-shadow" fill="#ADA28B" cx="472.366" cy="812.197" rx="218.234" ry="53.727" />
                <path id="handle" fill="#FFF2C7" d="M647.587,442.566c-42.537-81.183-106.46,101.597-106.46,182.006
    c0,80.41,86.875,210.709,113.873,176.375C681.998,766.614,793.239,783,793.239,627C793.239,445,667.086,479.781,647.587,442.566z
     M649,719.255c-13.591-17.432-2.343-85.951,6-166.255c5.653-54.416,104.437-47.338,104.437,74
    C759.437,758.47,680.416,759.549,649,719.255z" />
                <path id="mug-inner-shadow" fill="#D4D29F" d="M655,619H286V426.5c0,0,21.866-34.176,184.5-34.176
    c151.451,0,184.5,34.176,184.5,34.176V619z" />
                <path id="coffee" fill="#543A1C"
                    d="M643,639H298V446.5c0,0,20.057-34.176,172.5-34.176c141.961,0,172.5,34.176,172.5,34.176V639z" />
                <g id="handle-shadow">
                    <path fill="#D4C9A5" d="M645.592,714.995c0.832,1.067,1.705,2.1,2.602,3.107C635.876,698.981,646.829,631.646,655,553
        c3.783-36.415,49.268-45.281,78.949-10.808c-29.466-39.379-78.426-31.293-82.357,6.548
        C643.249,629.044,632.001,697.563,645.592,714.995z" />
                    <path fill="#D4C9A5" d="M759.578,506.293c17.745,23.336,30.253,59.145,30.253,116.447c0,156-111.241,139.614-138.239,173.947
        c-10.712,13.622-30.85,1.326-51.246-23.485c21.533,27.621,43.346,42.126,54.654,27.745C681.998,766.614,793.239,783,793.239,627
        C793.239,566.093,779.109,529.467,759.578,506.293z" />
                </g>
                <path id="mug-body" fill="#FFF2C7" d="M655,807.654c0,0-31.359,43.824-184.5,43.824S286,807.654,286,807.654V426.5
    c0,0,41.866,32.557,184.5,32.557S655,426.5,655,426.5V807.654z" />
                <g id="steam">
                    <path id="steam-left" fill="#ECEFF0" d="M377.611,203.07c-25.395,8.346-80.709,47.844-41.081,74.058
        c44.527,28.808,38.123,33.269-6.917,72.483c23.679-9.33,82.718-49.811,38.063-73.173
        C320.997,252.822,338.488,233.276,377.611,203.07C373.292,204.49,370.435,208.611,377.611,203.07z" />
                    <path id="steam-right" fill="#ECEFF0" d="M617.61,203.07c-25.398,8.347-80.704,47.841-41.081,74.058
        c44.526,28.807,38.123,33.269-6.916,72.483c23.678-9.33,82.718-49.811,38.063-73.173
        C560.995,252.824,578.487,233.273,617.61,203.07C613.291,204.49,610.434,208.611,617.61,203.07z" />
                    <path id="steam-mid" fill="#ECEFF0" d="M503.39,151c-29.594,10.944-101.875,60.753-51.809,93.649
        c11.829,7.624,49.646,13.698,44.947,34.054c-5.715,25.162-36.23,45.828-54.915,60.909c28.3-12.377,103.601-63.641,48.103-92.404
        C428.52,216.343,450.766,188.6,503.39,151C497.933,153.018,493.944,157.749,503.39,151z" />
                </g>
                <g id="rim">
                    <path fill="#FFFFD9"
                        d="M470.5,394.612c45.936,0,89.718,3.559,123.282,10.021c40.286,7.756,49.308,16.332,50.961,18.423
        c-1.653,2.091-10.675,10.668-50.961,18.424C560.218,447.941,516.436,451.5,470.5,451.5s-89.718-3.559-123.282-10.021
        c-40.286-7.756-49.308-16.333-50.961-18.424c1.654-2.091,10.675-10.667,50.961-18.423
        C380.782,398.17,424.564,394.612,470.5,394.612 M470.5,384.612c-101.896,0-184.5,17.212-184.5,38.444
        c0,21.232,82.604,38.444,184.5,38.444S655,444.288,655,423.056C655,401.824,572.396,384.612,470.5,384.612L470.5,384.612z" />
                </g>
            </svg>
            <h1>Javaroma</h1>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TimelineMax.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
        </div>
        <div class="right">
            <div class="login-box">
                <h2>Register</h2>
                <p>Have existing account? <a href="index.php">Login now!</a></p>

                <form id="register-form" action="register.php" method="post" onsubmit="return validateForm()">
                    <div class="input-box">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="input-box">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="input-box">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <button type="submit" onsubmit="validateForm()" class="login-btn">Register</button>
                </form>
                <script src='userValidation.js'></script>
                <?php
                $servername = "localhost";
                $serverUsername = "root";
                $serverPassword = "";
                $dbname = "javaroma_db";

                //check conncection
                $conn = new mysqli($servername, $serverUsername, $serverPassword, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                //get data from form 
                if ($_SERVER["REQUEST_METHOD"] === "POST") {

                    $name = $_POST['name'] ?? '';
                    $email = $_POST['email'] ?? '';
                    $password = $_POST['password'] ?? '';

                    if (empty($name) || empty($email) || empty($password)) {
                        echo "<script>alert('Please fill in all fields.')</script>";
                        exit();
                    }

                    //md5 password
                    $password = md5($password);

                    //prepare and bind 
                    $sql = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
                    $sql->bind_param("sss", $name, $email, $password);
                    $sql->execute();

                    if ($sql->affected_rows > 0) {
                        //display pop up dialog
                        echo "<script>alert('Registration successful. Redirecting you to Login Page.')</script>";
                        echo "<script>window.location.href = 'index.php';</script>";


                    } else {
                        echo "<script>alert('Registration failed. Please try again.')</script>";
                    }

                    $conn->close();
                }

                ?>

            </div>
        </div>
    </div>

    <script src='userValidation.js'></script>
</body>

</html>