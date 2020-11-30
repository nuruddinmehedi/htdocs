<!DOCTYPE html>
<html lang="">

    <head>
        <style>
            *{
                margin: 0px;
                padding: 0px;
            }
            .head{
                width: 960px;
                height: 100px;
                margin: 0px auto;
                background-color:#1975C5 

            }
            .head h1 {

                text-transform: capitalize;
                font-size: 30px;
                text-align: center;
                color: #ffff;
                padding: 40px 0px;
            }
            .footer{
                width: 960px;
                height: 70px;
                margin: 0px auto;
                background-color:#1975C5 
            }
            .footer p {
                text-transform: capitalize;
                font-weight: bold;
                text-align: center;
                font-size: 20px;
                padding-top: 20px;
                 color: #ffff;

            }
            .body{

                width: 960px;
                height: 634px;
                margin: 0px auto;

            }
            .time p { text-align: right;
                font-size: 20px;
                padding: 7px;
               
            

            }
            .time{
               
                border-right: 40px solid #1975C5;
                border-left: 40px solid #1975C5;
                height: 100%;
                font-size: 20px;


            }
        </style>
    </head>


    <body>
        <header class="head"><h1>our new project</h1></header>
        <section class="body"> <div class="time"><hr><p><?php 
         date_default_timezone_set("Asia/dhaka");    echo "Time: ".date("h:i:s:a");?></p><hr>
         
         
         
         