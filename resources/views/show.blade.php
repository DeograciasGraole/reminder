<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Task Details</title>
  <style>
    body {
      background-color: #f4f6fa;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
    }

    .task-container {
      max-width: 600px;
      margin: 60px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .task-detail {
      margin: 15px 0;
    }

    .task-detail strong {
      display: inline-block;
      width: 100px;
      color: #555;
    }

    .back-link {
      margin-top: 25px;
      display: inline-block;
      color: #007bff;
      text-decoration: none;
    }

    .back-link:hover {
      text-decoration: underline;
    }

    @media (max-width: 600px) {
      .task-container {
        margin: 30px 20px;
        padding: 20px;
      }

      .task-detail strong {
        width: 90px;
      }
    }
  </style>
</head>
<body>

  <div class="task-container">
    <h2>Task Details</h2>

    <div class="task-detail">
      <strong>Title:</strong> Buy Groceries
    </div>
    <div class="task-detail">
      <strong>Category:</strong> Personal
    </div>
    <div class="task-detail">
      <strong>Time:</strong> 10:00 AM
    </div>
    <div class="task-detail">
      <strong>Date:</strong> 2025-07-08
    </div>

    <a href="index.html" class="back-link">← Back to Task List</a>
  </div>

</body>
</html>
