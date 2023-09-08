<html !DOCTYPE>
    <head>
        <title>Hola</title>
        <style>
            body{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .container{
                display: flex;
                
                padding: 30px;
                background-color: aqua;
                width: 800px;
                height: 800px;
                overflow: hidden;
            }

            .cont{
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .p1{
                background: red;
                width: 400px;
                height: auto;
                margin: 10px 20px;
            }

            .p2{
                background: rgb(0, 2, 128);
                width: 400px;
                height: 50%;
                margin: 10px 20px;
            }

            .P3{
                background: yellow;
                width: 400px;
                height: 50%;
                margin: 10px 20px;
            }
        </style>
    </head>
    <body>
        <div class = "container">
            <div class = "p1">
            </div>
            <div class = "cont">
            <div class = "p2">
            </div>
            <div class="p3">
            </div>
            </div>
        </div>
    </body>
    </html>