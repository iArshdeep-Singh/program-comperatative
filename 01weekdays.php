<?php 

$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

for ($i = 0; $i < count($days); $i++) {
    switch ($days[$i]) {
        
        case "Sunday":
            echo $days[0] . "\n";
            break;
            
        case "Monday":
            echo $days[1] . "\n";
            break;
            
        case "Tuesday":
            echo $days[2] . "\n";
            break;
            
        case "Wednesday":
            echo $days[3] . "\n";
            break;

        case "Thursday":
            echo $days[4] . "\n";
            break;
            
        case "Friday":
            echo $days[5] . "\n";
            break;
            
        case "Saturday":
            echo $days[6] . "\n";
            break;

        default:
            echo "Invalid day";
            break;
    }

}