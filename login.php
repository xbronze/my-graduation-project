<!DOCTYPE html>
<html lang="zh_CN">
    <head>
	      <meta charset="utf-8">
	      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	      <meta http-equiv="X-UA-Compatible" content="IE=edge">
	      <title>Log in</title>
	      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/login.css"
    </head>

    <body>
        <div class="login-page">
	          <form class="form-horizontal" action="logincheck.php" method="post">
          	    <!--
          	    <div class="form-group">
          		  <label>登录身份</label>
          		  <select class="form-control">
          		  <option>游客</option>
          		  <option>管理员</option>
          		  </select>
          	    </div>
          	    -->
    	          <div class="form-group">
    		            <label for="exampleInputEmail1">登录邮箱</label>
    		            <input type="email" name="email" class="form-control" id="useremail" placeholder="Email">
    	          </div>
    	          <div class="form-group">
    		            <label for="exampleInputPassword1">登录密码</label>
    		            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Password">
    	          </div>
                <div class="form-group">
                    <div class="login-button">
                        <input type="submit" name="submit" class="btn btn-success" style="width: 150px;" value="Log in">
                    </div>
                    <div class="login-button">
    		                <button id="gotohomepage" type="button" class="btn btn-success">Back HomePage</button>
    		            </div>
                </div>
                <!--
    	          <div class="form-group">
    		            <div class="login-button">
    		                <button id="loginbutton" type="button" class="btn btn-success" value="login">Log in</button>
    		            </div>
    		            <div class="login-button">
    		                <button id="gotohomepage" type="button" class="btn btn-success">Back HomePage</button>
    		            </div>

    	          </div>

          		  <div class="goto-register">
          			    <a href="register.html"><p class="text-primary">No account? Please click me to register...</p></a>
          		  </div>

    	          <p id="tishi"></p>
                -->
	          </form>
	      </div>


        <script src="bootstrap/js/jquery-3.1.1.min.js"></script>

        <script type="text/javascript">
            /*
            $("#loginbutton").click(function(){
                var useremail = $("#useremail").val();
                var userpassword = $("#userpassword").val();
                if( useremail == "zihui_xu@126.com" && userpassword == "2") {
                    localStorage.setItem("username", useremail);
                    localStorage.setItem("password", userpassword);
                    window.location.href="all-backstage-page/homepage-slidephoto-recommend.html";
                } else {
                    $("#tishi").text("密码错误！");
                    $("#userpassword").val("");
                };
            });
            */
            $("#gotohomepage").click(function(){
                window.location.href="index.html";
            });
        </script>

	</body>
<html>
