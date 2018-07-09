# php shell scripts to run terminal commands
***https://superuser.com/questions/464971/perrmission-to-run-specific-command-by-sudo-as-www-data-users-without-password***


# step
## 1 sudo visudo
add user privilege
>www-data    ALL=(ALL:ALL) NOPASSWD: ALL

## 2 start server
>sudo service apache2 restart

## 3 create test.sh file by
>echo "node -v" >> test.sh  

## 4 give chmod to test.sh
>chmod 770 test.sh

## 5 create index.php
```
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
```

