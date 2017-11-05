<html>
    <head>
        
        
    </head>
    <?php
    
        $speelveld = array (0, 0, 1, 1, 1);

        
        for ($x=0;$x<5;$x++){
        echo "<button onclick=schiet(". $x.") type=button id=schiet'. $x .'> schiet </button>";  
        }
        echo "<br>";

        for ($x=0;$x<5;$x++){
        echo "<button onclick=schiet(". $x.") type=button id=schiet'. $x.'> schiet </button>";  
        }
        echo "<br>";
        
        for ($x=0;$x<5;$x++){
        echo "<button onclick=schiet(". $x.") type=button id=schiet'. $x.'> schiet </button>";  
        }
        echo "<br>";
 
        for ($x=0;$x<5;$x++){
        echo "<button onclick=schiet(". $x.") type=button id=schiet'. $x.'> schiet </button>";  
        }
        echo "<br>";
        
        for ($x=0;$x<5;$x++){
        echo "<button onclick=schiet(". $x.") type=button id=schiet". $x."> schiet </button>";  
        }
        echo "<br>";

                        
        
     ?>   
    
    
        <button onclick="mis()" type=button id="mis">mis</button>
        <button onclick="raak()" type=button id="raak">raak</button>   


        
        <script>
            
        
        function schiet (x){
        document.getElementById('schiet'+x).style.backgroundColor = 'orange';
        }
        
        var mis = function mis (){
        document.getElementById('mis').style.backgroundColor = 'lightblue';
        }
        
        var raak = function raak (){     
        document.getElementById('raak').style.backgroundColor = 'red';
        } 
        
        var schiet = [mis, raak];
        
        
        
        </script>
        
        
        
    </body>
    
    
    
</html>