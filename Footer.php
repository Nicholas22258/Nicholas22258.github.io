<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body {
                min-height: 100vh;
                margin: 0;
                display: flex;
                flex-direction: column;
                background: white;
            }
            
            footer {
                min-height: 1.3229cm;
                background: #f7c743;
                display: flex;
            }

            #socialMedia{
                line-height: 100px;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .footerImages{
                height: 50px;
                width: 50px;
                padding-left: 1.25cm;
            }

            #footerLabels{
                padding-left: 2.9cm;
                font-size: 20px;
                /*border: 2px green solid;*/
                line-height: 100px;
                text-align: center;
            }

            #aboutUs{
               padding-left: 2.75cm; 
            }

            #help{
                padding-left: 2.75cm;
            }

            #businessPolicies{
                padding-left: 2.75cm;
            }

            #copyright{
                padding-left: 5.4cm;
            }
        </style>
    </head>
    <body>
    <footer>
            <div id = "socialMedia">
                <img src = "../images/Facebook.png" alt = "Facebook Logo" id = "facebook" class = "footerImages">
                <img src = "../images/LinkedIn.png" alt = "LinkedIn Logo" id = "linkedin" class = "footerImages">
            </div>
            <div id = "footerLabels">
                <label id = "aboutUs">About Us</label>
                <label id = "help">Help</label>
                <label id = "businessPolicies">Business Policies</label>
                <label id = "copyright">Copyright Reserved</label>
            </div>
        </footer>

    </body>
</html>