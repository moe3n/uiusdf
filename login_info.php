<?php


if($_SERVER['REQUEST_METHOD']=="POST"){
    
        $admin_mail=$_POST['admin_mail'];
        $adminpass=$_POST['adminpass'];

        // encoding password
        $hidden_pass=md5($pass);
        
        ///tries to communicate with the database and store the data
        include 'dbconnect.php';

            //database code execute, default : warning generate
           $sql_login_info="SELECT * From admin WHERE admin_mail='$admin_mail'and  adminpass='$hidden_pass'";
            
            $returnobj=$conn->query($sql_login_info);
            if($returnobj->rowCount()==1){
                
                //login successful
                session_start();
                    // $_SESSION['u_id']= 100;
                    // $_SESSION['u_name']='srk';
                    // $_SESSION['u_mail']='srk@gmail.com';

               // returning an associative array
                $user_info=$returnobj->fetchAll();
        
               //  we used for each loop as the associative array returning multiple columns so to print we need for each loop            
                foreach ($user_info as $user_profile)
                {
                    $_SESSION['id']=$user_profile['id'];
                    $_SESSION['admin_name']=$user_profile['admin_name'];
                    $_SESSION['admin_mail']=$user_profile['admin_mail'];

                }

                header('location: tourist_spot.php?signup=successful');
                
            }
            else{
                header('location: login.html?signup=unsuccessful1');
            }
   
 }
     else{
         //otherwise
         header('location: login.html?signup=unsuccessful');
     }

 ?>