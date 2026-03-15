<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>X_Location - INSERT A ROUTE</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src='main.js'></script>
</head>
<body>
        <form>

            <div class="container_insert_aRote">
                <div class="box_1_insert_aRote card">

                    <div class="box_2_insert_aRote">
                        <button class="btn1_Insert_aRote" type="submit" formaction="main_menu.php">
                            <i class="fas fa-arrow-right" style="transform: scaleX(-1);"></i>
                        </button>
                    </div>

                    <h1>
                        Insert a Route
                    </h1>

                    <label>Name´s Route</label><br>
                    <input type="text">
                    
                    <br>
                    <br>

                    <span>Origin:</span>
                    <ul>
                        <li>
                            <label>Name</label>
                            <br>
                            <input type="text">
                        </li>

                        <li>
                            <label>Address</label>
                                <br>
                            <input type="text">
                        </li>
                    </ul>


                    <span>Destiny:</span>
                    <ul>
                        <li><label>Name</label>
                            <br>
                            <input type="text">
                        </li>

                        <li>
                            <label>Address</label>
                                <br>
                            <input type="text">
                        </li>
                    </ul>

                    <div class="options_insert_aRote">
                        <label>Car</label>
                        <input type="radio" class="inp_insert_aRote" name="optionTo_goToDestiny" value="car">

                        <label>Bus</label>
                        <input type="radio" class="inp_insert_aRote" name="optionTo_goToDestiny" value="bus">
                    </div>
                    <div class="options_insert_aRote">
                        <label>Walking</label>
                        <input type="radio" class="inp_insert_aRote" name="optionTo_goToDestiny" value="walking">

                        <label>Bicycle</label>
                        <input type="radio" class="inp_insert_aRote" name="optionTo_goToDestiny" value="bicycle">
                    </div>
                    <div class="btn1_Insert_aRote">
                        <button type="submit" formaction="insertRote_Successfull.php">Insert</button>
                    </div>
                    

                    
                </div>
                
            </div>
        </form>
</body>
</html>