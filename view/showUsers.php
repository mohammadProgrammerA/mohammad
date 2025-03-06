<h1 style='backgroun-color:red;font-color:red;'>this is a show users</h1>
<?php
   echo " <br>😎✌🏻<br>";
     
   foreach ($data as $d){
?>
	<div style="width:720px;height:72px;background-color:yellow;margin-top:20px;margin-left:250px;">

	   <div style="width:140px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		   <?php echo $d['name'];?>
		</div>
	   <div style="width:140px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $d['family'];?>
		</div>
	   <div style="width:140px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $d['age'];?>
		</div>
	    
		<a href="http://localhost/routerDynamic/view/editeUserForm/<?php echo $d['id'];?>"><div style="width:72px;height:30px;background-color:skyblue;float:left;margin-top:20px;margin-left:15px;">edite</div></a>
		<a href="http://localhost/routerDynamic/view/deleteUser/<?php echo $d['id'];?>"><div style="width:72px;height:30px;background-color:red;float:left;margin-top:20px;margin-left:15px;">delet</div></a>
		
	</div>

<?php
   }   
?>