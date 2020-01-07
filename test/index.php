<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
   
    <link rel= "stylesheet" type="text/css" href="css/indexstyle.css">

</head>

<header>
<h2>CRUD</h2>
<a href="index.php" button type="submit" name='edit12' > Students</a>
<a href="schools.php" button type="submit" name='edit11' > Schools</a>
</header>
<body>
    

    <?php require_once 'core/process.php'; ?>
    <?php require_once 'core/display.php'; ?>
    
   <?php if (isset($_SESSION['message'])): ?>

   <div class="alert">
   
   <p><?php echo $_SESSION['message'];
   unset ($_SESSION['message']);
   endif;
   ?></p>

   </div>
    <div class="container">
    
    <div class="content-table">
     
        <table class="blueTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Birthdate</th>
                    <th>School</th>
                    <th colspan="2">Action </th>
               
                </tr>
            </thead>
          
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id'] ?> </td>
                            <td><?php echo $row['name'] ?> </td>
                            <td><?php echo $row['lastname']  ?></td>
                            <td><?php echo $row['birthdate']  ?></td>
                            <td><?php echo $row['school']  ?></td>
                            <td><a href="core/edit1.php?edit=<?php echo $row['id'];?>"
                            button type="submit" name='edit' > Edit</a>
                            <a href="core/process.php?delete=<?php echo $row['id'];?>"
                            button type="submit" name='delete' onclick="return confirm('Do you want to make these changes ?');"> Delete</a></td>

                        </tr>
                <?php endwhile; ?>


                    </table>   
                </div>
           </div>
    <div class="container">   
                        <div class="formform">
    <form action="core/process.php" method="POST">
        
  

            <label>Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text" name="name"  placeholder="Enter your First name: ">
             <br><br>

            <label>Last Name</label>&nbsp&nbsp&nbsp
            <input type="text" name="lastname" placeholder="Enter your Last name: ">
             <br><br>           
        
      
             <label>Birthdate</label>&nbsp&nbsp&nbsp&nbsp&nbsp
             <input type="date"  name="date"  min="01-01-1920-" max="2020-01-01"> 
               <br>    <br>     

    
             <label>School</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             <select name="school" >
            
                    <option value="EMUC">EMUC</option>
                    <option value="MSU">MSU</option>
                    <option value="FINKI">FINKI</option>
                    <option value="FIKT">FIKT</option>
                    <option value="TFB">TFB</option>
                    <option value="FEIT">FEIT</option>  

            </select> 
     
                    
       <div class="form-group">
    <button type="submit" name="save"> Save </button>
    <br><br><br>
    

        </div>
        </form>
        </div>
                    </div>
        
    </body>
</html>