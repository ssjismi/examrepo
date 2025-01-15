<!DOCTYPE html>
<html>
<head>
    <title>Error Page</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
              /* Light red background for error */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;  /* Ensure content is vertically centered */
            text-align: center;
        }

        /* Error message styling */
        .error-message {
            background-color: #721c24;  /* Dark red background for error */
            color: white;  /* White text */
            padding: 20px;
            border-radius: 8px;
            font-size: 24px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);  /* Subtle shadow */
        }

        /* Back link styling */
        .back-link {
            margin-top: 20px;
            display: inline-block;
            font-size: 18px;
            text-decoration: none;
            color: #007bff;  /* Blue color for the back link */
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="error-message">
        <b>ERROR</b>
    </div>
    <a href="login2.php" class="back-link"><b>&lt; Back</b></a>

</body>
</html>
