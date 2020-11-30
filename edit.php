<html>
 <head>
     <title>Update</title>
     <style>
     .mainc{
       margin:110px;
     }

table{
  width:30%;
  padding:30px;
}
table,td{
  border:5px solid pink;
    padding:20px;
}
     </style>
 </head>
 <body>
      <div class="mainc">
        <?php
           $ss=$_GET['id'];
           $connn=mysqli_connect("localhost","root","","crud") or die("connection faield");
           $sql="SELECT * FROM student WHERE sid={$ss}";
           $result=mysqli_query($connn,$sql);
           if($row=mysqli_num_rows($result)>0){
           while($row=mysqli_fetch_assoc($result)){
        ?>
        <form action="data1.php" method="post">
            <table>
              <tr>
                <td><label>Name:</label> </td><td>
                 <input type="hidden" name="sid" value="<?php echo $row['sid']?>">
                  <input type="text" name="fname" value="<?php echo $row['sname']?>"></td>
              </tr>
              <tr>  <td><label>address:</label></td><td><input type=" text" name="address" value="<?php echo $row['saddress']?>"></td>
              </tr>
              <tr>
                <td><label>class</label></td>
                <?php
                     $sql2="SELECT * FROM studentclass";
                     $result1=mysqli_query($connn,$sql2);
                     if(mysqli_num_rows($result1)>0){
                ?>
                <td>


                  <select name="ccls">
                    <?php
                        while($row1=mysqli_fetch_assoc($result1)){
                          if($row['sclass'] == $row1['cid']){
                            $selected="selected";
                          }
                          else{
                            $selected="";
                          }

                     echo "<option {$selected} value='{$row1['cid']}'>{$row1['cname']}</option>";
                    }

                    ?>



                </td>
                      <?php  } ?>
              </tr>

                <tr><td><label>Phone:</label></td><td><input type=" text" name="phone" value="<?php echo $row['sphone']?>"></td></tr>
                <tr><td><input type="submit" value="submit"></td></tr>
              </tr>
             </table>

        </form>
   <?php } } ?>
      <div>
 </body>
</html>
