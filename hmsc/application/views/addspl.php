<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo form_open('admin/add_spl');
        ?><a href="<?php echo base_url().'admin/admindashboard'; ?>">Home</a>
        <p>Add Specialization</p>
        <input type="text" name="Name" id="Name"/>
        <input type="hidden" name="Active" value="1"/>
        <input type="submit" name="submit" />
        <?php echo form_close() ?>
    </body>
</html>
