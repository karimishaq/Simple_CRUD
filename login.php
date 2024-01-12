<html>
    <head>
        <title>CRUD</title>
        <style>
            body{
                margin:0px;
            }
            #tengah{
                display:flex;
                justify-content:center;
                align-items:center;
                background-image:url("latar.jpg");
                background-size:100% 100%;
                height:100vh;
            }

            #tengah form{
                border:4px double red;
                width:30%;
                min-height:50%;
                padding:4px;
                background:white;
            }

            #tengah h2{
                font-size:32px;
                margin-top:0px;
            }
        </style>
    </head>
    <body>
        <div id="tengah">
            <form action="aksi_login.php" method="post">
                <h2>Login</h2>
                <label for="">Nama:</label><br>
                <input type="text" name="nama"><br>
                <label for="">Password:</label><br>
                <input type="text" name="password"><br><br>
                <input type="submit" value= "submit">
            </form>
        </div>
    </body>
</html>