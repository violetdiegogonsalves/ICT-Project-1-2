<?php
 require_once("include/config.php");
 $connect = db_connect();
 $query = "SELECT * FROM fps_assets";
 $result = mysqli_query($connect, $query);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



	<link href="css/rwd.css" rel="stylesheet" type="text/css">
	<script src="js/nav.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>Full Pallet System</title>
</head>
<body onLoad="run_first()">
		<?php include("include/nav.inc") ?>
    <div class="col-12 col-s-12">
          <img src="images/FPS.jpg" alt="empty_pallet" usemap="#image-map-fullpallet">
          <map name="image-map-fullpallet">
            <area target="" alt="P502 - VW TRANSFER CAR" title="P502 - VW TRANSFER CAR" coords="3,333,56,360" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="1" class="view_data">
            <area target="" alt="P504 - KF CHAIN CONVEYOR 2 X 3/4" title="P504 - KF CHAIN CONVEYOR 2 X 3/4" coords="547,305,617,388" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="3" class="view_data">
            <area target="" alt="P506 - KF CHAIN CONVEYOR 2 X 3/4" title="P506 - KF CHAIN CONVEYOR 2 X 3/4" coords="708,159,802,297" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="4" class="view_data">
            <area target="" alt="W002 - RF ROLLER CONVEYOR" title="W002 - RF ROLLER CONVEYOR" coords="614,142,697,215" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="5" class="view_data">
            <area target="" alt="W004 -  KAS CHAIN IN/OUT TRANSFER 3/4" title="W004 -  KAS CHAIN IN/OUT TRANSFER 3/4" coords="546,66,610,290" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="6" class="view_data">
            <area target="" alt="W006 - RF ROLLER CONVEYOR" title="W006 - RF ROLLER CONVEYOR" coords="489,156,543,227" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="7" class="view_data">
            <area target="" alt="W008 - KF CHAIN CONVEYOR 2 X 3/4" title="W008 - KF CHAIN CONVEYOR 2 X 3/4" coords="404,154,480,283" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="8" class="view_data">
            <area target="" alt="W010 - RF ROLLER CONVEYOR" title="W010 - RF ROLLER CONVEYOR" coords="334,158,393,247" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="9" class="view_data">
            <area target="" alt="W012 - STFM ACCUMULATION RF MECH." title="W012 - STFM ACCUMULATION RF MECH." coords="119,126,329,237" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="10" class="view_data">
            <area target="" alt="W014 - RF ROLLER CONVEYOR" title="W014 - RF ROLLER CONVEYOR" coords="18,135,114,218" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="11" class="view_data">
          </map>
    </div>
    <script type="text/javascript" src="js/imageMapResizer.min.js"></script>

    <div id="dataModal" class="modal fade" data-keyboard="false" data-backdrop="static">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
    					<h4 class="modal-title">ASSET DESCRIPTION</h4>
                         <button onclick="window.location.reload();" type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body" id="assets_detail">
                    </div>
                    <div class="modal-footer">
                         <button onclick="window.location.reload();" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
               </div>
          </div>
     </div>
     <div class="modal fade" id="subModal" data-keyboard="false" data-backdrop="static">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h3> Sub Component Description</h3>
                             <button type="button" class="close" data-dismiss="modal" data-backdrop="static">&times;</button>
                         </div>

                         <div class="modal-body" id="subassets_detail">
                           <div id="subModalBody">

                           </div>

                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal" data-target="#subModal">
                                 Close
                             </button>
                         </div>
                     </div>
                 </div>
     </div>

     <script>
     var assets_id;
     $(function(){
       $('.view_data').click(function(){
     	$('#assets_detail').html('Loading');
         assets_id = $(this).attr("id");
         $.ajax({
           url:"include/fps_select.php",
           method:'post',
           data:{assets_id:assets_id},
         }).done(function(data){
           $('#assets_detail').html(data);
           $('#dataModal').modal("show");
		    if($('#link').val()==''){
		$('#link').show();
		$('#check').show();
	  } else {
		$('#edit').show();
	  }
         });
       });
     });
     </script>

     <script>
       var subComponent;
       function loadSub(){
         var subComponent = $("#subComponent option:selected").text();
         $.ajax({
           url:"include/fps_select_sub.php",
           method:"post",
           data:{subComponent:subComponent,assets_id :assets_id },

           error: function(){
             alert("error");
           }

         }).done(function(data){
             $('#subModalBody').html(data);
             $('#subModal').modal("show");
         });
       };

     </script>

     <script>
     $(document).ready(function(){
          $('#submit_form').on('submit', function(e){
               e.preventDefault();
               $.ajax({
                    url:"include/fps_upload_subimg.php",
                    method:"POST",
                    data:new FormData(this),
                    contentType:false,
                    //cache:false,
                    processData:false,
                    success:function(data)
                    {
                         $('#image_preview').html(data);
                         $('#image_file').val('');
                         $('#subModalBody').html(data);
                    }
               })
          });
          $(document).on('click', '#remove_button', function(){
               if(confirm("Are you sure you want to remove this image?"))
               {
                    var path = $('#remove_button').data("path");
                    $.ajax({
                         url:"plc_delete.php",
                         type:"POST",
                         data:{path:path},
                         success:function(data){
                              if(data != '')
                              {
                                   $('#image_preview').html('');
                              }
                         }
                    });
               }
               else
               {
                    return false;
               }
          });
     });
     </script>

</body>
<footer>
<?php include("include/footer.inc") ?>
</footer>

</html>
