<html>
<head>
  <title>User Profile</title>
  <style>
    body {
    font-family: Arial, sans-serif;
	  margin-top:70px;
	  background-image: url("4.png");
	  background-size:cover;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }
    h1 {
      text-align: center;
    }
    .profile {
      text-align: center;
      margin-bottom: 20px;
    }
    .profile img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
    }
    .profile h2 {
      margin-top: 15px;
    }
    .field {
      margin-bottom: 10px;
    }
    .field label {
      display: inline-block;
      width: 120px;
      font-weight: bold;
	  padding-left:120px;
    }
    .field span {
      font-weight: normal;
    }
    .logout-btn {
      text-align: center;
      margin-top: 40px;
    }
    .logout-btn button {
      padding: 10px 20px;
      background-color: #821D30;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>User Profile</h1>

    <div class="profile">
      <img src="8.jpg" alt="Profile Picture">
      <h2>Welcome, Hashan !</h2>
    </div>

    <div class="field">
      <label>Username:</label>
      <span>hashan</span>
    </div>

    <div class="field">
      <label>Email:</label>
      <span>hashanself20@gmail.com</span>
    </div>
	
	<div class="field">
      <label>Contact No:</label>
      <span>+94 74 172 96 93</span>
    </div>

    <div class="field">
      <label>Bio:</label>
      <span>6 Year wedding planning expereance</span>
    </div>

    <div class="logout-btn">
      <button onclick="logout()">L O G O U T</button>
    </div>
  </div>

  <script>
    function logout() {
      alert('Logged out successfully!');
      window.location.href = 'includes/logout.inc.php'; // Redirect to login page
    }
  </script>
</body>
</html>
