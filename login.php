<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Invoice Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .login-container {
            max-width: 600px;
            margin: 100px auto;
            padding: 30px;
            background-color: #f9f9f9; /* Off-White */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            min-height: 300px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #001f3f; /* Navy Blue */
        }
        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #001f3f; /* Navy Blue */
        }
        .form-group input {
            width: 94%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #001f3f; /* Navy Blue */
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #003366; /* Darker Navy Blue */
        }
        .login_2{
            color: #001f3f; /* #001f3f */
            flex: 50%;
            margin: 30px;
            
            font-size: 15px;
            margin-top: 50px;
            border-left: 2px solid navy;
        }
        .login_1{
            flex: 50%;
        }
        
    </style>
     <script>
        function clearDefaultText(element) {
            if (element.value == element.defaultValue) {
                element.value = '';
                element.classList.remove('default-text');
            }
        }

        function restoreDefaultText(element) {
            if (element.value == '') {
                element.value = element.defaultValue;
                element.classList.add('default-text');
            }
        }
    </script>
</head>
<body>
    <!-- start of login form -->
    <div class="login-container">
        <div class="login_1">
        <h2>Admin Login</h2>
        <form action="login_process.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="Enter your username" 
                    class="default-text" onfocus="clearDefaultText(this)" 
                    onblur="restoreDefaultText(this)"  required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="Enter your password" 
                    class="default-text" onfocus="clearDefaultText(this)" 
                    onblur="restoreDefaultText(this)" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
    <div class="vertical-line"></div>
    <div class="login_2">
        <h2>Invoice Management System for Bharat Mandir Trust</h2>
    </div>
    </div>
</body>
</html>
