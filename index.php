<?php
echo "ok<br/>";
try {
        
        $output = shell_exec('sudo -S ./test.sh  2>&1');        
        echo "<br/>$output<br/>";
            
        $output = shell_exec("sudo -S ./tes.sh");
        echo $output;

        echo "<br/>is in";
        
} catch (Exception $e) {
        echo $e;
}
?>

