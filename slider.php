<!DOCTYPE html>
<html>
<head>

<title>Horizontal slide users</title>
 
<meta charset="utf-8">
  
<meta name="viewport" content="width=device-width, initial-scale=1">
 
 <!----add jquery link----> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
<style>
*{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
.container{
	
	width:100%;
	height:100%;
}
.heading{
	
	width:100%;
	height:100px;
	background-color:#eee;
	border-bottom:1px solid #ccc;
	text-align:center;
}
h2{
	
	color:blue;
	line-height:100px;
	font-size:30px;
}
.users-cointainer{
	
	width:100%;
	max-width:1000px;
	margin:auto;
	height:300px;
	background-color:#eee;
	border:1px solid #ccc;
	margin-top:100px;
	display:flex;
	align-items:center;
	justify-content:space-around;
	position:relative;
	overflow:hidden;
}
.users-pannel{
	
	width:200px;
	height:200px;
	background-color:white;
	border:1px solid #ccc;
	border-radius:5px;
	transition: transform 0.2s;
}
.users-pannel:hover{
	
	transform :scale(1.2);
	background-color:yellow;
}
.users-image{
	
	width:100px;
	margin:auto;
	height:100px;
	margin-top:20px;
	border-radius:50%;
	overflow:hidden;
	
}
.users-image img{
	
	width:100%;
	height:100%;
}
.users-name{
	
	text-align:center;
	margin-top:10px;
	font-size:20px;
}
.slide-next{
	
	width:25px;
	height:25px;
	background-color:#aaa;
	position:absolute;
	border-radius:50%;
	display:inline-block;
	top:50%;
	right:0;
	text-align:center;
	color:white;
	cursor:pointer;
}

.slide-prev{
	
	width:25px;
	height:25px;
	background-color:#aaa;
	position:absolute;
	border-radius:50%;
	display:inline-block;
	top:50%;
	left:0;
	text-align:center;
	color:white;
	cursor:pointer;
}
.slider-next{
	
	animation-direction:alternate;
	position:relative;
	animation : next 0.6s;
}
.slider-prev{
	
	animation-direction:alternate;
	animation : prev 0.6s;
	position:relative;
}

@keyframes next{
	
	0% {background-color:white; left:0; top:0;}
	
	100% {background-color:white; left:-50%; top:0;}
}

@keyframes prev{
	
	0% {background-color:white; left:0; top:0;}
	
	100% {background-color:white; left:+50%; top:0;}
}
.panel-close{
	
	text-align:end;
	margin-top:10px;
	margin-right:15px;
	color:#aaa;
	cursor:pointer;
}
</style>

</head>

<body>
  
 <div class="container">

    <div class="heading">
	
    <h2>Horizontal Remove Users and Slider using Jquery Php Mysqli</h2>

   </div>
   
    <div class="users-cointainer">
	  
	   
    
   </div>

   
 </div> 
   
<script>

  $(document).ready(function(){
	  
	  
	   fetch_users();
	   
	    function fetch_users(page)
	    {
		   
		  var action = 'fetch_users';
		  
		   $.ajax({
			   
			   url:'action_slide.php',
			   
			   method:'post',
			   
			   data:{action:action, page:page},
			   
			   success: function(data){
				   
				  $('.users-cointainer').html(data) 
			   }
		   });
	   }
	   
	   var numb = 0;
	  
	  $(document).on('click','.slide-next',function(){
	  
	     numb = numb + 4;
		 
		 $('.users-pannel').addClass('slider-next');
		 
		 setTimeout(function(){
			 
			 fetch_users(numb);
		 
		 }, 200);
		 
		 
	  });
	  
	  $(document).on('click','.slide-prev',function(){
	  
	     numb = numb - 4;
		 
		 $('.users-pannel').addClass('slider-prev');
		 
		 setTimeout(function(){
			 
			 fetch_users(numb);
		 
		 }, 200);
		 
	  });
	  
	  $(document).on('click','.panel-close',function(){
	  
	     var userId = $(this).attr('id');
		 
		 var page = $(this).data('page');
		 
		 var action = 'update_users';
		  
		   $.ajax({
			   
			   url:'action_slide.php',
			   
			   method:'post',
			   
			   data:{action_update_users:action, userId:userId},
			   
			   success: function(data){
				   
				   $('.users-pannel[id="'+userId+'"]').addClass('slider-next');
		 
		               setTimeout(function(){
			 
			               fetch_users(page);
		 
		              }, 100);
					  
			     }
		   });
		   
	  });
	  
  });
 
</script>

</body>
</html>