
<?php 
		$x=1;
		include('dbconnect.php');
		$rec_limit=5;
		$c=0;
		$sql="Select * from user_info";
		$retval =$conn->query($sql);
			while($row = $retval->fetch_array())
			{
				$c++;
			}
		   		if(!isset($_GET['pagev'] ) )
		 	{ 
            	$pagev = 1;
            	$offset = 0;
		 	}
		 	else
		 	{
         	$pagev = $_GET['pagev'];
         	$offset = $rec_limit * ($pagev-1) ;
         	}
			if($rec_limit>$c)
			$rec_limit=$c;
			echo '  <div class="main-container">
						<div class="container-fluid">
		
							<div class="row">
								<div class="section-header">
									<h2>Users Information</h2>
								</div>
								<div class="box-widget widget-module">
									<div class="widget-head clearfix">
										<span class="h-icon"><i class="fa fa-table"></i></span>
										<h4>Registered Users</h4>
									</div>
									<div class="widget-container">
										<div class="widget-block">
										
											<div class="table-responsive">
												<table class="table table-hover table-bordered matmix-dt bg-hc-border">
												<thead>
												<tr>
													<th colspan="12">
														<div class="dt-col-header">All Users Details</div>
														
												</th>
											
											</tr>

											<tr>
												<th class="tc-center">
													<input class="tc-check-all" type="checkbox" value="0">
												</th>
												<th>Cust ID</th>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>Gender</th>
												<th>Email ID</th>
												<th>Mobile No.</th>
												<th>Coursename</th>
												<th>Username</th>
												<th>Password</th>
												<th>Role</th>
										
											</tr>
											</thead>

		                                    <tbody>
		';
		$sql = "SELECT * from user_info LIMIT $offset,$rec_limit";
		$result = $conn->query($sql);
		while ($row = $result->fetch_array()) 
		{
			echo '<tr>
		                                            <td class="tc-center">
		                                                <input type="checkbox" name="tc-check" value="0">
		                                            </td>
		                                            <td>'.$row['cust_id'].'</td>
		                                            <td>'.$row['user_firstname'].'</td>
		                                            <td>'.$row['user_lastname'].'</td>
		                                            <td>'.$row['user_gender'].'</td>
		                                            <td>'.$row['user_email'].'</td>
		                                            <td>'.$row['user_mobileno'].'</td>
		                                            <td>'.$row['user_coursename'].'</td>
		                                            <td>'.$row['username'].'</td>
		                                            <td>'.$row['con_password'].'</td>
		                                            <td>'.$row['role'].'</td>
		                                       
		                                            </tr>';
		}

echo '</tbody></table></div>';
if($rec_limit<=$c&&$c!=0)
		{
			echo '<div class="dt-pagination">
				<nav>
					<ul class="pagination">';
					if($pagev!=1)
					{
						$i=$pagev-1;
						if(isset($_GET['id']))
						{
							$a=$_GET['id'];
							$s0="AdminAccount.php?pagev=$i&id=$a";
						}
						else
							$s0="AdminAccount.php?pagev=$i";
							echo "
								<li>
									<a href=$s0 aria-label=Previous>
									<span aria-hidden=true>Prev</span>
									</a>
									</li>";
					}
					$r=$c%$rec_limit;
					$q=$c/$rec_limit;
					if($r==0)
					{
						$s=$q;
					}
					else
					{
						$s=$q+1-$r/$rec_limit;						
					}
					for($i=1;$i<=$s;$i++)
					{
						if(isset($_GET['id']))
						{
							$a=$_GET['id'];
							$s0="AdminAccount.php?pagev=$i&id=$a";
						}
						else
							$s0="AdminAccount.php?pagev=$i";
							echo "
								<li><a href=$s0>$i</a>
								</li>";
					}
					if($pagev!=$s)
					{
						$i=$pagev+1;
						if(isset($_GET['id']))
						{
							$a=$_GET['id'];
							$s0="AdminAccount.php?pagev=$i&id=$a";
						}
						else
							$s0="AdminAccount.php?pagev=$i";
							echo "
								<li>
								<a href=$s0 aria-label=Next>
								<span aria-hidden=true>Next</span>
								</a>
								</li>";
					}
					echo '</ul>
							</nav>
							</div>';
		}
?>