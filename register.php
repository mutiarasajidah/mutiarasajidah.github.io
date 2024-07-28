<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Guitar World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #993333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #990000;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #990000;
            color: white;
            padding: 10px 0;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #660000;
        }
        .admin-code {
            display: none;
        }
    </style>
    <script>
        function toggleAdminCode() {
            var role = document.getElementById('role').value;
            var adminCodeDiv = document.getElementById('adminCodeDiv');
            if (role === 'admin') {
                adminCodeDiv.style.display = 'block';
            } else {
                adminCodeDiv.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <center>
            <img src="GITAR/logo.png" height="100" alt="Logo"/>
            <img src="logo11-.png" height="130" alt="Logo"/>
            <img src="GITAR/11.png" height="100" alt="Logo"/>
        </center>
        <h2>Daftar Akun Baru</h2>
        <form action="process_register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="role">Daftar sebagai:</label>
            <select id="role" name="role" onchange="toggleAdminCode()">
                <option value="customer">Customer</option>
                <option value="admin">Admin</option>
            </select>
            
            <div id="adminCodeDiv" class="admin-code">
                <label for="admin_code">Kode Admin:</label>
                <input type="text" id="admin_code" name="admin_code">
            </div>
            
            <input type="submit" value="Daftar">
        </form>
    </div>
</body>
</html>
