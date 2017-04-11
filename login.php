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
	          <form class="form-horizontal">
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
    		            <input type="email" class="form-control" id="useremail" placeholder="Email">
    	          </div>
    	          <div class="form-group">
    		            <label for="exampleInputPassword1">登录密码</label>
    		            <input type="password" class="form-control" id="userpassword" placeholder="Password">
    	          </div>
    	          <div class="form-group">
    		            <div class="login-button">
    		                <button id="loginbutton" type="button" class="btn btn-success">Log in</button>
    		            </div>
    		            <div class="login-button">
    		                <button id="gotohomepage" type="button" class="btn btn-success">Back HomePage</button>
    		            </div>

    	          </div>
          	    <!--
          		  <div class="goto-register">
          			    <a href="register.html"><p class="text-primary">No account? Please click me to register...</p></a>
          		  </div>
          	    -->
    	          <p id="tishi"></p>
	          </form>
	      </div>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "xuzihui";
            $graduation_data  = "graduation_data";

            //连接数据库
            $conn = new mysqli($servername, $username, $password);

            if($conn) {
                //echo 'ok';
                //mysql_query("set names 'utf-8'");
                mysqli_select_db($conn, "graduation_data");  //打开数据库

                $sql = "select * from userinfo";  //SQL查询

                $result = mysqli_query($conn, $sql);  //查询

                if(!$result){
                    printf("Error:%s\n", mysqli_error($conn));
                    exit();
                }

                while($row = mysqli_fetch_array($result))
                {
                    echo $row['id']."</br>";
                    echo $row['username']."</br>";
                    echo $row['password']."</br>";
                }

            } else {
                echo '数据库连接失败';
            }
        ?>

        <script src="bootstrap/js/jquery-3.1.1.min.js"></script>

        <script type="text/javascript">
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

            $("#gotohomepage").click(function(){
                window.location.href="index.html";
            });
        </script>

	</body>
<html>
