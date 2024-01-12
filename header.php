<html>
<head>
    <title>CRUD</title>
    <style>
        body{
            margin:0;
        }

        .tabelku, .tabelku th, .tabelku td{
            border:1px solid black;
            border-collapse:collapse;
        }

        #kontainer{
            height:100vh;
            display:grid;
            grid-template-columns:20% auto;
            grid-template-rows:48px auto 48px;
            grid-template-areas:
            "header header"
            "sidebar isi"
            "footer footer"
        }

        #header{
            grid-area:header;
            background-color:black;
        }

        #sidebar{
            grid-area:sidebar;
            background-color:green;
        }

        #isi{
            grid-area:isi;
        }

        #footer{
            grid-area:footer;
            background-color:black;
        }
        
        #sidebar ul{
            margin:0;
            padding:4px;
            list-style-type:none;
        }

        #sidebar a{
            color:white;
            text-decoration:none;
        }
    </style>
</head>
<body>    
    <div id="kontainer">
        <section id="header"></section>
        <section id="sidebar">
            <ul>
                <li><a href="../barang">Barang</a></li>
                <li><a href="../users">User</a></li>
                <li><a href="../login.php">Log in</a></li>
                <li><a href="../logout.php">Log out</a></li>
            </ul>
            <?php
                session_start();
                if(isset($_SESSION["login"])==true)echo("sudah login");
                else header("location:../login.php");
            ?>
        </section>

        