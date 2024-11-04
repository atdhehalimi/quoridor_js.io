<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle with ::before</title>
    <style>
        .triangle-container {
            position: relative;
            width: 100px;
            height: 100px;
            background-color: #f0f0f0;
        }

        .triangle-container::before {
            content: "";
            position: absolute;
            bottom: 0; /* Positioning the triangle at the bottom */
            left: 50%; /* Centering horizontally */
            transform: translateX(-50%); /* Adjust for centering */
            width: 0;
            height: 0;
            border-left: 50px solid transparent; /* Left side of the triangle */
            border-right: 50px solid transparent; /* Right side of the triangle */
            border-bottom: 50px solid #FF5733; /* Bottom side of the triangle (color) */
        }
    </style>
</head>
<body>

<div class="triangle-container"></div>

</body>
</html>

