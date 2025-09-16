<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #dfe9f3, #f8f9fa);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .form-container {
      background: #fff;
      padding: 30px 28px;
      border-radius: 14px;
      box-shadow: 0 8px 22px rgba(0,0,0,0.12);
      width: 80%;
      max-width: 300px; /* tighter width */
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #1e293b;
      font-size: 20px;
      font-weight: 600;
    }

    .input-group {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      border: 1px solid #cbd5e1;
      border-radius: 8px;
      background: #f9fafb;
      padding: 0 10px;
      transition: all 0.3s ease;
    }

    .input-group:focus-within {
      border-color: #4a90e2;
      box-shadow: 0 0 0 3px rgba(74,144,226,0.2);
      background: #fff;
    }

    .input-group i {
      color: #64748b;
      font-size: 14px;
      margin-right: 5px;
    }

    .input-group input {
      border: none;
      outline: none;
      flex: 1;
      padding: 10px 0;
      font-size: 14px;
      background: transparent;
    }

    button {
      width: 50%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 15px;
      font-weight: 600;
      color: white;
      cursor: pointer;
      background: linear-gradient(90deg, #3f29e5ff, #7e29dfff, #b10bc0ff);
      background-size: 200% auto;
      transition: all 0.3s ease;
      display: block;
      margin: 15px auto 0;
    }

    button:hover {
      background-position: right center;
      box-shadow: 0 5px 14px rgba(53,122,189,0.4);
      transform: translateY(-1.5px);
    }
  </style>

  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="form-container">
    <h1>Update Student</h1>
   <form action="<?= site_url('user/update/'.$students['id']); ?>" method="post">
  <div class="input-group">
    <i class="fas fa-user"></i>
    <input type="text" name="lastname" id="lastname" 
           value="<?= html_escape($students['last_name']); ?>" required>
  </div>

  <div class="input-group">
    <i class="fas fa-user"></i>
    <input type="text" name="firstname" id="firstname" 
           value="<?= html_escape($students['first_name']); ?>" required>
  </div>

  <div class="input-group">
    <i class="fas fa-envelope"></i>
    <input type="email" name="email" id="email" 
           value="<?= html_escape($students['email']); ?>" required>
  </div>

  <button type="submit">Update</button>
</form>

  </div>
</body>
</html>
