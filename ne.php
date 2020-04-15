<html>
  <head>
    <title> sign in pack your bags</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      *{
        box-sizing:border-box;
      }
      body{
        background:url('img/mn.jpg');
        background-size:cover;
      }
      .wrap{
        max-width:400px;
        margin:auto;
        margin-top:50px;
        padding:20px;
        font-family:sans-seif;
        background:#fff;
        border-radius:10px;
      }
      .wrap h2{
        font-size:2em;
        text-align:center;

      }
      button{
        padding:10px;
        width:49%;
        box-sizing:border-box;
        border:none;
        font-size:1.3em;
        border-radius:10px;
        font-weight:bold;


      }
      button a{
        text-decoration:none;
        color:#fff;
      }
       button:nth-child(1){
         background:purple;
       } 
       button:nth-child(2){
         background:green;
       }
       button:hover{
         background:rgba(0,0,0,0.6)
       }
       .fa{
          font-size:1.3em;
          font-weight:bold;
       }
       form{
         margin-top:30px;

       }
       input[type=text],input[type=password],input[type=submit]{
         width:100%;
         padding:10px;
         margin-bottom:15px;
         font-size:17px;
         border-radius:5px;
         outline:none;
         border:none;
         border:2px solid gray;

       }
       label{
         font-size:20px;
         font-weight:bold;

       }
       input[type=submit]{
         background:red;
         border:none;
         color:#fff;
         font-size:20px;
         font-weight:bold;
          margin-top:20px;
          padding:15px;
          cursor:pointer;
       }
       input[type=submit]:hover{
          background:orange;
       }
       p{
         text-align:center;
      
       }
       p a{
         text decoration:none;
         font-weight:bold;
       }
       .center{
         display: block;
         margin-left: auto;
         margin-right: auto;
         width:50%;
       }
      </style>
  
  </head>

<body>
  <div class ="wrap">
    <h2> Sign In </h2>
    <form name="contactform" method="post" action="vip.php">
    <img src="img/i.png" width="50" height="150" class="center"
</div>

      <form>
        <label> First Name:</label><br>
          <input type ="text"  name="FirstName" required>
          <label> Last Name:</label><br>
          <input type ="text"  name="LastName" required>
          <label> Email:</label><br>
          <input type ="text"  name="Email" required>
          <label> Password:</label><br>
          <input type ="password" name="password" required>
          <label> repeat Password:</label><br>
          <input type ="repeat password"  name="password1" required>
            <input type ="submit" value="Sign In">
</form>
</div>

</body>
</html>