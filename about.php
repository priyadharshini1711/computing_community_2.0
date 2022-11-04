<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Computing Community</title>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
  background-color: #d2dae2;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

.header {
  overflow: hidden;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  color:white;
}
a{
  text-decoration: none;
  color:#e84393;
  font-size: 18px;
}
.header a.logo {
    margin: 0px;
    width:100px;
    height:70px;
}

.header a:hover {
  background-color: #ddd;
  color: black;

}

.header-right {
  float: right;
}
</style>
</head>
<body>
<div class="header">
    <img class="logo" src="images/favicon.png" alt="logo" width="120" height="75">
    <div class="header-right">
    <a class="active" href="index.php">HOME</a>
    <a href="contact.php">CONTACT</a>
    <a href="about.php">ABOUT US</a>
    <a href="register.php">REGISTER</a>
    </div>

<div class="about-section">
  <h1>About Us</h1>
  <p>We are a team of 2 who have worked towards the development of the project.</p>
  <p>This web page is the poineer to the web design and development from our team.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/avatar.jpg" alt="Priyadharshini Balaji" style="width:100%">
      <div class="container">
        <h2>Priyadharshini Balaji</h2>
        <p class="title">Developer</p>
        <p>Contributed to the idea and outsourcing of the project.</p>
        <p>jane@example.com</p>
        <p><button onclick="location.href='contact.php'" class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/avatar.jpg" alt="Varshini" style="width:100%">
      <div class="container">
        <h2>Varshini</h2>
        <p class="title">Developer</p>
        <p>Contributed to the redesigning and styling of the project.</p>
        <p>mike@example.com</p>
        <p><button onclick="location.href='contact.php'" class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>

</body>
</html>