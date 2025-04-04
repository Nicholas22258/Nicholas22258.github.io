<!DOCTYPE html>

<html dir = "ltr">
    <head>
        <meta charset="UTF-8">
        <title>Your Profile</title>
        <style>
            main{
                flex-grow: 1;
            }
            
            body{
                display: flex;
                /*flex-direction: column;*/
                min-height: 100vh;
            }

            header {
              min-height: 1.3229cm;
              background: #f7c743;
              display: flex;
              height: 130px;
            }

            #logo{
                width: 128px;
                height: 128px;
                border-radius: 50%;
            /*    position: absolute;*/
            }

            #buy_sell{
                padding-left: 2.9cm;
                font-size: 20px;
                /*border: 2px green solid;*/
                line-height: 100px;
                text-align: center;
            }

            #buy{
            /*    padding: 
                position: absolute;*/
                margin: 0;
                top: 50%;
                /*padding-left: 4.5cm;*/
                /*vertical-align: middle;*/
            }

            #sell{
                /*position: absolute;*/
                margin: 0;
                top: 50%;
                padding-left: 3.45cm;
                /*vertical-align: middle;*/
            }

            #searchbox{
                padding-left: 2.9cm;
                font-size: 20px;
                /*border: 2px green solid;*/
                line-height: 100px;
                text-align: center;
            }

            #search{
                width: 8.66cm;
                height: 0.60cm;
                font-size: 12px;
                border-radius: 10px;
            }

            #btnSearch{
                height: 0.70cm;
                width: 3cm;
            }

            #account{
                padding-left: 2.9cm;
                font-size: 20px;
                /*border: 2px green solid;*/
                line-height: 100px;
                text-align: center;
            }
        </style>
        
        <link rel = "stylesheet" href = "Profile.css">
    </head>
    <body>
        <header>
            <img src = "../images/Logo.png" alt = "Nick C2C Logo" id = "logo">
            <div id = "buy_sell">
                <label id = "buy">Buy</label>
                <label id = "sell">Sell</label>
            </div>
            <div id = "searchbox">
                <form action = "" method = "GET" target = "_self">
                    <input type = "text" id = "search" name = "search">
                    <input type = "submit" id = "btnSearch" value = "Search">
                </form>
            </div>
            <div id = "account">
                <label id = "user">Log In</label>
            </div>
            
        </header>
        
        <main>
            <div id = "leftBlock">
                <div id = "profilePic">
                    <img src = "" alt = "Your Profile Picture" id = "profilePicture">
                    <button id = "changePicture" name = "changePicture">Change Picture</button>
                </div><br><br>

                <div id = "personalInfo">
                    <form action = "" method = "post">
                        <label for = "username">Username: </label><br>
                        <input type = "text" id = "username" name = "username" placeholder = "" class = "inputBoxes"><br><br>
                        <label for = "password">Password </label><br>
                        <button id = "password" name = "password">Change Password</button><br><br>
                        <label for = "email">Email: </label><br>
                        <input type = "email" id = "email" name = "email" placeholder = ""  class = "inputBoxes"><br><br>
                        <button id = "save" name = "save">Save</button>
                        <button id = "deleteAccount" name = "deleteAccount">Delete Account</button>                    
                    </form>
                </div>
            </div>
            
            <div id = "changePassword" hidden = "true">
                <label for = "oldPassword"> Old Password</label><br>
                <input type = "password" id = "oldPassword" name = "oldPassword" placeholder = ""  class = "inputBoxes"><br><br>
                <label for = "newPassword"> New Password</label><br>
                <input type = "password" id = "newPassword" name = "newPassword" placeholder = ""  class = "inputBoxes"><br><br>
                <input type = "submit" id = "submit" name = "submit" value = "Change Password">
            </div>
            
            <div id = "yourItems">
                <label id = "itemsLabel">Your Items:</label>
            </div>
        </main>
        
        <?php require('../Footer/Footer.php');?>

    </body>
</html>