


<!-- TAB 4 -->					  
<div >
	<div class="dash-ct page-title">
		<span class="class-icon left"></span>									  
		<span class="dtxt">Group Classes</span>
	</div>
	<div class="searchPan">

		<div class="padding20">
			<div class="col-md-4">
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>From Date</b></span>
						<input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy"/>
					</div>
				</div>

				<div class="w50percentlast">
					<div class="wh90percent textleft right">
						<span class="opensans size13"><b>To Date</b></span>
						<input type="text" class="form-control mySelectCalendar" id="datepicker4" placeholder="mm/dd/yyyy"/>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>Tutor Name</b></span>
						<input type="text" placeholder="Name..." class="form-control">
					</div>
				</div>

				<div class="w50percentlast">
					<div class="wh90percent textleft right">
						<span class="opensans size13"><b>Student Name</b></span>
						<input type="text" placeholder="Name..." class="form-control">
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>Class Type</b></span>
						<select class="form-control mySelectBoxClass">
						  <option>Trial</option>
						  <option>Paid</option>
						  <option selected>Any</option>
						</select>
					</div>
				</div>
				<div class="w50percentlast">
					<div class="padding20">
						<button class="btn-search4 margleft15" type="submit">Search</button>
					</div>
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
			<tr><td>1</td> <td>Philip</td> <td>phil@xyz.com</td> <td>029949494</td> <td>SE12 4ER, London</td> <td>5 Sessions<br>3 One2One</td>          <td><a href="" class="glyphicon glyphicon-search modalLink" data-toggle="modal" data-target="#myModal1">Preview</a> <a href="" class="glyphicon glyphicon-pencil">Edit</a></td></tr>
			<tr><td>2</td> <td>James Recardo</td> <td>j.rec@abc.com</td> <td>02122222</td> <td>SE12 7ET, London</td> <td>2 Sessions<br>0 One2One</td>   <td><a href="" class="glyphicon glyphicon-search modalLink" data-toggle="modal" data-target="#myModal2">Preview</a> <a href="" class="glyphicon glyphicon-pencil">Edit</a></td></tr>
		</table>
	</div>
	<!-- user preview popups -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					<br>
					<div class="avatar"> <img src="http://cache4.asset-cache.net/xt/170747324.jpg?v=1&g=fs1|0|OJO|47|324&s=1" /> </div>
					<div class="userInfo">
						<div class="center">
							<h2 class="modal-title" id="myModalLabel">Philip</h2>
							<div class="row"><label>Address:</label> <span>sE12 4ER, London</span></div>
							<div class="row"><label>Email:</label> <span>phil@xyz.com</span></div>
							<div class="row"><label>Tel:</label> <span>029949494</span></div>
						</div>
					</div>
					<div class="userStat">
						<div class="column"><label>Private Lessons</label><span>7</span></div>
						<div class="column"><label>Group Classes</label><span>12</span></div>
						<div class="column"><label>Member Since</label><label class="blue">12 Sep 2014</label></div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="modal-body">
					<div class="table-responsive">
						<table class="table-striped">
							<tr>
								<th>Date</th> <th>Time</th> <th>Student</th> <th>Session Type</th> <th>Price</th> <th>Status</th> <th></th>
							</tr>
							<tr><td>4 Jan 2015</td> <td>12:00 am</td> <td>Reena</td> <td>Private Session</td> <td>&pound; 14.00</td> <td><span class="glyphicon glyphicon-time"></span></td>         </tr>
							<tr><td>2 Dec 2014</td> <td>2:00 pm</td>  <td>Jhon</td>  <td>Group Class</td>     <td>&pound; 5.00</td>  <td><span class="glyphicon glyphicon-ok"></span></td>    </tr>
						</table>
					</div>
				</div>
				<!--<div class="modal-footer"></div>-->
			</div>
		</div>
	</div>
	<!-- //user preview popups -->
</div>
<!-- END OF TAB 4 -->	
