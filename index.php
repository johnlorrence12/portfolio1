<html>
    <head>
        <title>Customer record System</title>
        <style>
            body{
                margin: 0 auto;
				font-family:century gothic;
                /* background: linear-gradient(45deg, red, blue); */
                /* background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%); */
background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
            }
            ol,li,a{
                float:left;
				margin-right:10px;
                text-decoration:none;
                list-style-type:none;
                color:white;
				text-transform:uppercase;
				
            }
            .menubar{
                padding:5px;
                background: rgb(35, 33, 33);
                overflow:hidden;
				border-radius:5px;
				
            }
            .addForm{
                background:white;
                padding:10px;
                margin: 0 auto;
                margin-top:10px;
                border-radius:5px;
            }
            input[type='text']{
                width:100%;
                padding:5px;
            }
            input[type='date']{
                width: 100%;
                padding:5px;
            }
            button[type='submit']{
                padding:10px;
                border:none;
                color:white;
                background-color:crimson;
                margin-top:5px;
                border-radius:5px;
                cursor:pointer;
            }
            button[type='submit']:hover{
                background-color:#f00002;
            }
            button[type='reset']{
                padding:10px;
                border:none;
                color:white;
                background-color:blue;
                margin-top:5px;
                border-radius:5px;
                cursor:pointer;
            }
            button[type='reset']:hover{
                background-color:skyblue;
            }
			.container{
				width:1080px;
				margin: 0 auto;
			}
            
        </style>
    </head>
    <body>
        <div class="container">
         <div class="menubar">
            <ol>
                <li><a href="record.php">RECORD</a></li>
                <li><a href="index.php">REGISTER</a></li>
                <li><a href="">SEARCH</a></li>
                <li><a href="">LOGOUT</a></li>
            </ol>
         </div>       
        <div class="addForm">
            <form action="register.php" method="POST" enctype="multipart/form-data">
                <label for="">Customer ID</label><br>
                <input type="text" name="cid"><br>
                <label for="">Customer Name</label><br>
                <input type="text" name="cname"><br>
                <label for="">Customer Street</label><br>
                <input type="text" name="cstreet"><br>
                <label for="">Customer City</label><br>
                <input type="text" name="ccity"><br>
                <label for="">Image</label><br>
                <input type="file" name="cimage"><br>
                <button type="submit" name="submit">Submit</button>
                <button type="reset">Cancel</button>
            </form>
          </div>
        </div>
    </body>
</html>