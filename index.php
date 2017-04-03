<!DOCTYPE>
<html>
    <head>
        <?php include 'templates/header.php'; ?>
    </head>
        
    <body>
        <div id="leftPanel">
            <div id="faq">
                <h3 style="font-weight: bold;"><center>FAQs</center></h3>
                <a class="faqlinks" href="php/faq.php">What shoud I do if I need to talk to someone?</a>
                <a class="faqlinks" href="php/faq.php">What shoud I do if I need help?</a>
                <a class="faqlinks" href="php/faq.php">What shoud I do if my friend needs help?</a>
                <a class="faqlinks" href="php/faq.php">What shoud I do for closing this coming break?</a>
                <a class="faqlinks" href="php/faq.php">What shoud I do if...?</a>
            </div>
        </div>
        
        <div id="mainContent">
            <h1 style="text-align: center;">Where is my RA?</h1>
            <?php
                include_once 'php/status.php';
                $status = array();
                
                $status['location'] = "I am currently:";
                
                //Change to switch case
                if($option == 0)
                {
                    $status['location'] = "<br>UNAVAILABLE / OFF CAMPUS";
                    $status['color'] = $red;
                } else if( $option == 1) {
                    $status['location'] = "<br>IN ROOM 214";
                    $status['color'] = $green;
                } else if($option == 2) {
                    $status['location'] = "<br>IN PUTNAM SCIENCE CENTER";
                    $status['color'] = $yellow;
                }
            
            ?>
            <div id="location" style="background-color: <?php echo $status['color'];?>;">
                <p><br>I am currently:</p>
                <p><?php echo $status['location'];?></p>
            </div>
            
        </div>
        <?php include 'templates/footer.php'; ?>
    </body>
</html>