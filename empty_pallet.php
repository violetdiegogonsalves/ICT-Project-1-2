<?php
 require_once("include/config.php");
 $connect = db_connect();
 $query = "SELECT * FROM plc_assets";
 $result = mysqli_query($connect, $query);
 ?>

<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



	<link href="css/rwd.css" rel="stylesheet" type="text/css">
	<script src="js/nav.js"></script>
    <script src="js/img.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>Emty Pallet System</title>
</head>
<body>

<body onLoad="run_first()">
		<?php include("include/nav.inc") ?>

<div class="col-12 col-s-12">    
      <img src="images/plc1.jpg" alt="empty_pallet" usemap="#image-map-pallet">
      <map name="image-map-pallet">
    <area target="" alt="RF ROLLER CONVEYOR-P002" title="RF ROLLER CONVEYOR-P002"  coords="751,1027,946,1114" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="1" class="view_data">
    <area target="" alt="SM STACKER-P004" title="SM STACKER-P004"  coords="1013,1024,1221,1239" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="2" class="view_data">
    <area target="" alt="KAS CHAIN IN/OUT TRANSFER 3/4-P008 " title="KAS CHAIN IN/OUT TRANSFER 3/4-P008 "  coords="1140,671,1677,765" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="3" class="view_data">
    <area target="" alt="KAS CHAIN IN/OUT TRANSFER 3/4-P008" title="KAS CHAIN IN/OUT TRANSFER 3/4-P008"  coords="1275,1065,1422,1246" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="3" class="view_data">
    <area target="" alt="VW TRANSFER CAR-P010" title="VW TRANSFER CAR-P010"  coords="1060,1333,1201,1521,2093,2219" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="1" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P012" title="KF CHAIN CONVEYOR 2 X 3/4-P012"  coords="1255,1291,1456,1552" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="4" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P112" title="KF CHAIN CONVEYOR 2 X 3/4-P112"  coords="1610,1071,1805,1259" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="5" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P122" title="KF CHAIN CONVEYOR 2 X 3/4-P122"  coords="1892,1074,2107,1261" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="6" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P132" title="KF CHAIN CONVEYOR 2 X 3/4-P132"  coords="2241,1069,2422,1257" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="7" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P212" title="KF CHAIN CONVEYOR 2 X 3/4-P212"  coords="2764,1297,2576,1036" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="8" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P222" title="KF CHAIN CONVEYOR 2 X 3/4-P222"  coords="2898,1051,3066,1286" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="9" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P232" title="KF CHAIN CONVEYOR 2 X 3/4-P232"  coords="3207,1024,3421,1293" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="10" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P312" title="KF CHAIN CONVEYOR 2 X 3/4-P312"  coords="1608,1916,1802,2113" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="11" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P322" title="KF CHAIN CONVEYOR 2 X 3/4-P322"  coords="1928,1904,2106,2114" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="12" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P332" title="KF CHAIN CONVEYOR 2 X 3/4-P332"  coords="2249,1901,2434,2126" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="13" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P412" title="KF CHAIN CONVEYOR 2 X 3/4-P412"  coords="2562,1914,2754,2132" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="14" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P422" title="KF CHAIN CONVEYOR 2 X 3/4-P422"  coords="2865,1917,3071,2134" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="15" class="view_data">
    <area target="" alt="KF CHAIN CONVEYOR 2 X 3/4-P432" title="KF CHAIN CONVEYOR 2 X 3/4-P432"  coords="3189,1920,3399,2134" shape="rect" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="16" class="view_data">
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
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
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
      url:"include/plc_select.php",
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
	  $('#subModalBody').html('Loading');
      sub_id = $(this).attr("id");
    $.ajax({
      url:"include/plc_select_sub.php",
      method:"post",
      data:{subComponent:subComponent,assets_id :assets_id, sub_id :sub_id },

      error: function(){
        alert("error");
      }

    }).done(function(data){
        $('#subModalBody').html(data);
        $('#subModal').modal("show");
		if($('#link').val()==''){
		$('#link').show();
		$('#check').show();
	  } else {
		$('#edit').show();
	  }
    });
  };

</script>
<script>
$(document).ready(function(){
     $('#submit_form').on('submit', function(e){
          e.preventDefault();
          $.ajax({
               url:"include/plc_upload_subimg.php",
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

<footer>
<?php include("include/footer.inc") ?>

</footer>
</body>
</html>
