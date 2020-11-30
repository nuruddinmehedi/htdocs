
<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
<?php $i=0;
      foreach ($user as $value){
           $i++;
      ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $value['Name'];?></td>
        <td><?php echo $value['Department'];?></td>
        <td><?php echo $value['Age'];?></td>
        <td>
            
        </td>
    </tr>

   <?php } ?>
  </table>
</section>