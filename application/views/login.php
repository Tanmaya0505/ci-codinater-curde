<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
  color: #fff;
  background: #63738a;
  font-family: 'Roboto', sans-serif;
}
.form-control {
  height: 40px;
  box-shadow: none;
  color: #969fa4;
}
.form-control:focus {
  border-color: #5cb85c;
}
.form-control, .btn {        
  border-radius: 3px;
}
.signup-form {
  width: 450px;
  margin: 0 auto;
  padding: 30px 0;
    font-size: 15px;
}
.signup-form h2 {
  color: #636363;
  margin: 0 0 15px;
  position: relative;
  text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
  content: "";
  height: 2px;
  width: 30%;
  background: #d4d4d4;
  position: absolute;
  top: 50%;
  z-index: 2;
} 
.signup-form h2:before {
  left: 0;
}
.signup-form h2:after {
  right: 0;
}
.signup-form .hint-text {
  color: #999;
  margin-bottom: 30px;
  text-align: center;
}
.signup-form form {
  color: #999;
  border-radius: 3px;
  margin-bottom: 15px;
  background: #f2f3f7;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  padding: 30px;
}
.signup-form .form-group {
  margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
  margin-top: 3px;
}
.signup-form .btn {        
  font-size: 16px;
  font-weight: bold;    
  min-width: 140px;
  outline: none !important;
}
.signup-form .row div:first-child {
  padding-right: 10px;
}
.signup-form .row div:last-child {
  padding-left: 10px;
}     
.signup-form a {
  color: #fff;
  text-decoration: underline;
}
.signup-form a:hover {
  text-decoration: none;
}
.signup-form form a {
  color: #5cb85c;
  text-decoration: none;
} 
.signup-form form a:hover {
  text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
    <!-- <form  method="post" id="form_id" action="Registation"> -->
        <?php if ($this->session->flashdata('category_error')) { ?>
            <div class="alert alert-danger"> <?= $this->session->flashdata('category_error') ?> </div>
        <?php } ?>
        <?php echo form_open('loginsubmit');?>
    <h2>Login</h2>
    <p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
          <input type="email" class="form-control" onkeypress="emailFunction()" name="email" id="email" placeholder="Email" >
          <label id="erroremail"></label>
        </div>
        
    <div class="form-group">
            <input type="password" class="form-control"  name="password" id="password" placeholder="Password">
            <label id="errorpass"></label>
        </div>       
        <div class="form-group">
      <label class="form-check-label"><input type="checkbox"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
  <div class="text-center">Already have an account? <a href="#">Sign in</a></div>
</div>
<script type="text/javascript">
    function emailFunction(){
    var error = 0;
   // alert("aaaaaaaa");
     var email =document.getElementById('email').value;
    //alert(email);
     var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     var inputPassword =document.getElementById('pasdobsword').value;
    // alert(email_filter);
     if(email.length=="0"){
     error += 1;
   // alert(22222222222222);
        document.getElementById('erroremail').innerHTML="Enter Email";
        document.getElementById('erroremail').style.color="red";
        //return false;
     }
     if(!email_filter.test(email)){
        error += 1;
        document.getElementById('erroremail').innerHTML="Enter Email";
        document.getElementById('erroremail').style.color="red";
      //alert('Enter a valid email address');
      }
      if(inputPassword.length=="0"){
     error += 1;
    //alert(22222222222222);
        document.getElementById('errorpass').innerHTML="Enter password";
        document.getElementById('errorpass').style.color="red";
        //return false;
     } 
     if(confPassword.length=="0"){
     error += 1;
    //alert(22222222222222);
        document.getElementById('errorconpass').innerHTML="Enter password";
        document.getElementById('errorconpass').style.color="red";
        //return false;
     } 
     if(inputPassword !=confPassword){
     error += 1;
    //alert(22222222222222);
        document.getElementById('errorconpass').innerHTML="Password NOt match";
        document.getElementById('errorconpass').style.color="red";
        //return false;
     } 
     if(error >0)
     {
     return false;
     }
      
    }
    function submittheform(){
        document.forms['form_id'].submit();
    }
  </script>
</body>
</html>
