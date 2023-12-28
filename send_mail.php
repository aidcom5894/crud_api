<?php 

include('config.php');
include('master_content/master_navbar.php');

?>


<div class="container" style="margin-top: 45px;">
	
		<form method="POST">
		<div class="mb-3">
		<label class="form-label">Sender's Email Address</label>
		<input type="email" class="form-control" id="email" name="sendersEmail" aria-describedby="emailHelp">
		</div>

		<div class="mb-3">
		<label class="form-label">Your Name</label>
		<input type="text" class="form-control" id="username" name="username">
		</div>

		<div class="mb-3">
		<label class="form-label">Share your Message</label>
		<textarea class="mb-3 form-control" rows="8"></textarea>
		</div>

		<button type="submit" class="btn btn-primary" name="sendMail">Submit</button>
		</form>


</div>
