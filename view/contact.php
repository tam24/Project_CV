<div class="container">
	<br>
		<div class="panel panel-primary" style="max-width:400px;margin:auto;">
			<div class="panel-heading">
				<h3 class="panel-title">Contact me</h3>
			</div>
			<div class="panel-body">
			 <form action="" method="post">
          <div class="form-group">
            <label for="InputLastName">Last Name *</label>
            <input type="text" name="InputLastName" class="form-control" id="InputLastName" placeholder="Last Name" value="<?php echo $lastName; ?>" />
          </div>

          <div class="form-group">
            <label for="InputFirstName">Name *</label>
            <input type="text" name="InputFirstName" class="form-control" id="InputFirstName" placeholder="Name" value="<?php echo $firstName; ?>" />
          </div>

          <div class="form-group">
            <label for="InputEmail">Email address *</label>
            <input type="email" name="InputEmail" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $email; ?>" />
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
            <label for="Textarea">Your message here *</label>
            <textarea class="form-control" name="Inputtext" id="Inputtext" rows="5" value="<?php echo $text; ?>"></textarea>
          </div>

			 </form>
			</div>
		</div>
</div>
