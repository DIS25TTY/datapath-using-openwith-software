<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="utf-8">   
    

      
    
</head>
<body>
    <div class="wifi-symbol">
        <div class="wifi-circle first"></div>
        <div class="wifi-circle second"></div>
        <div class="wifi-circle third"></div>
        <div class="wifi-circle fourth">
        </div>
    <style>
        body {
  text-align: center;
  vertical-align: center;
  margin: 20px 10px 10;
  background-color: #000011;
}

.wifi-symbol {
  display: none;
}
.wifi-symbol [foo], .wifi-symbol {
  display: block;
  position: left;
  top: 50%;
  display: inline-block;
  width: 150px;
  height: 150px;
  margin-top: -187.5px;
  -ms-transform: rotate(-45deg) translate(-100px);
  -moz-transform: rotate(-45deg) translate(-100px);
  -o-transform: rotate(-45deg) translate(-100px);
  -webkit-transform: rotate(-45deg) translate(-100px);
  transform: rotate(-45deg) translate(-100px);
}
.wifi-symbol .wifi-circle {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  display: block;
  width: 100%;
  height: 100%;
  font-size: 21.4285714286px;
  position: absolute;
  bottom: 0;
  left: 0;
  border-color: #1c1c1c;
  border-style: solid;
  border-width: 1em 1em 0 0;
  -webkit-border-radius: 0 100% 0 0;
  border-radius: 0 100% 0 0;
  opacity: 0;
  -o-animation: wifianimation 3s infinite;
  -moz-animation: wifianimation 3s infinite;
  -webkit-animation: wifianimation 3s infinite;
  animation: wifianimation 3s infinite;
}
.wifi-symbol .wifi-circle.first {
  -o-animation-delay: 800ms;
  -moz-animation-delay: 800ms;
  -webkit-animation-delay: 800ms;
  animation-delay: 800ms;
}
.wifi-symbol .wifi-circle.second {
  width: 5em;
  height: 5em;
  -o-animation-delay: 400ms;
  -moz-animation-delay: 400ms;
  -webkit-animation-delay: 400ms;
  animation-delay: 400ms;
}
.wifi-symbol .wifi-circle.third {
  width: 3em;
  height: 3em;
}
.wifi-symbol .wifi-circle.fourth {
  width: 1em;
  height: 1em;
  opacity: 1;
  background-color: #000000;
  -o-animation: none;
  -moz-animation: none;
  -webkit-animation: none;
  animation: none;
}

@-o-keyframes wifianimation {
  0% {
    opacity: 0.4;
  }
  5% {
    opactiy: 1;
  }
  6% {
    opactiy: 0.1;
  }
  100% {
    opactiy: 0.1;
  }
}
@-moz-keyframes wifianimation {
  0% {
    opacity: 1.4;
  }
  5% {
    opactiy: 4;
  }
  6% {
    opactiy: 14;
  }
  100% {
    opactiy: 14;
  }
}
@-webkit-keyframes wifianimation {
  0% {
    opacity: 4;
  }
  5% {
    opactiy: 1;
  }
  6% {
    opactiy: 1;
  }
  100% {
    opactiy: 1;
  }
}

    </style>
    </div>
    <center>
        <form action="auth.php" method="POST">
            <div class="login-page">
                <div class="form">
                  <div class="login">
                    <div class="login-header">
                     <h1 style="color: rgb(0, 0, 0);background-color: #dedede;">OPEN WIFI</p></h1>
                      <p style="color: white;"><b>ENTER YOUR CREDENTIALS TO LOGIN</b></p>
                    </div>
                  </div>
                  
                  <form class="login-form">
                    <input type="text" placeholder="username" name="email"/>
                    <input type="password" placeholder="password" name="password"/>
                    <button type="submit">login</button>
                </form>
            </div>
          </div>
            
           <style>
            body
            
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width:550px;
  height: 25px;
  padding: 8% 0 0;
  margin: -80px -50px 0px 900px;
}
.login-page .form .login{
  margin-top: 80px;
margin-bottom: 140px;
}
.form {
  position: relative;
  z-index: 1;
  background: #8c0808c4;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(119, 143, 214, 0.412), 0 5px 5px 0 rgba(40, 7, 130, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #190683;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #040f0f;
  background-image: linear-gradient(45deg,#e4270e,#e74f4f);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #f7f4f4;
  font-size: 18px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #df1313;
  font-size: 12px;
}
.form .message a {
  color: #f11a07;
  text-decoration: none;
}

.container {
  position: side-left;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background-color: #000000;
  background-image: url("https://telecomtalk.info/wp-content/uploads/2023/05/bsnl-offers-great-benefits-with-stv147-30days.jpg");
  background-position:center;
  background-attachment: fixed;}

           </style>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
         
        </form>
    </center>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <style>
	body {
background:  url('https://play-lh.googleusercontent.com/Ei6n4t7xyc4mDmfqsiLweNUpwlNOK0L9mfZqjV-MUNQc3Z03sDKxGI2JAnV1uh4Khns' ) fixed;	
background-repeat:no-repeat;
background-position: center;
}
    </style>
</head>
<body>
    <center>
        <form action="auth.php" method="POST">
            <h1><center><p style="color: black;"><b> OPENWIFI </b></p></center></h1>
            <table>
                <tr>
                    <td><p style="color: black;"><b> LOGIN ID </b></p></td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td><p style="color:black;"><b> PASSWORD </b></p></td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
          
            <input type="submit" name="submit" value="SUBMIT"/>
        </form>
    </center>
</body>
</html>
 -->
