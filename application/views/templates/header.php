<html>
        <head>
                <title>CPE75 Project</title>
              
        </head>
        <body>

                <h1><?php echo $title; ?></h1>
               <?php
                if($this->session->userdata('user') != NULL)
                {
               ?>
                 <a href="<?php echo base_url() ?>index.php/users/logout">Logout</a>
               <?php
                }else 
                {

                }
               ?>