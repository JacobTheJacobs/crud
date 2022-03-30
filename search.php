


<div class="container box">
    <br />
  
    <form action="" method="post" style="display: flex; justify-content: center;">
        <div class="input-group mb-3">

            <input type="text" name="search" >

            <div class="input-group-append">
                <button class="btn btn-info"  type="submit" name="submit">Button</button>
            </div>

        </div>
    </form>

    <?php


?>
</div>
<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>S/N</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					
if (isset($_POST['submit'])) {


    $search_value = $_POST['search'];

    $conn = new mysqli('localhost', 'root', '', 'ge');

    if ($conn->connect_error) {
        echo 'Connection Faild: ' . $con->connect_error;
    } else {
        echo 'cool';
        //find all the sem num and po number 
        $sql = "SELECT * FROM `sem` WHERE `sn_num` = '$search_value'";
        $result = $conn->query($sql);
        //check if result is not empty
        if ($result->num_rows > 0) {
    
        }
    
    }

					$count = 1;
					while($fetch = $result->fetch_array()){
				?>
				<tr>
					<td><?php echo $count++?></td>
					<td><?php echo $fetch['sn_num']?></td>
					<td><?php echo $fetch['gprs_date']?></td>
					<td colspan="2">
					
							<?php
								if($fetch['is_complete'] != 1){
									echo 
									'<a href="update_task.php?id='.$fetch['id'].'" class="btn btn-success">update</a> |';
								}
							?>
							 <a href="delete_task.php?id=<?php echo $fetch['id']?>" class="btn btn-danger">delete</a>
					
					</td>
				</tr>
				<?php
					}}
				?>
			</tbody>
		</table>


<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>


