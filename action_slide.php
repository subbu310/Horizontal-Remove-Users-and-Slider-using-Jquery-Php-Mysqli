
<?php

 error_reporting(0);
 
 include('connection.php');
 
 if(isset($_POST['action'])){
	 
	 $start = $_POST['page'];
	 
	 $end = 4;
	 
	 if($start != ''){
		 
		$start = $_POST['page'] ;
		 
	 }else{
		 
	    $start = 0;
		
	 }
	 
	 $sqls = "SELECT * FROM `slide_users` WHERE `choose`='no'";
	 
	 $results = mysqli_query($conn, $sqls);
	 
	 $total = mysqli_num_rows($results);
	
	 
	 $sql = "SELECT * FROM `slide_users` WHERE `choose`='no' LIMIT $start , $end";
	 
	 $result = mysqli_query($conn, $sql);
	 
	 while($row = mysqli_fetch_assoc($result)){
		 
		 $userImage = $row['user_image'];
		 
		 $userName = $row['user_name'];
		 
		 $userId = $row['id'];
		 
		 if($userImage == null){
			 
			 $user_image = ' <img src="icon/profile_image.jpg" />';
			 
		 }else{
			 
			  $user_image = ' <img src="'.$userImage.'" />';
			
		 }
		 
		 if($total <= ($start+4)){
			 
			 $slidenext = '<div class="slide-next" style="display:none;">
	
                             <a>&#8250</a>
			 
                           </div>';
		
		 }else{
			 
			 $slidenext = '<div class="slide-next" style="display:block;">
	
                             <a>&#8250</a>
			 
                           </div>';
		 }
		 
		 if($start == 0){
			 
			 $slideprev = '<div class="slide-prev" style="display:none;">
	
                             <a>&#8249</a>
			 
                           </div>';
		
		 }else{
			 
			 $slideprev = '<div class="slide-prev" style="display:block;">
	
                             <a>&#8249</a>
			 
                           </div>';
		 }
		 
		 echo '<div class="users-pannel" id="'.$userId.'">
		 
		        <div class="panel-close" id="'.$userId.'"  data-page="'.$start.'" >
	
                  <a>X</a>
			 
                </div>
	
                <div class="users-image">
	
                     '.$user_image.'
					 
                </div>
		  
		        <div class="users-name">
	
                  <a>'.$userName.'</a>
			 
                </div>
		  
             </div>  
			 
			    
			 '.$slidenext.'
			 
			 '.$slideprev.'';
		 
	 }
	 
	 
 }
 
 if(isset($_POST['action_update_users'])){
	 
	 $userId = $_POST['userId'];
	 
	 $sql = "UPDATE `slide_users` SET `choose`='yes' WHERE `id`='$userId'";
	 
	 $result = mysqli_query($conn, $sql);
	 
	 if($result){
	
     }
	 
 }
 
 
 
 
 
 

?>