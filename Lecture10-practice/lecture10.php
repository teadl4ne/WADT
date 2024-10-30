<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Date & Time</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        h3 {
            text-align: center;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center; /* Centers the content horizontally */
            justify-content: center; /* Centers the content vertically */
            padding: 20px;
        }
        .footer {
            margin-top: auto;
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Main Content -->
    <div style="flex: 1;">
        <h1>Welcome to My Website</h1>
        <p><h3>This is a simple webpage that shows the current date and time in the footer.</h3></p>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <?php
        date_default_timezone_set("Riga/Latvia");
        $currentDate = date("F j, Y");
        $currentTime = date("g:i A");
        ?>
        <p>&copy; <?php echo $currentDate; ?> - Current time: <?php echo $currentTime; ?></p>
    </div>

</body>
</html>
