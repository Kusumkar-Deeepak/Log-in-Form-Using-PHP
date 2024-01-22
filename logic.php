<?php

if($_POST['id']=='deepak'){
    if($_POST['password']=='Deepak@123'){
        echo "Login Successful";
    }
    else{
        echo "Invalid Password";
    }
}
else{
    echo "Login Unsuccessful";
}

?>