<html>
    <head>
        <style>
            .container{
                width:400px;
                background-color:aquamarine;

            }
            .popup
            {
                width:400px;
                background-color:lightblue;
                border-radius: 6px;
                position: absolute;
                top:50%;
                left:50%;
                transform: translate(-50%, -50%);
                padding:0 30px 30px;
                color:#333;
                text-align: center;

            }
            .popup img{
                width: 100px;
                margin-top: -50px;
                border-radius: 50%;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }
            .popup h2{
                font-size: 38px;
                font-style: italic;
                
                font-weight: 500;
                margin: 30px 0 10px;

            }
            .popup p{
                font-size: 30px;
            }
            
            .popup button{
                width:100%;
                margin-top: 50px;
                padding: 10px 0;
                background: yellowgreen;
                color:#fff;
                border: 0;
                outline: none;
                font-size: 18px;
                border-radius: 4px;
                cursor: pointer;
                box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
            }
            
            .popup img{
                width: 100px;
                margin-top: -50px;
                border-radius: 50%;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }
            .popup h2{
                font-size: 38px;
                font-weight: 500;
                margin: 30px 0 10px;

            }
            .open-popup{
                visibility: visible;
                top:50;
                transform: translate(-50%, -50%) scale(1);
            }
            .popup button{
                width:100%;
                margin-top: 50px;
                padding: 10px 0;
                background:lightblue;
                color:#fff;
                border: 0;
                outline: none;
                font-size: 18px;
                border-radius: 4px;
                cursor: pointer;
                box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
            }
            .logo{
    
    margin-top: 30px;
    display: block;
    margin-left: 500px;
    margin-right: auto;
    width: 50%;
  }
  .registerbtn {  
  background-color: grey;  
  color: white; 
  font-size: 22px;
  border-radius: 30px; 
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}       


        </style>
    </head>
    <body>
        <div class="logo">
            <a href="index.php"><img src="assets/images/logo.png" alt="Mega business"></a>
        </div>
        
        <div class="popup">
            <img src="assets/images/tick.png" alt="">
            <h2>Thank You!</h2>
            <p><b>Yours details has been successfully submitted. Thanks</b></p>
            <button type="OK" class="OKbtn"><a href="trainingprogram.php">OK</a></button>
        </div>
        
        </div>
    </body>
</html>