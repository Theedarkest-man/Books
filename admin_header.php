
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
<!-- This is the styling of our Navbar -->

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">
           
         <i class="fa-solid fa-house"></i>
        
        <span class="text">Home</span>
         </a>
         <a href="admin_products.php">
          
         <i class="fa-solid fa-book"></i>
     
         <span class="text">Books</span>
         </a>
         <a href="admin_orders.php">
       
         <i class="fa-solid fa-truck"></i>
         
         <span class="text">Student Order</span>
         </a>
         <a href="admin_users.php">
        
         <i class="fa-solid fa-user"></i>
       
         <span class="text">User</span>
         </a>
         <a href="admin_contacts.php">
     
         <i class="fa-solid fa-message"></i>
       
         <span class="text">Messages</span>
         </a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
        
      </div>

   </div>

</header>