<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temperature Converter</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
            color: var(--text-color);
            box-sizing: border-box;
        }

        :root {
            --bg-color: #1f242d;
            --second-bg-color:#323946;
            --text-color:#fff;
            --main-color:#0ef;
        }
          body {
        display: flex;
        justify-content: center;
        align-items: centre;
        min-height: 100vh;
        background: var(--bg-color);
        margin: 50px;
   
    }

    a {
        color: var(--text-color);
        font-size: 18px;
        text-decoration: none;
        transition: .3s ease-in;
    }

    a:hover {
        color: var(--main-color);
        font-size: 20px;
        text-decoration: none;
    }

    .b-form {
   width: 420px;
   color: var(--text-color);
   color: var(--text-color);
   justify-content: center;
   align-items: center;
   position: absolute;
   display: block;
   margin: 50px;
   backdrop-filter: blur(10px);
   box-shadow: 0 0 10px rgba(0, 0, 0, .2);
   border: 2px solid rgba(255, 255, 255, .2);
   border-radius: 10px;
   padding: 20px; 
} 

.b-form h1 {
    font-size: 36px;
    text-align: center;
}

.b-form input {
    width: 100%;
    height: 50px;
    margin: 30px 0;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    color: var(--text-color);
}

.btn {
    display: inline;
    padding: 12px;
    background: transparent;
    border-radius: 4rem;
    border: 2px solid rgba(255, 255, 255, .2);
    font-size: 24px;
    color: var(--text-color);
    letter-spacing: .1rem;
    font-weight: 600;
    transition: .5s ease;
}

.btn:hover {
    box-shadow: 0 0 1rem var(--main-color);
    text-decoration: none;
    color: var(--main-color);
    width: 100%;
}
    </style>
</head>
<body>
    <div class="b-form">
    <h2>Temperature Converter</h2>
    <form method="post">
        <label for="celsius">Enter Temperature in Celsius:</label>
        <input type="text" name="celsius" id="celsius">
        <input type="submit" name="convert" value="Convert" class="btn">

        <a href="index.html">Go back to homepage</a>
    </div>
    </form>
    <?php
    if (isset($_POST['convert'])) {
        $celsius = $_POST['celsius'];
        if (!empty($celsius) && is_numeric($celsius)) {
            $fahrenheit = ($celsius * 9/5) + 32;
            echo "Temperature in Fahrenheit: " . number_format($fahrenheit, 2) . " °F";
        } else {
            echo "Please enter a valid temperature in Celsius.";
        }
    }
    ?>
</body>
</html>
