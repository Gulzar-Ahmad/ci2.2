
<!-- TAB 3 -->					  
<div>
	<div class="dash-ct page-title">
		<span class="profile-icon left"></span>									  
		<span class="dtxt">Students</span>
	</div>
	<div class="searchPan">

		<div class="padding20">
			<div class="col-md-4">
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>Student Name</b></span>
						<input type="text" placeholder="Name..." class="form-control">
					</div>
				</div>

				<div class="w50percentlast">
					<div class="wh90percent textleft right">
						<span class="opensans size13"><b>Postcode</b></span>
						<input type="text" placeholder="i.e. E14 9ET" class="form-control">
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>Email</b></span>
						<input type="text" placeholder="example@example.com" class="form-control">
					</div>
				</div>

				<div class="w50percentlast">
					<div class="wh90percent textleft right">
						<span class="opensans size13"><b>Tel</b></span>
						<input type="text" placeholder="i.e. 02456..." class="form-control ">
					</div>
				</div>
			</div>


			<div class="col-md-4">
				<div class="padding20">
					<button class="btn-search4 margleft15" type="submit">Search</button>
                    <a href="#" data-target="#new_stu_Modal" data-toggle="modal" class="btn btn-success">Add New</i></a>&nbsp;
                    
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="clearfix"></div>
		<br/>  
	</div> <!-- end of search pan -->
	<br/>  
	<div class="table-responsive">
		<table class="table-striped">
			<tr>
				<th>#</th> <th>Name</th> <th>Email</th> <th>Tel</th> <th>Address</th> <th>Activities</th> <th></th>
			</tr>
            <?php
										//print_r($persons);
										for($i=0; $i<count($data);$i++) {
										?>
			<tr>
                  <td><?php echo $data[$i]->student_id;?></td>
                  <td><?php echo $data[$i]->first_name;?></td>
                  <td><?php echo $data[$i]->email;?></td>
                  <td><?php echo $data[$i]->mobile;?></td>
                  <td><?php echo $data[$i]->address;?></td> 
                  <td><?php echo $data[$i]->last_activity;?></td> 
                  <td><a href="" class="glyphicon glyphicon-search modalLink" data-toggle="modal" data-target="#perview_stu_Modal1<?php echo $data[$i]->student_id;?>">Preview</a> 
                      <a href="" class="glyphicon glyphicon-search modalLink" data-toggle="modal" data-target="#edit_stu_Modal<?php echo $data[$i]->student_id;?>">Edit</a>
                       <a href="" class="glyphicon glyphicon-search modalLink" data-toggle="modal" data-target="#delete_stu_Modal<?php echo $data[$i]->student_id;?>">Delete</a>
                        </td>
            </tr>
	      <?php } ?>
		</table>
        
	</div>
	
	
	 <?php
	for($i=0; $i<count($data);$i++) {
	?>
	<!-- user preview popup 1 -->
	<div class="modal fade" id="perview_stu_Modal1<?php echo $data[$i]->student_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					<br>
					<div class="avatar"> <img src="http://cache2.asset-cache.net/xt/107058455.jpg?v=1&g=fs1|0|FKS|58|455&s=1" /> </div>
					<div class="userInfo">
						<div class="center">
                          
							<h2 class="modal-title" id="myModalLabel"></h2>
							<div class="row"><label>Address:</label> <span><?php echo $data[$i]->address;?></span></div>
							<div class="row"><label>Email:</label> <span><?php echo $data[$i]->email;?></span></div>
							<div class="row"><label>Tel:</label> <span><?php echo $data[$i]->mobile;?></span></div>
                           
                            
						</div>
					</div>
                    
					<div class="userStat">
						<div class="column"><label>Private Lessons</label><span>7</span></div>
						<div class="column"><label>Group Classes</label><span>12</span></div>
						<div class="column"><label>Member Since</label><label class="blue">02 Sep 2014</label></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table class="table-striped">
							<tr>
								<th>Date</th> <th>Time</th> <th>Tutor</th> <th>Session Type</th> <th>Price</th> <th>Status</th> <th></th>
							</tr>
							<tr><td>4 Jan 2015</td> <td>12:00 am</td> <td>Mr. James Recardo</td>		<td>Private Session</td> <td>&pound; 14.00</td> <td><span class="glyphicon glyphicon-time"></span></td>         </tr>
							<tr><td>2 Dec 2014</td> <td>2:00 pm</td>  <td>Mr. Philip</td>				<td>Group Class</td>     <td>&pound; 6.00</td>  <td><span class="glyphicon glyphicon-ok"></span></td>    </tr>
						</table>
					</div>
				</div>
				<!--<div class="modal-footer"></div>-->
			</div>
		</div>
	</div>
     <?php } ?>
	<!-- //user preview popup 1 -->
	
	
    <!-- user preview popup 2 -->
    <?php 
		$attributes = array('method' => 'post','enctype'=>'multipart/form-data');
		$hidden = array(
			//'username' => 'Joe', 'member_id' => '234'
			);
		echo form_open('admin/students/update',$attributes,$hidden);?>
   
   <?php
	for($i=0; $i<count($data);$i++) {
	?>
    
	<div class="modal fade" id="edit_stu_Modal<?php echo $data[$i]->student_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					<br>
					<div class="avatar"> <img src="http://cache4.asset-cache.net/xt/493189933.jpg?v=1&g=fs1|0|FPG|89|933&s=1" /> </div>
					<div class="userInfo">
						<div >
                          <div class="col-md-10" style="margin-left:20px">
                            
                            <div class="row"><input type="hidden" name="student_id" value="<?php echo $data[$i]->student_id; ?>"></div>
 							<div class="row"><label>Name:</label><input type="text" name="first_name" value="<?php echo $data[$i]->first_name;?>" class="form-control col-md-2"/></div>
							<div class="row"><label>Email:</label> <input type="text" name="email" value="<?php echo $data[$i]->email;?>" class="form-control"/></div>
							<div class="row"><label>Tel:</label> <input type="text" name="mobile" value="<?php echo $data[$i]->mobile;?>" class="form-control"/></div>
                            <div class="row"><label>Address:</label><input type="text" name="address" value="<?php echo $data[$i]->address;?>" class="form-control"/></div>
                            <div class="row"><label>Activities:</label> <input type="text" name="last_activity" value="<?php echo $data[$i]->last_activity;?>" class="form-control"/></div>
                            <div class="row"><label>Picture:</label> <input type="file" name="img" value="" /></div><br />
                            <div class="row"><input type="submit" name="update_student" value="Update" class="btn btn-primary "/></div>
                            </div>
                            
                           
						</div>
                        
					</div>
                                  
					
					<div class="clearfix"></div>
				</div>
				
				<!--<div class="modal-footer"></div>-->
                
			</div>
		</div>
	</div>
    
    <?php } ?>
    </form>
    <?php 
		$attributes = array('method' => 'post','enctype'=>'multipart/form-data');
		$hidden = array(
			//'username' => 'Joe', 'member_id' => '234'
			);
		echo form_open('admin/students/add',$attributes,$hidden);?>
          
        <?php 
		    $firstname=$this->session->userdata('first_name1');
			$lastname=$this->session->userdata('last_name1');
			$email=$this->session->userdata('email1');
			$mobile=$this->session->userdata('mobile1');
			$address=$this->session->userdata('address1');
			$lastactivity=$this->session->userdata('last_activity1');
			$parentid=$this->session->userdata('parent_id1');
			$creationdate=$this->session->userdata('creation_date1');
		
		?>
    
    <div class="modal fade" id="new_stu_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					<br>
                    <div class="alert alert-danger">
                                                    <strong><?php echo $this->session->userdata('sess_error_msges');?></strong> 
                    </div>
					<div class="avatar"> <img src="http://cache4.asset-cache.net/xt/493189933.jpg?v=1&g=fs1|0|FPG|89|933&s=1" /> </div>
					<div class="userInfo">
						<div >
                          <div class="col-md-10" style="margin-left:40px">
                            
                            <div class="row"><input type="hidden" name="student_id" value=""></div>
 							<div class="row"><label>First Name:</label><input type="text" name="first_name" value="<?php echo  $firstname; ?>" class="form-control "/></div>
							<div class="row"><label>Email:</label> <input type="text" name="email" value="<?php echo  $email; ?>" class="form-control"/></div>
							<div class="row"><label>Tel:</label> <input type="text" name="mobile" value="<?php echo  $mobile; ?>" class="form-control"/></div>
                            <div class="row"><label>Address:</label><input type="text" name="address" value="<?php echo  $address; ?>" class="form-control "/></div>
                            <div class="row"><label>Picture:</label> <input type="file" name="img" value="" /></div><br />
                            <div class="row"><input type="submit" name="add" value="Add" class="btn btn-primary "/></div>
                           
                            </div>
                          
						</div>
                        
                        
					</div>
					<div class="userStat col-md-4" style="margin-top:-1px" >
						 
 							<div class="row"><label>Last Name:</label><input type="text" name="last_name" value="<?php echo  $lastname; ?>" class="form-control "/></div>
							<div class="row"><label>Parent Id:</label> <input type="text" name="parent_id" value="<?php echo  $parentid; ?>" class="form-control"/></div>
							<div class="row"><label>Creation Date:</label> <input type="text" name="creation_date" value="<?php echo  $creationdate; ?>" class="form-control" /></div>
                            <div class="row"><label>Last Activity:</label> <input type="text" name="last_activity" value="<?php echo  $lastactivity; ?>" class="form-control"/></div>
                           
					</div>
					<div class="clearfix"></div>
				</div>
				
				<!--<div class="modal-footer"></div>-->
                
			</div>
		</div>
	</div>
    </form>
	<!-- //user preview popup 2 -->
    <?php 
		$attributes = array('method' => 'post','enctype'=>'multipart/form-data');
		$hidden = array(
			//'username' => 'Joe', 'member_id' => '234'
			);
		echo form_open('admin/students/delete',$attributes,$hidden);?>
    
    <?php
	for($i=0; $i<count($data);$i++) {
	?>
    <div class="modal fade" id="delete_stu_Modal<?php echo $data[$i]->student_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					<br>
					<div class="avatar"> <img src="http://cache4.asset-cache.net/xt/493189933.jpg?v=1&g=fs1|0|FPG|89|933&s=1" /> </div>
					<div class="userInfo">
						<div >
                          <div class="col-md-11" style="margin-left:20px">
                            
                            <div class="row"><input type="hidden" name="student_id" value="<?php echo $data[$i]->student_id;?>"></div>
                                              
                             <div class="row alert alert-error"><h5>Are you sure! You want to delete it</h5>
                             <input type="submit" name="delete_student" value="Yes" class="btn btn-danger "/>
                                             <input type="submit" name="cancel" value="NO" class="btn btn-success"/>
                            </div>
                            </div>
                           
						</div>
                        
					</div>
					
					<div class="clearfix"></div>
				</div>
				
				<!--<div class="modal-footer"></div>-->
                
			</div>
		</div>
	</div>
    <?php } ?>

 </form>

</div>
<!-- END OF TAB 3 -->	
