<html>
<head>
  <title>crud</title>
  <style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
.menu{
  background-color:mediumseagreen;
  padding:10px;
}
.menu ul{
  flex-direction: column;

}
.menu ul li{
  list-style-type:none;
  font-weight: bold;
  font-size:20px;
  color:white;
  flex-direction: column;
    display: inline-block;
    padding:20px;
}
.all{
  margin:100px;
}
</style>
</head>
<body>
  <div class="all">
  <div class="menu">
     <ul>
        <li>Home</li>
        <li><a href="add.php">Add </a></li>
        <li>Delete</li>
     </ul>
  </div>

      <?php
      $con=mysqli_connect("localhost","root","","crud") or die("connection faield");
      $sql="SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
      $result=mysqli_query($con,$sql) or die("unsucessful query");
      if(mysqli_num_rows($result)>0){
      ?>
        <table  id="t01">
            <thead collspacing='10px' collpadding=10px>
              <th>Id</th>
              <th>Name</th>
              <th>address</th>
              <th>class</th>
              <th>phone</th>
              <th>Cname</th>
            </thead>
            <tbody>
              <?php
                      while($row=mysqli_fetch_assoc($result)){
              ?>
                <tr>
                  <td><?php echo $row['sid'] ?></td>
                  <td><?php echo $row['sname'] ?></td>
                  <td><?php echo $row['saddress'] ?></td>
                  <td><?php echo $row['sclass'] ?></td>
                  <td><?php echo $row['sphone'] ?></td>
                  <td><?php echo $row['cname'] ?></td>
                    <td><a href="edit.php?id=<?php echo $row['sid'] ?>">Edit</a></td>
                      <td><a href="">Delete</a></td>

                </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php  } ?>
    </div>

</body>
</html>
