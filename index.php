<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<title>Login Page </title>

	<style>
		
		*{
        padding:0;
        margin:0;
        outline:0;
        font-family:Verdana,sans-serif;
        }
        @font-face {
        font-family: 'eglantine';
        font-style: normal;
        font-weight: normal;
        src: local('eglantine'), url('./asset/eglantine.woff') format('woff');
		
		}
		
		label {
			width: 100%;
			max-width: 300px;
            background: url(new320.jpg);
            background-size: cover;
            background-repeat: no-repeat;
			text-align: right;
		}

		div {
			margin-top: 1em;
		}
		
		h2 {
           background: linear-gradient(
           90deg,
           rgba(255, 0, 0, 1) 0%,
           rgba(255, 154, 0, 1) 10%,
           rgba(208, 222, 33, 1) 20%,
           rgba(79, 220, 74, 1) 30%,
           rgba(63, 218, 216, 1) 40%,
           rgba(47, 201, 226, 1) 50%,
           rgba(28, 127, 238, 1) 60%,
           rgba(95, 21, 242, 1) 70%, 
           rgba(186, 12, 248, 1) 80%,
           rgba(251, 7, 217, 1) 90%,
           rgba(255, 0, 0, 1) 100%
           );

           letter-spacing:10px;
           font-size:80px;
           color:transparent;
           position:relative;
           width:100%;
           height:100%;
           animation:anioo 2s linear infinite;
           -webkit-background-clip:text;
           font-family:'eglantine';
           }
           @keyframes anioo{
           0%{
           background-position:0 0;
           }

           100%{
           background-position:700px 0;
           }
		
	</style>

</head>
<center>
<body>
 <form action="auth/login.php" method="post">
	<div>
		<h2>Nav Devil Rat Login Panel</h2>
	</div>	
	<div class="Email">
		 
		<input type="text" placeholder="Admin Email" name="email">
	</div>
	<div class="Password">
		
		<input type="password" placeholder="Admin Password" name="password">
	</div>
	<div class="Login-button">
		<input type='submit' value="Login">
	</dir>
		<style>


body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    background: #000;
}
    //Email Text Css 
	
	*{
   	    .Email label
        padding:0;
        margin:0;
        outline:0;
        font-family:Verdana,sans-serif;
        }
        @font-face {
        font-family: 'eglantine';
        font-style: normal;
        font-weight: normal;
        src: local('eglantine'), url('./asset/eglantine.woff') format('woff');
		
		}
		
		.Email label {
		letter-spacing:20px;
        font-size:80px=px;
        color:transparent;
        background: linear-gradient(90deg,
        rgba(255, 0, 0, 1) 0%,
        rgba(255, 154, 0, 1) 10%,
        rgba(208, 222, 33, 1) 20%,
        rgba(79, 220, 74, 1) 30%,
        rgba(63, 218, 216, 1) 40%,
        rgba(47, 201, 226, 1) 50%,
        rgba(28, 127, 238, 1) 60%,
        rgba(95, 21, 242, 1) 70%,
        rgba(186, 12, 248, 1) 80%,
        rgba(251, 7, 217, 1) 90%,
        rgba(255, 0, 0, 1) 100%);

        letter-spacing:10px;
        font-size:40px;
        color:transparent;
        position:relative;
        width:100%;
        height:100%;
        border-radius: 15px;
        animation:anioo 2s linear infinite;
        -webkit-background-clip:text;
        font-family:'eglantine';
        
		}
		
		animation:anioo2 2s linear infinite;
        -webkit-background-clip:text;
        position:absolute;
        margin:auto;
        z-index:-1;
        top:0;
        left:0;
        width:100%;
        text-align:center;
        height:100%;
		
		
		//Email Enter form Css 
		
*{      .Email input
        padding:0;
        margin:0;
        outline:0;
        font-family:Verdana,sans-serif;
        }
        @font-face {
        font-family: 'eglantine';
        font-style: normal;
        font-weight: normal;
        src: local('eglantine'), url('./asset/eglantine.woff') format('woff');
		
		}
		
		.Email input  {
		letter-spacing:20px;
        font-size:80px=px;
        color:transparent;
        background: linear-gradient(90deg,
        rgba(255, 0, 0, 1) 0%,
        rgba(255, 154, 0, 1) 10%,
        rgba(208, 222, 33, 1) 20%,
        rgba(79, 220, 74, 1) 30%,
        rgba(63, 218, 216, 1) 40%,
        rgba(47, 201, 226, 1) 50%,
        rgba(28, 127, 238, 1) 60%,
        rgba(95, 21, 242, 1) 70%,
        rgba(186, 12, 248, 1) 80%,
        rgba(251, 7, 217, 1) 90%,
        rgba(255, 0, 0, 1) 100%);

        letter-spacing:10px;
        font-size:40px;
        border-radius: 15px;
        color:transparent;
        position:relative;
        width:80%;
        height:100%;
        border-radius: 15px;
        animation:anioo 2s linear infinite;
        -webkit-background-clip:text;
		text-align:center;
        font-family:'eglantine';
        
		}
		
		animation:anioo2 2s linear infinite;
        -webkit-background-clip:text;
        position:absolute;
        margin:auto;
        z-index:-1;
        top:0;
        left:0;
        width:100%;
        text-align:center;
        height:100%;

        //Password Text Css Coding 
 *{
		.Password input
        padding:0;
        margin:0;
        outline:0;
        font-family:Verdana,sans-serif;
        }
        @font-face {
        font-family: 'eglantine';
        font-style: normal;
        font-weight: normal;
        src: local('eglantine'), url('./asset/eglantine.woff') format('woff');
		
		}
		
		.Password input  {
		letter-spacing:20px;
        font-size:80px=px;
        color:transparent;
        background: linear-gradient(90deg,
        rgba(255, 0, 0, 1) 0%,
        rgba(255, 154, 0, 1) 10%,
        rgba(208, 222, 33, 1) 20%,
        rgba(79, 220, 74, 1) 30%,
        rgba(63, 218, 216, 1) 40%,
        rgba(47, 201, 226, 1) 50%,
        rgba(28, 127, 238, 1) 60%,
        rgba(95, 21, 242, 1) 70%,
        rgba(186, 12, 248, 1) 80%,
        rgba(251, 7, 217, 1) 90%,
        rgba(255, 0, 0, 1) 100%);

        letter-spacing:10px;
        font-size:40px;
        color:transparent;
        position:relative;
        width:80%;
        height:100%;
        border-radius: 15px;
        animation:anioo 2s linear infinite;
        -webkit-background-clip:text;
		text-align:center;
        font-family:'eglantine';
        
		}
		
		animation:anioo2 2s linear infinite;
        -webkit-background-clip:text;
        position:absolute;
        margin:auto;
        z-index:-1;
        top:0;
        left:0;
        width:100%;
        text-align:center;
        height:100%;
		
		    
	
*{
   	    .Password label
        padding:0;
        margin:0;
        outline:0;
        font-family:Verdana,sans-serif;
        }
        @font-face {
        font-family: 'eglantine';
        font-style: normal;
        font-weight: normal;
        src: local('eglantine'), url('./asset/eglantine.woff') format('woff');
		
		}
		
		.Password label {
		letter-spacing:20px;
        font-size:80px=px;
        color:transparent;
        background: linear-gradient(90deg,
        rgba(255, 0, 0, 1) 0%,
        rgba(255, 154, 0, 1) 10%,
        rgba(208, 222, 33, 1) 20%,
        rgba(79, 220, 74, 1) 30%,
        rgba(63, 218, 216, 1) 40%,
        rgba(47, 201, 226, 1) 50%,
        rgba(28, 127, 238, 1) 60%,
        rgba(95, 21, 242, 1) 70%,
        rgba(186, 12, 248, 1) 80%,
        rgba(251, 7, 217, 1) 90%,
        rgba(255, 0, 0, 1) 100%);

        letter-spacing:10px;
        font-size:40px;
        border-radius: 15px;
        color:transparent;
        position:relative;
        width:100%;
        height:100%;
        border-radius: 15px;
        animation:anioo 2s linear infinite;
        -webkit-background-clip:text;
        font-family:'eglantine';
        
		}
		
		animation:anioo2 2s linear infinite;
        -webkit-background-clip:text;
        position:absolute;
        margin:auto;
        z-index:-1;
        top:0;
        left:0;
        width:100%;
        text-align:center;
        height:100%;
		
		    //Login button Css Coding
	
*{      .Login-button input
        padding:0;
        margin:0;
        outline:0;
        font-family:Verdana,sans-serif;
        }
        @font-face {
        font-family: 'eglantine';
        font-style: normal;
        font-weight: normal;
        src: local('eglantine'), url('./asset/eglantine.woff') format('woff');
		
		}
		
		.Login-button input  {
		
        background: linear-gradient(90deg,
        rgba(255, 0, 0, 1) 0%,
        rgba(255, 154, 0, 1) 10%,
        rgba(208, 222, 33, 1) 20%,
        rgba(79, 220, 74, 1) 30%,
        rgba(63, 218, 216, 1) 40%,
        rgba(47, 201, 226, 1) 50%,
        rgba(28, 127, 238, 1) 60%,
        rgba(95, 21, 242, 1) 70%,
        rgba(186, 12, 248, 1) 80%,
        rgba(251, 7, 217, 1) 90%,
        rgba(255, 0, 0, 1) 100%);

        letter-spacing:10px;
        font-size:40px;
        color:transparent;
        position:relative;
        width:20%;
        height:45%;
        border-radius: 15px;
        animation:anioo 2s linear infinite;
        -webkit-background-clip:text;
        font-family:'eglantine';
        
		}
		
		animation:anioo2 2s linear infinite;
        -webkit-background-clip:text;
        position:absolute;
        margin:auto;
        z-index:-1;
        top:0;
        left:0;
        width:100%;
        text-align:center;
        height:100%;
        
	</style>
	<style>
        img[alt*="www.000webhost.com"], .disclaimer {
        display: none
        }  
</style>
	</div>
	<input type="hidden" name="submitted" value="1">
</form>


</body>
</center>
</html>
