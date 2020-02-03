<div class="container mx-auto d-block">    
        <img src="<?php echo base_url();  ?>/assets/img/icon.png" class="mx-auto d-block" style="width:7%">
        <h4>Sign In</h4>
        <form action="/action_page.php">
            <div class="form-group">
                <label for="user">Username:</label>
                <input type="username" class="form-control" id="user" placeholder="Enter Username" name="user">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
            </div>
            <button type="submit" class="btn">Sign In</button>
        </form>
</div>
