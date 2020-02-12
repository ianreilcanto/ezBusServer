<div class="container mx-auto d-block">    
        <img src="<?php echo base_url();  ?>/assets/img/icon.png" class="mx-auto d-block" style="width:7%">
        <h4>Sign In</h4>
        <form action="<?php echo base_url();  ?>login/checkCredentials" method="POST">
            <div class="form-group">
                <label for="user">Username:</label>
                <input type="username" class="form-control" placeholder="Enter Username" name="username">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password">
            </div>
           
            <button type="submit" class="btn">Sign In</button>
        </form>
</div>
