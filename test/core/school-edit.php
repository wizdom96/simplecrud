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
    <h2>EDIT SCHOOL</h2>

</header>
<body>

    <?php require 'selectschool.php'; ?>
    
        <div class="conntainer">
        <div class="content-table">
        <table class="blueTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>School Name</th>
                    <th>Adress</th>
                    <th>Courses fee</th>
                    <th>Max students alowed</th>
                
                </tr>
            </thead>
                        
     
                        <tr>
                            <td><?php echo $row['id'] ?> </td>
                            <td><?php echo $row['schoolname'] ?> </td>
                            <td><?php echo $row['adress'] ?> </td>
                            <td><?php echo $row['maxstudents'] ?> </td>
                            <td><?php echo $row['coursesfee'] ?> </td>
                         </tr>

                      
                         </table>   
                    </div>

                    <div class="conntainer">
        <div class="content-table">
        <table class="blueTable">

            <thead>
                <tr>
                 
                    <th> Name</th>
                    <th>Lastname</th>
                    <th>Birthdate</th>
                    <th>School  </th>
                    <th colspan=2>Action</th>
                
                </tr>
            </thead>
                        <?php while($row1 = $result1->fetch_assoc()): ?>

                        <tr>                          
                            <td><?php echo $row1['name'] ?> </td>
                            <td><?php echo $row1['lastname'] ?> </td>
                            <td><?php echo $row1['birthdate'] ?> </td>
                            <td><?php echo $row1['school'] ?> </td>
                            <td><a href="../index.php">Edit</a></td>
                            
                         </tr>

                         <?php endwhile; ?>

                         </table>   
                    </div>


        <div class="container">   

        <form action="selectschool.php"  method="POST">
         
       <input type="hidden" name="id" value="<?php echo $first; ?>">             
            
       <div class="form-group">
            <label>Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text" name="name1" value="<?php echo $name ?>" >
        </div>  
        <div class="form-group">
            <label>Adress</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text" name="adress" value="<?php echo $adress ?>" >
        </div>  

        <div class="form-group">
            <label>Max student alowed</label>
            <input type="text" name ="maxstudents" value="<?php echo $row['maxstudents'] ?>">
        </div>
       
            
        <div class="form-group">
            <label>Courses fee</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text" name="coursesfee" value="<?php echo $row['coursesfee'] ?>">
        </div>
     

        <div class="form-group">
        <button type="submit" name="update1" > Update </button>
        </div>

        </form>

    
        </div>

         
    </body>
</html>