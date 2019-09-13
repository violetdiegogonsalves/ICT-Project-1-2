<?php
session_start();
require_once("config.php");
$connect = db_connect();

 $subComponent= $_POST["subComponent"];
 $assets_id= $_POST["assets_id"];

 if(isset($subComponent))
 {
   $sql = "SELECT * FROM assets_sub WHERE description = '".$subComponent."'";
   $result = $connect->query($sql);
   if ($result->num_rows > 0)
   {
      $row = $result->fetch_assoc();
      
      
     $dp = str_replace("../","",$row["image"]);
     

if(strtolower($_SESSION['valid_user'])!="test")
{
?>
<style style="text/css">
    .check
    {
        display:none;
    }
</style>
<?php }


$output =<<< TABLE
     <table class="table table-bordered">
         <tr>
              <td><Strong>Component Name</Strong></td>
              <td>{$row["description"]}</td>
         </tr>
         <tr>
              <td><Strong>Component item Number</Strong></td>
              <td>{$row["item_number"]}</td>
         </tr>
        <script type="text/javascript">
							function saveLink1(){
								if($('#link1').val()==''){
									alert("Please enter value and then click save.");
									return;
								}
								$.ajax({
									url:"include/saveLink_sub.php",
									method:'post',
									data:{link1:$('#link1').val(),sub_id:$('#sub_id').val()},
								}).done(function(data){
									
									$('#actualLink1').html($('#link1').val());
									$('#actualLink1').attr('href',$('#link1').val());
									$('#check1').hide();
									$('#edit1').show();
									$('#link1').hide();
									$('#actualLink1').show();
								});
							}
							function showEdit1(){
								$('#link1').show();
								$('#check1').show();
								$('#edit1').hide();
								$('#actualLink1').hide();
							}
						</script>
         <tr>
              <td>
                           
              <Strong>Link</Strong>
              <button id="edit1" type="button" class="btn btn-default" style="float: right;" onclick="showEdit1()">Edit</button>
			  <button id="check1" type="button" class="btn btn-default" style="float: right;display:none;" onclick="saveLink1()">Save</button>
              </td>
              
              <td>
              <a href="{$row["link"]}" target="_blank"  id="actualLink1">{$row["link"]}</a>
              <input type="text" name="link1" id="link1" style="width: 100%;display:none;" value="{$row["link"]}">
              </td>
              
              
         </tr>
         
		 <tr>
			<td colspan='2'><label>Upload image</label></td>
		</tr>
		 
        	   
        
		<tr class="check">
			<td colspan='2'>
				  
					<input type="file" name="file" id="file" accept="image/*" style="float: left;">
					<button type="button" class="btn btn-success" style="float: centre;" onclick="encodeImagetoBase6432($('#file'))" >Upload Image</button>
					<button type="button" class="btn btn-danger" style="float: right;" onclick="deleteImage64()" >Remove Image</button>
					<input type="hidden" name="sub_id" id="sub_id" value='{$row["id"]}' />
				
			</td>
		</tr>
      
      	
		<tr>
			<td colspan='2'><img id="assetSubImage" style="width:560px; height:250px" src='{$dp}'> </td>
		</tr>
     </table>



TABLE;

$output .= <<< SCRIPT2
<script>
                               function encodeImagetoBase6432(object) {
								if(object.val()==null || object.val()==''){
									alert('Please select image and then click upload button.');
									return;
								}
								var file = object.prop('files')[0];
								var reader = new FileReader();
								reader.onloadend = function() {

									$('#assetSubImage').attr('src',reader.result);
									$.ajax({
									  url:"include/upload_subimg.php",
									  method:'post',
									  data:{imageData1:reader.result,sub_id:$('#sub_id').val()},
									}).done(function(data){
									  alert(data);
									});
								}
								reader.readAsDataURL(file);
							}


	                            function deleteImage64(){
								var image1 = $('#assetSubImage').attr('src');
								if(image1!=null && image1!=''){
									if (confirm("Are you sure you want to remove this image from database?")){
										$('#assetSubImage').attr('src',null);
										$.ajax({
										  url:"include/deleteSub.php",
										  method:'post',
										  data:{sub_id:$('#sub_id').val()},
										}).done(function(data){
										  alert(data);
										});
									}
								}
							}
</script>
SCRIPT2;
  echo $output;
   
   
   }
   
 }
 else {
   // code...
 }


 ?>
