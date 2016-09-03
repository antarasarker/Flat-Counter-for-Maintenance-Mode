<!DOCTYPE html>
<html>
    <head>
        
        <title>Maintenance Mode</title>
        <link rel="stylesheet" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        
    </head>
    
    <body>
        
        <?php
        $given_date = date_create("2016-09-30 20:02:08");
        $current_date = date_create("2016-08-26 11:34:44");
        $diff = date_diff($given_date,$current_date);
        
        $main_text = "coming soon...";
        ?>
        
        
        <div class="container">
            <div class="counter">
            
                <h1 id="clock"></h1>
                
                <div class="comgsoon">
                    <h1> <?php echo $main_text; ?> </h1>
                </div>

                <div class="box-wrapper">
                    <div class="box" id="box-1">
                        <div class="cross-line">
                            <div class="line">   
                            </div>   
                        </div>
                        <h1 id="days"><?php echo $diff->format("%d"); ?></h1>
                    </div>
                    <div class="box-text">
                        <p>days</p>
                    </div>
                </div>    


                <div class="box-wrapper">
                    <div class="box" id="box-2">
                        <div class="cross-line">
                            <div class="line">   
                            </div>   
                        </div>
                        <h1 id="hours"><?php echo $diff->format("%h"); ?></h1>
                    </div>
                    <div class="box-text" id="text-hours" >
                            <p>hours</p>
                        </div>
                </div>


                <div class="box-wrapper">
                    <div class="box" id="box-3">
                        <div class="cross-line">
                            <div class="line">   
                            </div>   
                        </div>
                        <h1 id="mins"><?php echo $diff->format("%i"); ?></h1>
                    </div>
                    <div class="box-text" id="text-minutes">
                        <p>minutes</p>
                    </div>
                </div> 


                <div class="box-wrapper">
                    <div class="box" id="box-4">
                        <div class="cross-line">
                            <div class="line">   
                            </div>   
                        </div>
                        <h1 id="sec"><?php echo $diff->format("%s"); ?> </h1>
                    </div>
                    <div class="box-text" id="box-text-4">
                        <p>second</p>
                    </div>
                </div>
            
            </div>    
        </div>
        <script src="script.js"></script>
    </body>
</html>