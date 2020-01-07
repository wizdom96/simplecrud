

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel= "stylesheet" type="text/css" href="css/indexstyle.css">
</head>
<header>
<h2>SCHOOLS</h2>
<a href="index.php" button type="submit" name='edit' > Students</a>
<a href="schools.php" button type="submit" name='edit' > Schools</a><br><br>
</header>
<body>
    <?php require 'core/connectionschool.php' ?>


    <div class="container">
    <div class="content-table">
<table class="blueTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Adress</th>
                    <th>Max students</th>
                    <th>Courses fee</th>
                    <th colspan="2">Action </th>
               
                </tr>
            </thead>
            
            <?php while($row = $sqll->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id'] ?> </td>
                            <td><?php echo $row['schoolname'] ?> </td>
                            <td><?php echo $row['adress']  ?></td>
                            <td><?php echo $row['maxstudents']  ?></td>
                            <td><?php echo $row['coursesfee']  ?></td>
                            <td><a href="core/school-edit.php?edit1=<?php echo $row['id'] ?><?php echo $row['schoolname'] ?>" button type="submit" name='edit1' > Edit</a>
                            <a href="core/selectschool.php?delete=<?php echo $row['id'];?>"
                            button type="submit" name='delete' onclick="return confirm('Do you want to make these changes ?');"> Delete</a></td>        </tr>
                <?php endwhile; ?>


                    </table>   
                    <div class="container">   
        <form action="core/createschool.php"  method="POST">
        
       <div class="form-group">              
            <label>School Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text" name="sname"" >
        </div>

        <div class="form-group">
            <label>Adress</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text" name="sadress"" >
        </div>  

        <div class="form-group">
            <label>Max student alowed</label>
            <input type="number" name ="smaxstudents "> 
        </div>
       
            
        <div class="form-group">
            <label>Courses fee</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="number" name="scoursesfee" >
        </div>
     

        <div class="form-group">
       
        <button type="submit" name="save1" > Save </button>

        </div>

        </form>

    
        </div>

</body>
</html>