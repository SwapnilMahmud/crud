<html>
  <head>
      <title>Add information</title>
      <style>
.bdy{
  margin:170px;
  border:9px solid tomato;
  background:white;
  color:black;
  font-weight: bold;
  padding:80px;
}
label{
  padding:30px;
  display:left;

}
input{
  border-color:tomato;
  display:flex;

}
    </style>
  </head>
  <body>
      <div class="bdy">
        <form action="data.php" method="post">

            <label>Name:</label><input type="text" name="sname" ><br>
            <label>Address:</label><input type="text area" name="address"><br>
            <label>Mobile:</label><input type="text" name="phone"><br>
            <label>Class:</label>
            <select name="cls">
              <option value="" selected disabled>select class</option>
              <?php
              $conn=mysqli_connect("localhost","root","","crud") or die("connection faield");
              $sql="SELECT * FROM  studentclass ";
              $result=mysqli_query($conn,$sql) or die("unsucessful query");
              while($row=mysqli_fetch_assoc($result)){
              ?>
              <option value="<?php echo $row['cid'];?>"><?php echo $row['cname'];?></option>
              <?php } ?>

             </select>
              <br>
              <br>
              <br>
          <input type="submit" name="submit">
        </form>
      </div>
    </body>
</html>
