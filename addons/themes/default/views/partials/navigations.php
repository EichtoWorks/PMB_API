<ul>
	<?php if($this->current_user ): ?>
    <li>
        <a href="<?php echo BASE_URL. 'dashboard' ?>"><?php echo $this->current_user->first_name .' '. $this->current_user->last_name ?> <i class="icon fa-angle-down"></i></a>
        
        <ul>
            <li><a href="<?php echo BASE_URL. 'auth/edit_user' ?>">Edit Profile</a></li>
            <li><a href="<?php echo BASE_URL. 'products' ?>">Products</a></li>
            <li><a href="<?php echo BASE_URL. 'messages' ?>">Messages</a></li>
            <li><a href="<?php echo BASE_URL. 'products/fav' ?>">Fav Lists</a></li>
            <li><a href="<?php echo BASE_URL.'logout';?>">Logout</a></li>
        </ul>
    </li>
     <?php endif; ?>

    <?php if(!$this->current_user): ?>
    <li><a href="<?php echo BASE_URL.'login';?>" class="button">Login</a></li>
    <li><a href="<?php echo BASE_URL.'register';?>" class="button">Sign Up</a></li>
    <?php endif; ?>
</ul>