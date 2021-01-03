<?php

include('home.db.php');
$log = new homelogin();


if (isset($_POST['submit1']))
{
    $log->input();

}
?>



<style>
        body {
    background-color: white;
}

#loginbox {
    margin-top: 30px;
}

#loginbox > div:first-child {        
    padding-bottom: 10px;    
}

.iconmelon {
    display: block;
    margin: auto;
}

#form > div {
    margin-bottom: 25px;
}

#form > div:last-child {
    margin-top: 10px;
    margin-bottom: 10px;
}

.panel {    
    background-color: #ffffff;
}

.panel-body {
    padding-top: 30px;
    background-color: rgba(255,255,255,.3);
}

#particles {
    width: 100%;
    height: 100%;
    overflow: hidden;
    top: 0;                        
    bottom: 0;
    left: 0;
    right: 0;
    position: absolute;
    z-index: -2;
}

.iconmelon,
.im {
  position: relative;
  width: 150px;
  height: 150px;
  display: block;
  fill: #4A575D;
}

.iconmelon:after,
.im:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

.container{
height: 100%;
align-content: center;
}

.card{
height: 540px;
margin-top: auto;
margin-bottom: auto;
width: 600px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #CF1F46;
}

.social_icon span:hover{
color: #4A575D;
cursor: pointer;
}

.social_icon{
position: absolute;
right: 20px;
top: -7px;
}

.input-group-prepend span{
width: 45px;
background-color: #CF1F46;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #CF1F46;

}

.login_btn:hover{
color: black;
background-color: #4A575D;
}

.links{
color: white;
}
.links:hover{
    color: #CF1F46;
    }

.links a{
margin-left: 4px;
}
</style>


<script>
function validateForm() {
  var x = document.forms["forms"]["username"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="SignUp.css" />
    
    <title>Sign Up</title>

</head>
<body >
        
        <div class="container">
                <div style="text-align:center"><img class="mt-2" src="https://i.ibb.co/1vh49st/register-297979.png" alt="resim" style="width:20%"></div>
                <div class="d-flex justify-content-center h-100">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-light">Sign Up</h2>
                        </div>
                        <div class="card-body p-2">
                            <!-- <form class="needs-validation" action="loginbs.php" > -->
                                <form action="" method="post" autocomplete="off" enctype="multipart/form-data" name="forms  " onsubmit="return validateForm()">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text"><i class='fas fa-user-graduate ml-2' style='font-size:22px'></i></span>
                                        <input type="text" class="form-control" placeholder="Name" id="tbAd" name="username" required >                        
                                    </div>         
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class='fas fa-user-graduate ml-2' style='font-size:22px'></i></span>
                                        <input type="text" class="form-control" placeholder="Surname" id="tbSoyad" name="surname" required>            
                                    </div>   
                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class='fa fa-envelope ml-2' style='font-size:26px'></i></span>
                                        <input type="text" class="form-control" placeholder="E-mail" id="tbEmail" name="email" required> 
                                        <div class="input-group-append">
                                            <span class="input-group-text  text-light" style="width: 100px;font-size: 15px; font-weight: 500">@example.com</span>
                                        </div>     
                                    </div>       
                                </div>
                            <div class="input-group form-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class='fa fa-key ml-2' style='font-size:20px'></i></span>
                                  <input type="password" class="form-control" placeholder="Password" id="tbSifre" name="password" required>
                              </div>         
                          </div>
                          <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class='fa fa-key ml-2' style='font-size:20px'></i></span>
                                <input type="password" class="form-control" placeholder="Confirm Password" id="tbTekrarSifre" name="password" required>                 
                            </div>         
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class='fa fa-home ml-2' style='font-size:20px'></i></span>
                                <input type="text" class="form-control" placeholder="Address" id="tbTekrarSifre" name="address" required>                 
                            </div>         
                        </div>


<div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class='fa fa-calendar-week ml-2' style='font-size:20px'></i></span>
                                <input type="date" class="form-control" placeholder="birthday" id="tbTekrarSifre" name="birthday" required>                 
                            </div>         
                        </div>


<div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class='fa fa-image ml-2' style='font-size:20px'></i></span>
                                <input type="file" class="form-control" placeholder="upload your image" id="tbTekrarSifre" name="fileToUpload" >                 
                            </div>         
                        </div>
                            

                            Male:<input type="radio" name="gender" value="male" class="a">
    Female :<input type="radio" name="gender" value="female" class="a">

                                <div class="row align-items-center remember">
                                    <div class="form-group form-check-inline mx-4">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" id="cbKosul" required>
                                            <a href="#" class="links">I agree to this terms.</a>
                                            <div class="invalid-tooltip">*
                                                You cannot proceed without accepting the terms and conditions.</div>
                                        </label>
                                    </div>
                                </div>      
                        </div>
                        <div class="card-footer p-2">
                            <div class="d-flex justify-content-center links">
                               <input type="submit" id="btnKayıtOl" name="submit1" class="btn login_btn text-light btn-block" style=" font-weight: 600;">
                            </div>
                    </div>

                    

                  </form>
                </div>          
            </div>

        <div id="particles"></div>
        <svg id="svg-source" height="0" version="1.1" 
          xmlns="http://www.w3.org/2000/svg" style="position:absolute; margin-left: -100%"
          xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="git" data-iconmelon="Iconmelon:c88d710192f240e49b7f92912997850e">
            <path fill="#40B7AE" d="M16.176,31.751c4.82,0,8.764-3.196,9.08-7.242H7.096C7.413,28.555,11.355,31.751,16.176,31.751z"></path>
            <g opacity="0.1">
              <path fill="#FFFFFF" d="M20.893,30.672c-0.006-0.014-0.013-0.026-0.019-0.04c-0.004,0.003-0.009,0.005-0.013,0.007
                C20.871,30.65,20.883,30.66,20.893,30.672z"></path>
              <path fill="#FFFFFF" d="M25.251,24.514h-0.009c0,0.021,0,0.041,0,0.062C25.244,24.555,25.25,24.534,25.251,24.514z"></path>
              <path fill="#FFFFFF" d="M22.508,26.766c0.229,0.683,0.398,1.385,0.518,2.093c0.012,0.07,0.012,0.143,0.022,0.213
                c1.243-1.224,2.045-2.781,2.194-4.496c0-0.021,0-0.041,0-0.062h-3.72c0.057,0.107,0.123,0.21,0.177,0.319
                C22.015,25.456,22.289,26.103,22.508,26.766z"></path>
              <path fill="#FFFFFF" d="M19.32,29.158c-0.924-0.711-2-1.235-3.148-1.456c-0.725-0.141-1.47-0.167-2.205-0.086
                c-0.899,0.095-1.779,0.34-2.614,0.681c0.606-0.061,1.221-0.063,1.825,0.027c0.505,0.074,1.002,0.21,1.473,0.41
                c0.917,0.383,1.719,0.993,2.427,1.682c0.379,0.366,0.73,0.756,1.081,1.146c0.969-0.185,1.878-0.499,2.702-0.924
                C20.395,30.1,19.888,29.593,19.32,29.158z"></path>
              <path fill="#FFFFFF" d="M15.433,31.05c-0.008-0.012-0.023-0.034-0.032-0.045c0.078,0.246,0.167,0.488,0.258,0.729
                c0.093,0.005,0.185,0.01,0.278,0.012C15.759,31.521,15.59,31.29,15.433,31.05z"></path>
              
              <path fill="#FFFFFF" d="M12.222,26.922c0.104-0.012,0.207-0.019,0.309-0.038c-0.413-0.039-0.824-0.093-1.229-0.181
                c-1.553-0.324-3.019-1.06-4.202-2.118c0.034,0.38,0.105,0.75,0.201,1.112c0.245,0.326,0.512,0.637,0.839,0.88
                c0.093,0.072,0.194,0.131,0.292,0.194c-0.211,0.083-0.407,0.195-0.601,0.312c0.126,0.248,0.266,0.49,0.421,0.724
                c0.616-0.235,1.254-0.418,1.898-0.556C10.835,27.106,11.528,27.004,12.222,26.922z"></path>
              <path fill="#FFFFFF" d="M12.986,30.213c-0.216-0.195-0.467-0.354-0.742-0.451c-0.382-0.14-0.799-0.167-1.2-0.115
                c-0.271,0.034-0.531,0.124-0.777,0.243c1.036,0.756,2.271,1.315,3.633,1.614c-0.165-0.325-0.343-0.642-0.572-0.927
                C13.225,30.445,13.109,30.325,12.986,30.213z"></path>
              <path fill="#FFFFFF" d="M9.595,28.736c-0.212-0.032-0.426-0.034-0.64-0.023c0.076,0.085,0.155,0.167,0.235,0.248
                C9.323,28.882,9.454,28.798,9.595,28.736z"></path>
            </g>
            <path fill="#F39C9E" d="M25.25,24.503c0-1.737-4.064-3.155-9.077-3.155s-9.076,1.418-9.076,3.155c0,1.75,4.064,3.168,9.076,3.168
            C21.186,27.671,25.25,26.253,25.25,24.503z"></path>
            <path fill="#E9437F" d="M24.303,24.357c0-1.477-3.641-2.682-8.129-2.682c-4.489,0-8.129,1.205-8.129,2.682
            c0,1.486,3.64,2.69,8.129,2.69C20.662,27.049,24.303,25.846,24.303,24.357z"></path>
            <path fill="#3C3C3B" d="M21.541,24.598c0,0,0.497-0.226,0.82-0.142c0.334,0.086,0.168,0.377-0.197,0.303
            c0.338,0.112,0.102,0.38-0.232,0.294C21.607,24.969,21.541,24.598,21.541,24.598z"></path>
            
            
            
            <path fill="#3C3C3B" d="M10.752,24.665c0.001-0.003,0.001-0.005,0.002-0.006c0.001-0.002,0.001-0.005,0.001-0.007
            c0.073-0.166-0.096-0.338-0.373-0.381c-0.277-0.043-1,0.172-1,0.172s0.456,0.4,0.731,0.445
            C10.39,24.932,10.678,24.832,10.752,24.665z M9.983,24.539c0.036-0.087,0.182-0.139,0.324-0.114c0.143,0.021,0.228,0.108,0.19,0.193
            s-0.183,0.137-0.324,0.114C10.031,24.711,9.946,24.623,9.983,24.539z"></path>
            
            <path fill="#3C3C3B" d="M21.988,23.285c0-0.176-0.191-0.317-0.428-0.317c-0.129,0-0.244,0.042-0.322,0.106
            c-0.031,0.007-0.064,0.004-0.11-0.012c-0.051-0.019-0.094-0.051-0.128-0.096c0.014,0.112,0.062,0.209,0.137,0.266
            c-0.004,0.017-0.006,0.033-0.006,0.053c0,0.175,0.191,0.314,0.43,0.314C21.797,23.602,21.988,23.46,21.988,23.285"></path>
            <path fill="#3C3C3B" d="M11.153,23.197V23.15c0-0.002,0-0.004,0-0.006c0.014-0.004,0.025-0.006,0.037-0.01
            c0.003,0.001,0.007,0.004,0.009,0.004l0.055,0.033c0.026,0.016,0.068,0.016,0.094,0l0.093-0.057c0.025-0.016,0.025-0.041,0-0.057
            l-0.054-0.031c-0.003-0.002-0.006-0.004-0.007-0.006c0.005-0.008,0.01-0.016,0.014-0.022c0.003,0,0.007,0,0.013,0h0.076
            c0.037,0,0.067-0.019,0.067-0.039v-0.079c0-0.021-0.03-0.04-0.067-0.04h-0.076c-0.005,0-0.009,0-0.013-0.001
            c-0.005-0.007-0.01-0.015-0.014-0.021c0.001,0,0.004-0.004,0.007-0.004l0.054-0.033c0.025-0.016,0.025-0.041,0-0.057l-0.093-0.057
            c-0.026-0.016-0.068-0.016-0.094,0L11.2,22.702c-0.002,0.002-0.006,0.004-0.009,0.005c-0.012-0.003-0.023-0.007-0.037-0.009
            c0-0.003,0-0.005,0-0.009v-0.045c0-0.021-0.03-0.039-0.066-0.039h-0.132c-0.036,0-0.067,0.017-0.067,0.039v0.045
            c0,0.004,0,0.006-0.001,0.009c-0.012,0.002-0.024,0.006-0.037,0.009c-0.002-0.001-0.005-0.003-0.009-0.005l-0.055-0.033
            c-0.024-0.017-0.067-0.017-0.093,0L10.6,22.727c-0.026,0.016-0.026,0.039,0,0.056l0.054,0.032c0.003,0.002,0.006,0.004,0.007,0.006
            c-0.006,0.008-0.01,0.015-0.014,0.021c-0.004,0.001-0.008,0.001-0.012,0.001h-0.078c-0.036,0-0.066,0.018-0.066,0.04v0.079
            c0,0.021,0.03,0.039,0.066,0.039h0.078c0.004,0,0.008,0,0.012,0c0.004,0.008,0.009,0.016,0.014,0.021
            c-0.001,0.002-0.004,0.004-0.007,0.006L10.6,23.061c-0.026,0.017-0.026,0.041,0,0.057l0.093,0.057c0.026,0.016,0.069,0.016,0.093,0
            l0.055-0.033c0.003,0,0.006-0.002,0.009-0.004c0.013,0.004,0.024,0.006,0.037,0.01c0.001,0.002,0.001,0.004,0.001,0.006v0.047
            c0,0.021,0.031,0.041,0.067,0.041h0.132C11.123,23.238,11.153,23.221,11.153,23.197z M10.822,22.921
            c0-0.065,0.088-0.118,0.199-0.118c0.109,0,0.198,0.053,0.198,0.118s-0.089,0.119-0.198,0.119
            C10.91,23.04,10.822,22.986,10.822,22.921z"></path>
            
            
            
            <g id="_x23_c49b86ff">
              <path fill="#C49C87" d="M10.606,7.814C11.09,7.6,11.625,7.519,12.15,7.517c0.744-0.025,1.484,0.045,2.225,0.092
                c1.009,0.074,2.026,0.078,3.037,0c0.514-0.023,1.027-0.088,1.543-0.089c0.711-0.034,1.447-0.027,2.121,0.229
                c0.613,0.227,1.078,0.723,1.447,1.245c0.303,0.461,0.543,1,0.529,1.561c-0.074-0.27-0.138-0.545-0.26-0.8
                c-0.223-0.486-0.562-0.912-0.957-1.27c-0.554-0.517-1.339-0.668-2.074-0.677c-1.173-0.01-2.335,0.187-3.506,0.208
                c-1.002,0.028-2-0.079-2.997-0.159c-0.596-0.042-1.196-0.079-1.791-0.001c-0.486,0.062-0.974,0.219-1.359,0.53
                C9.764,8.67,9.465,9.013,9.229,9.393c-0.239,0.373-0.368,0.8-0.463,1.229C8.757,9.988,9.025,9.377,9.394,8.871
                C9.719,8.441,10.106,8.036,10.606,7.814z"></path>
            </g>
            
            <g id="_x23_ffffffff">
              <path fill="#FFFFFF" d="M11.736,8.825c0.333-0.106,0.706-0.026,0.982,0.181c0.388,0.286,0.619,0.737,0.733,1.197
                c0.155,0.645,0.104,1.347-0.181,1.95c-0.183,0.378-0.481,0.729-0.89,0.866c-0.34,0.116-0.729,0.035-1.011-0.183
                c-0.404-0.303-0.635-0.783-0.741-1.267c-0.135-0.641-0.073-1.333,0.222-1.921C11.038,9.284,11.336,8.95,11.736,8.825 M11.954,9.56
                c-0.255,0.089-0.444,0.304-0.565,0.539c-0.197,0.388-0.238,0.845-0.153,1.268c0.064,0.305,0.203,0.605,0.44,0.813
                c0.171,0.152,0.411,0.236,0.64,0.19c0.267-0.049,0.479-0.248,0.616-0.473c0.234-0.391,0.292-0.871,0.213-1.315
                c-0.064-0.342-0.22-0.685-0.501-0.901C12.452,9.531,12.185,9.477,11.954,9.56z"></path>
              <path fill="#FFFFFF" d="M19.73,8.822c0.322-0.099,0.684-0.024,0.953,0.172c0.381,0.272,0.614,0.705,0.733,1.149
                c0.172,0.646,0.131,1.354-0.144,1.966c-0.174,0.382-0.463,0.74-0.864,0.893c-0.339,0.133-0.732,0.068-1.023-0.142
                c-0.401-0.284-0.643-0.748-0.758-1.217c-0.155-0.657-0.103-1.374,0.199-1.983C19.016,9.288,19.32,8.944,19.73,8.822 M19.654,9.557
                c-0.236,0.08-0.418,0.269-0.539,0.48c-0.197,0.348-0.26,0.764-0.213,1.158c0.039,0.339,0.166,0.678,0.406,0.926
                c0.17,0.177,0.418,0.29,0.666,0.253c0.282-0.037,0.512-0.246,0.653-0.483c0.229-0.386,0.288-0.856,0.215-1.294
                c-0.062-0.347-0.218-0.695-0.502-0.915C20.15,9.533,19.885,9.477,19.654,9.557z"></path>
              <path fill="#FFFFFF" d="M11.612,10.066c0.164-0.113,0.415,0.002,0.435,0.2c0.04,0.206-0.191,0.391-0.384,0.308
                C11.449,10.504,11.418,10.178,11.612,10.066z"></path>
              <path fill="#FFFFFF" d="M19.482,10.069c0.172-0.073,0.379,0.091,0.343,0.275c-0.019,0.186-0.261,0.286-0.405,0.168
                C19.26,10.404,19.3,10.128,19.482,10.069z"></path>
            </g>
            
            
        </svg>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
       !function(a){function b(b,d){function e(){if(w){$canvas=a('<canvas class="pg-canvas"></canvas>'),v.prepend($canvas),p=$canvas[0],q=p.getContext("2d"),f();
       for(var b=Math.round(p.width*p.height/d.density),c=0;b>c;c++){var e=new l;e.setStackPos(c),x.push(e)}a(window).on("resize",function(){h()}),a(document).on("mousemove",function(a){y=a.pageX,z=a.pageY}),
       B&&!A&&window.addEventListener("deviceorientation",function(){D=Math.min(Math.max(-event.beta,-30),30),C=Math.min(Math.max(-event.gamma,-30),30)},!0),g(),o("onInit")}}function f(){p.width=v.width(),
       p.height=v.height(),q.fillStyle=d.dotColor,q.strokeStyle=d.lineColor,q.lineWidth=d.lineWidth}function g(){if(w){s=a(window).width(),t=a(window).height(),q.clearRect(0,0,p.width,p.height);
       for(var b=0;b<x.length;b++)x[b].updatePosition();for(var b=0;b<x.length;b++)x[b].draw();E||(r=requestAnimationFrame(g))}}function h(){for(f(),i=x.length-1;i>=0;i--)
       (x[i].position.x>v.width()||x[i].position.y>v.height())&&x.splice(i,1);var a=Math.round(p.width*p.height/d.density);if(a>x.length)for(;a>x.length;){var b=new l;x.push(b)}else a<x.length&&x.splice(a);
       for(i=x.length-1;i>=0;i--)x[i].setStackPos(i)}function j(){E=!0}function k(){E=!1,g()}function l(){switch(this.stackPos,this.active=!0,this.layer=Math.ceil(3*Math.random()),this.parallaxOffsetX=0,
       this.parallaxOffsetY=0,this.position={x:Math.ceil(Math.random()*p.width),y:Math.ceil(Math.random()*p.height)},this.speed={},d.directionX)
       {case"left":this.speed.x=+(-d.maxSpeedX+Math.random()*d.maxSpeedX-d.minSpeedX).toFixed(2);break;case"right":this.speed.x=+(Math.random()*d.maxSpeedX+d.minSpeedX).toFixed(2);break;
       default:this.speed.x=+(-d.maxSpeedX/2+Math.random()*d.maxSpeedX).toFixed(2),this.speed.x+=this.speed.x>0?d.minSpeedX:-d.minSpeedX}switch(d.directionY){case"up":
       this.speed.y=+(-d.maxSpeedY+Math.random()*d.maxSpeedY-d.minSpeedY).toFixed(2);break;case"down":this.speed.y=+(Math.random()*d.maxSpeedY+d.minSpeedY).toFixed(2);break;default:
       this.speed.y=+(-d.maxSpeedY/2+Math.random()*d.maxSpeedY).toFixed(2),this.speed.x+=this.speed.y>0?d.minSpeedY:-d.minSpeedY}}function m(a,b){return b?void(d[a]=b):d[a]}function n()
       {v.find(".pg-canvas").remove(),o("onDestroy"),v.removeData("plugin_"+c)}function o(a){void 0!==d[a]&&d[a].call(u)}var p,q,r,s,t,u=b,v=a(b),
       w=!!document.createElement("canvas").getContext,x=[],y=0,z=0,A=!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),B=!!window.DeviceOrientationEvent,
       C=0,D=0,E=!1;return d=a.extend({},a.fn[c].defaults,d),l.prototype.draw=function(){q.beginPath(),q.arc(this.position.x+this.parallaxOffsetX,
       this.position.y+this.parallaxOffsetY,d.particleRadius/2,0,2*Math.PI,!0),q.closePath(),q.fill(),q.beginPath();for(var a=x.length-1;a>this.stackPos;a--){var b=x[a],c=this.position.x-b.position.x,
       e=this.position.y-b.position.y,f=Math.sqrt(c*c+e*e).toFixed(3);f<d.proximity&&(q.moveTo(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY),
       d.curvedLines?q.quadraticCurveTo(Math.max(b.position.x,b.position.x),Math.min(b.position.y,b.position.y),b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY):
       q.lineTo(b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY))}q.stroke(),q.closePath()},l.prototype.updatePosition=function(){if(d.parallax){if(B&&!A){var a=(s-0)/60;pointerX=(C- -30)*a+0;
       var b=(t-0)/60;pointerY=(D- -30)*b+0}else pointerX=y,pointerY=z;this.parallaxTargX=(pointerX-s/2)/(d.parallaxMultiplier*this.layer),this.parallaxOffsetX+=(this.parallaxTargX-this.parallaxOffsetX)/10,
       this.parallaxTargY=(pointerY-t/2)/(d.parallaxMultiplier*this.layer),this.parallaxOffsetY+=(this.parallaxTargY-this.parallaxOffsetY)/10}switch(d.directionX){case"left":
       this.position.x+this.speed.x+this.parallaxOffsetX<0&&(this.position.x=v.width()-this.parallaxOffsetX);break;case"right":this.position.x+this.speed.x+this.parallaxOffsetX>v.width()&&
       (this.position.x=0-this.parallaxOffsetX);break;default:(this.position.x+this.speed.x+this.parallaxOffsetX>v.width()||this.position.x+this.speed.x+this.parallaxOffsetX<0)&&(this.speed.x=-this.speed.x)}
       switch(d.directionY){case"up":this.position.y+this.speed.y+this.parallaxOffsetY<0&&(this.position.y=v.height()-this.parallaxOffsetY);break;case"down":
       this.position.y+this.speed.y+this.parallaxOffsetY>v.height()&&(this.position.y=0-this.parallaxOffsetY);break;default:(this.position.y+this.speed.y+this.parallaxOffsetY>v.height()||
       this.position.y+this.speed.y+this.parallaxOffsetY<0)&&(this.speed.y=-this.speed.y)}this.position.x+=this.speed.x,this.position.y+=this.speed.y},l.prototype.setStackPos=function(a){this.stackPos=a}
       ,e(),{option:m,destroy:n,start:k,pause:j}}var c="particleground";a.fn[c]=function(d){if("string"==typeof arguments[0]){var e,f=arguments[0],g=Array.prototype.slice.call(arguments,1);
       return this.each(function(){a.data(this,"plugin_"+c)&&"function"==typeof a.data(this,"plugin_"+c)[f]&&(e=a.data(this,"plugin_"+c)[f].apply(this,g))}),void 0!==e?e:
       this}return"object"!=typeof d&&d?void 0:this.each(function(){a.data(this,"plugin_"+c)||a.data(this,"plugin_"+c,new b(this,d))})},a.fn[c].defaults={minSpeedX:.1,maxSpeedX:.7,minSpeedY:.1,maxSpeedY:.7,
       directionX:"center",directionY:"center",density:1e4,dotColor:"#666666",lineColor:"#666666",particleRadius:7,lineWidth:1,curvedLines:!1,proximity:100,parallax:!0,parallaxMultiplier:5,onInit:function(){},
       onDestroy:function(){}}}(jQuery),
   
       function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"]
       ,window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||
       (window.requestAnimationFrame=function(b){var c=(new Date).getTime(),d=Math.max(0,16-(c-a)),e=window.setTimeout(function(){b(c+d)},d);return a=c+d,e}),window.cancelAnimationFrame||
       (window.cancelAnimationFrame=function(a){clearTimeout(a)})}();
       
       $(function(){
           $('#particles').particleground({
               minSpeedX: 0.4,
               maxSpeedX: 1.2,
               minSpeedY: 0.4,
               maxSpeedY: 1.2,
               directionX: 'center', // 'center', 'left' or 'right'. 'center' = dots bounce off edges
               directionY: 'center', // 'center', 'up' or 'down'. 'center' = dots bounce off edges
               density: 6000, // How many particles will be generated: one particle every n pixels
               dotColor: '#CF1F46', // noktaların rengi.
               lineColor: '#D6D6D6', // çizgilerin rengi.
               particleRadius: 5, // Dot size
               lineWidth: 1,
               curvedLines: true,
               proximity: 120, // How close two dots need to be before they join
               parallax: false
           });
          });
          (function(){
        'use strict';
        window.addEventListener('load',function(){
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms,function(form){
                form.addEventListener('submit',function(event){
                    if(form.checkValidity()===false)
                    {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                },false)
            });
        },false);
    })();
    </script>

</body>
</html>