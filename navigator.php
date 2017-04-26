
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-sdcale=1">

        <title> Asian Aroma </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
        <link href="mycss.css" type="text/css"  rel="stylesheet">
        <script src="signupform.js"></script>
        <script type="text/javascript">

          function hidemenu(){
            document.getElementById('menubook').style.display="none";
          };
		      function openmenubyhover() {
 			      document.getElementById('menubook').style.display="block";
          };
          function closemenu() {
            document.getElementById('menubook').style.display="none";
          };

        </script>
    </head>
    <body onload="hidemenu()">

      <table id="login">
        <tr>
          <td><a href="signin.php" class="font" id="signinBtn" name="signin">Sign in</a></td>
          <td style="border-left: 1px solid #994d00;"> </td>
          <td><a href="signup.php" class="font" id="signupBtn" name="signup">Sign up</a></td>
        </tr>
        <tr></tr>
      </table>
      <table id="userfield"></table>
      &nbsp;&nbsp;
      <div id = "menu" class="menuBackground">
        <ul>
          <li><a href="home.php" name="home"><strong>Home</strong></a></li>
          <li class="dropdown" onmouseover="openmenubyhover()" onmouseleave="closemenu()">
              <a class="dropdown-toggle" data-toggle="dropdown" name="menubook"  href="#">
              <strong>Menu Book</strong><span class="caret"></span></a>
              <ul class="dropdown-menu" id="menubook">
                <li><a href="main_course.php">Main Course</a></li>
                <li><a href="dessert.php">Dessert</a></li>
              </ul>
          </li>
          <li><a href="cart.php" name="cart"><strong>Shopping Cart</strong></a></li>
        </ul>
      </div>
      <hr style="width: 40%;" />
      <div id="content">
