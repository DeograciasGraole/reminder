<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Edit Task</title>
        <style>
            body {
                background-color: #f5f7fb;
                font-family: "Segoe UI", sans-serif;
                margin: 0;
                padding: 0;
            }

            .edit-container {
                max-width: 600px;
                margin: 60px auto;
                background-color: #fff;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            }

            h2 {
                margin-bottom: 20px;
                color: #333;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            label {
                margin-top: 15px;
                margin-bottom: 5px;
                font-weight: 600;
            }

            input,
            select {
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 6px;
                font-size: 16px;
            }

            button {
                margin-top: 25px;
                padding: 12px;
                 background: linear-gradient(to right, #ff6a00, #ee0979);
                color: white;
                border: none;
                border-radius: 6px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            button:hover {
                background-color: #0056b3;
            }

            .back-link {
                margin-top: 20px;
                display: inline-block;
                color: #88723d;
                text-decoration: none;
            }

            .back-link:hover {
                text-decoration: underline;
            }

            @media (max-width: 600px) {
                .edit-container {
                    margin: 30px 20px;
                    padding: 20px;
                }
            }
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>
