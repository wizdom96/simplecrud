<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
   
    <link rel= "stylesheet" type="text/css" href="../css/indexstyle.css">

</head>

<header>
    <h2>EDIT STUDENT</h2>

</header>
<body>

    <?php require_once 'display.php'; ?> 
    <?php require 'edit.content.php'; ?>
   </div>
    <div class="container">
    <div class="content-table">

        <table class="blueTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Birthdate</th>
                    <th>School</th>
                
                </tr>
            </thead>
                        <tr>
                            <td><?php echo $row['name'] ?> </td>
                            <td><?php echo $row['lastname']  ?></td>
                            <td><?php echo $row['birthdate']  ?></td>
                            <td><?php echo $row['school']  ?></td>
                            

                        </tr>

            
        </table>   
                    </div>
  <div class="container">   
        <form   action="edit.content.php" method="POST">

       <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">                
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name ?>" placeholder="Enter your First name: ">
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lastname" value="<?php echo $lastname ?>" placeholder="Enter your Last name: ">
        </div>  

        <div class="form-group">
            <label>Birthdate</label>
            <input type="date" name="date" value="<?php echo $row['birthdate'] ?>">
        </div>
       
            <label>School</label>
           <form action="edit.content.php" method="POST">
           <select name="school" value="<?php echo $row['school'] ?>">
                    <option value ="<?php echo $row['school'] ?>"><?php echo $row['school'] ?></option>
                    <option value="EMUC">EMUC</option>
                    <option value="MSU">MSU</option>
                    <option value="FINKI">FINKI</option>
                    <option value="FIKT">FIKT</option>
                    <option value="TFB">TFB</option>
                    <option value="FEIT">FEIT</option>  

            </select> 
     

        <div class="form-group">
       
        <button type="submit" name="update"> Update </button>

        </div>

        </form>

    
        </div>

    </body>
</html>