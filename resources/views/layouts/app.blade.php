<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Responsive Todo List</title>
        <style>
            * {
                box-sizing: border-box;
                font-family: "Segoe UI", sans-serif;
            }

            body {
                margin: 0;
                background-color: #f5f7fb;
                color: #333;
            }

            .container {
                display: flex;
                min-height: 100vh;
            }

            .sidebar {
                width: 220px;
                background-color: #fff;
                padding: 30px 20px;
                border-right: 1px solid #e2e8f0;
            }
           
            .sidebar h2 {
                font-size: 20px;
                margin-bottom: 30px;
            }

            .sidebar ul {
                list-style: none;
                padding: 0;
            }

            .sidebar ul li {
                margin: 20px 0;
                cursor: pointer;
            }

            .main {
                flex: 1;
                padding: 30px;
            }

            .header {
                background: linear-gradient(to right, #ff6a00, #ee0979);
                color: white;
                padding: 20px;
                border-radius: 10px;
                margin-bottom: 20px;
            }

            .header h2 {
                margin: 0 0 8px;
            }

            .form {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                background: #fff;
                padding: 20px;
                border-radius: 10px;
                margin-bottom: 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            }

            .form input {
                flex: 1 1 150px;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 6px;
                height: 50px;
            }
       #error{
            border: 2px solid red;
           }
            .form button {
                padding: 10px 20px;
                background-color: #000000;
                color: #fff;
                border: none;
                border-radius: 6px;
                cursor: pointer;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                background-color: #fff;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            }

            th,
            td {
                padding: 12px;
                border-bottom: 1px solid #eee;
                text-align: left;
            }

            th {
                background-color: #f4f6f8;
            }

            .btn-group {
                display: flex;
                gap: 5px;
            }

            .btn-group button {
                padding: 6px 10px;
                border: none;
                border-radius: 4px;
                color: white;
                font-size: 14px;
                cursor: pointer;
            }
            a{
                text-decoration: none;
                color: white;
                
            }
            .edit-btn {
                background-color: #a75b28;
            }

            .delete-btn {
                background-color: #dc3545;
            }

            .done-checkbox {
                transform: scale(1.2);
            }

            /* Responsive Layout */
           @media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        border-right: none;
        border-bottom: 1px solid #eee;
    }

    .main {
        padding: 20px;
    }

    .form {
        flex-direction: column;
    }

    .form input {
        height: 40px;       /* smaller height */
        font-size: 14px;    /* smaller text size */
    }

    table,
    thead,
    tbody,
    th,
    td,
    tr {
        display: block;
    }

    thead {
        display: none;
    }

    tr {
        margin-bottom: 15px;
        background: #fff;
        border-radius: 10px;
        padding: 10px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
    }

    td {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        border-bottom: none;
    }

    td::before {
        content: attr(data-label);
        font-weight: bold;
        color: #555;
    }
}

        </style>
    </head>
    <body>
        <div class="container">
            <div class="sidebar">
                <h2>Todo Dashboard</h2>
                <ul>
                    <li>My Tasks</li>
                    <li>Completed</li>
                    <li>Today</li>
                    <li>Calendar</li>
                    <li>Settings</li>
                </ul>
            </div>

            <div class="main">
                <div class="header">
                    <h2>Plan Your Day with Reminder</h2>
                    <p>Track your tasks and stay productive.</p>
                </div>

               @yield('Taskcreate')

                <table>
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Category</th>
                            <th>Due Time</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       @yield('content')
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
