


<div class="container">
   
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-sm-8 jumbotron">
        <h2 class="text-center text-success">Add New User</h2>
        <div class="card bg-default ">
          <div class="card-body">
           <form action="<?php echo base_url(); ?>admin/user/createUser" enctype="multipart/form-data" method="POST">
              <div class="row">
                <div class="form-group col">
                  <label for="firstname"><strong>First Name</strong></label>
                  <input type="text" name="firstname" class="form-control" placeholder="firstname" required>
                </div>
                <div class="form-group col">
                  <label for="lastname"><strong>Last Name</strong></label>
                  <input type="text" name="lastname" class="form-control" placeholder="lastname" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col">
                  <label for="username"><strong>Login Name</strong></label>
                  <input type="text" name="loginname" class="form-control" placeholder="username" required>
                </div>
                <div class="form-group col">
                  <label for="email"><strong>Email</strong></label>
                  <input type="email" placeholder="email" required class="form-control" name="useremail" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col">
                  <label for="class"><strong>Class Name</strong></label>
                  <input type="text" name="classname" class="form-control" placeholder="WEP-2018" required>
                </div>
                <div class="form-group col">
                  <label for="cardId"><strong>Card ID</strong></label>
                  <input type="text" class="form-control" placeholder="PNC2018-009" required name="cardid">
                </div>
              </div>
              <div class="row">
                <div class="form-group col">
                  <label for="password"><strong>Password</strong></label>
                  <input type="password" placeholder="password" name="password" class="form-control" require>
                </div>
                <div class="form-group col">
                  <label for="image"><strong>Staff Picture</strong></label>
                  <input type="file" class="form-control" required name="userimage">
                </div>
              </div>
              <div class="form-group">
                <label for="gender"><strong>Gender</strong></label>
                <input type="radio" name="gender" value="Male" checked> Male
                <input type="radio" name="gender" value="Female"> Female
              </div>
              <button class=" btn btn-danger" onclick="goBack()"><i class="mdi mdi-cancel"></i>&nbsp;Cancel</button>
              <button class=" btn btn-info float-right" type="submit"><i class="mdi mdi-account-plus"></i>&nbsp;Add Staff</button>
            </form>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div> <!-- /container -->

<script>
    $(function(){
      $('.form-control').keypress(function(event) {
          if (event.keyCode == 13 || event.which == 13) {
              $('#formLogin').submit();
          }
      });
    });s
  function goBack() {
    window.history.back();
}

</script>
<!-- ////////////////////////////
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-8" >
			<div class="jumbotron">
			<h2 class="text-center text-success">Add New User</h2>
	
			<form action="<?php echo base_url(); ?>admin/user/createUser" enctype="multipart/form-data" method="POST">
				
			    <div class="form-group">
			      <label for="email">First Name</label>
			      <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname " required >
			    </div>

			    <div class="form-group">
			      <label for="email">Last Name</label>
			      <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname " required >
			    </div>

			    <div class="form-group">
			      <label for="email">User Email</label>
			      <input type="text" class="form-control" name="useremail" placeholder="Enter dish name " required >
			    </div>

			    <div class="form-group">
			      <label for="pwd">Clast Name:</label>
			      <input type="text" class="form-control" name="classname" required placeholder="Enter class name">
			    </div>

			    <div class="form-group">
			      <label for="pwd">Card ID</label>
			      <input type="text" class="form-control" name="cardid" required placeholder="Enter Card Id">
			    </div>

			    <div class="form-group">
			      <label for="pwd">Dish Date:</label>
			      <input type="file" class="form-control" name="usrimage" required placeholder="Choose image file">
			    </div>
			    
			    <br>
			    <button type="button" class="btn btn-danger float-left" onclick="goBack()">Cancel</button>
			    <button type="submit" class="btn btn-success float-right" value="upload">Add Dish</button>
			</form>
		</div>
		</div>
		<div class="col-md-1"></div>
	 
<script>
	function goBack() {
  	window.history.back();
	}
</script> -->