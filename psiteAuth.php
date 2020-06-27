<?php
   session_start();
   include "config.php";
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   
   if(!(($user == "tamara.jenkins@ttu.edu" && $pass == "Sym2CA6Pg") || ($user == "maryalice.zavala@ttu.edu" && $pass == "82UgnR2YT") || ($user == "shannon.watson@ttu.edu" && $pass == "2esYhpEZh") || ($user == "site" && $pass == "site")))
   {
       echo '<html><head><title>TED - Program Coordinator</title>
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
       <script src="//code.jquery.com/jquery-1.11.1.min.js"></script></head><body><style>

       body {
           font-family: "Lato", sans-serif;
       }
       
       
       
       .main-head{
           height: 150px;
           background: #FFF;
          
       }
       
       .sidenav {
           height: 100%;
           background-color: #000000;
           overflow-x: hidden;
           padding-top: 20px;
       }
       
       
       .main {
           padding: 0px 10px;
       }
       
       @media screen and (max-height: 450px) {
           .sidenav {padding-top: 15px;}
       }
       
       @media screen and (max-width: 450px) {
           .login-form{
               margin-top: 10%;
           }
       
           .register-form{
               margin-top: 10%;
           }
       }
       
       @media screen and (min-width: 768px){
           .main{
               margin-left: 40%; 
           }
       
           .sidenav{
               width: 40%;
               position: fixed;
               z-index: 1;
               top: 0;
               left: 0;
           }
       
           .login-form{
               margin-top: 80%;
           }
       
           .register-form{
               margin-top: 20%;
           }
       }
       
       
       .login-main-text{
           margin-top: 20%;
           padding: 60px;
           color: #fff;
       }
       
       .login-main-text h2{
           font-weight: 300;
       }
       
       .btn-black{
           background-color: #000 !important;
           color: #fff;
       }
       
       .one {
         border-style: solid;
         border-color: white;
         border-width: 10px 0px;
       }

       a {
         text-decoration: none;
         display: inline-block;
         padding: 8px 16px;
       }
       
       a:hover {
         background-color: #ddd;
         color: black;
       }
       
           </style><div class="sidenav">

           <form action="index.php">
           <button class="btn btn-light btn-lg" type="submit"><i class="fa fa-arrow-circle-left"  ></i> Back</button>
           </form>
                    <div class="login-main-text one" style="background-color: #CC0000">
                       <h2>OLRSC - TED<br> Program Coordinator Page</h2>
                       <p>Login here to access.</p>
                    </div>
                 </div>
                 <div class="main">
                    <div class="col-md-6 col-sm-12">
                       <div class="login-form"><form method="POST" action="'.$_SERVER['REQUEST_URI'].'"> <div class="form-group">
           <label>User Name</label>
           <input type="text" name="user" class="form-control" placeholder="User Name">
        </div>
        <div class="form-group">
           <label>Password</label>
           <input type="password" name="pass" class="form-control" placeholder="Password">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Login</button></form>         </div>
        </div>
     </div></body></html>';
       exit();
   }
   ?>