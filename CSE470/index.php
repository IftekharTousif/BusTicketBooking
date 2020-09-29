<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.submitbtn {
  width: 50%;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
</style>
</head>
<body>


<form action="./model/login.php" method="post">
  <h3>LOGIN</h1>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>
</form>
<form action="controller/signup.php" method="post">
  <h3>SIGNUP</h1>
  <div class="container" style="background-color:#f1f1f1">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="unum"><b>Phone Number</b></label>
    <input type="number" placeholder="Enter Phone Number" name="unum" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
    <label for="cpsw"><b>Re enter Password</b></label>
    <input type="password" placeholder="Confirm Password" name="cpsw" required>
    <button  class="submitbtn">Sign Up</button>
    <span class="psw"><a href="view/forgot.php">Forgot password?</a></span>
  </div>
</form>

</body>
</html>