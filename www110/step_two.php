<?php include 'header.php';



if (!empty($_POST['name']) && !empty($_POST['creature_type']))
{
 
    $name = strip_tags($_POST['name']);
      
    $name = ucwords(strtolower($name));
    
    $option = $_POST['creature_type'];
    
         
    echo  'Thanks ' . $name . '.<br>';
    echo 'Today is '. date("l F jS,  Y") . ' and it\'s been a busy day. But don\'t worry!<br>';
    
    if ($option=="alien"){
        
        $name = $name.'-zilla';
        
        echo 'Greetings fellow ' .$option . '! Are you ready to transform into one of us? Just give us a few moments, and soon you\'ll be travelling in your very own spaceship!<br>';
        
        $alien_description = array($name. " is from the planet of Gobbledegook. He has travelled millions of light years to get to Earth.", $name." is a friendly alien who would like to be friends with a human!", $name. " has come to Earth to learn more about the food that humans eat.", $name. " has been trying to contact humans for years. He can't wait to bring all his friends to Earth.");

        $description = array_rand($alien_description);
       }
    
    else{
          
        $name = $name.'-bot';
    
        echo 'I hope you\'re ready to turn into a ' .$option. '! Just give us a few moments, and you\'ll soon be able to take over the world with your powers!<br>'; 
        
        $robot_description = array($name. " can fly and talk to people!", "This is one of our best robots. " . $name . " is so smart that he can fool humans into thinking he's one of them.", $name." is so cool! She can help you out with your homework!", $name. " can be your best friend! He can play games with you when you're feeling bored.");

        $description = array_rand($robot_description);
        
    }
    
    echo ' When you are ready to see the results, '?> <button type="button" class="btn btn-primary" id="results">click here</button>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div id="box">

                        <?php

                        if ($option=="alien")
                        {
                        echo "<img src='images/alien.png' alt='alien'><br>";

                        echo $alien_description[$description]. '<br>';

                        } 
                    else{
                        echo "<img src='images/robot.png' alt='robot'><br>";

                        echo $robot_description[$description]. '<br>';
                        }

                    ?>
                </div>
            </div>
        </div>
    </div>
    
  
<?php
}
else{
    header('Location: step_one.php?error=true');
    }
    
?>
</div>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>    
<script>
   
       
       var box = $('#box');
      
        $('#results').click(function(){
        
        box.slideDown('slow')
       
       
   });
   

</script>


