<?php
 require_once("include/config.php");
 $connect = db_connect();
 $query = "SELECT * FROM assets";
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

	<title>Linfox</title>
</head>



<body onLoad="run_first()">
		<?php include("include/nav.inc") ?>

<div class="col-12 col-s-12">
<img src="images/floorplan.png" alt="conveyor layout" usemap="#image-map" id="img1">

<map name="image-map" class="default">

    <area shape= "rect" coords="320,251,203,207" target="" alt="Inclined tunnel conv" title="Inclined tunnel conv" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="1" class="view_data">
<area shape= "rect" coords="203,358,323,410" target="" alt="Horizontal tunnel conv" title="Horizontal tunnel conv" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="2" class="view_data">
<area shape= "rect" coords="233,437,352,483" target="" alt="75 Curve conveyor infeed" title="75 Curve conveyor infeed" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="3" class="view_data">
<area shape= "rect" coords="287,571,399,621" target="" alt="Wall infeed conveyor Top" title="Wall infeed conveyor Top" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="4" class="view_data">
<area shape= "rect" coords="286,682,403,731" target="" alt="Wall roller bed Top" title="Wall roller bed Top" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="5" class="view_data">
<area shape= "rect" coords="311,863,433,912" target="" alt="90 Curve conv, Pre-decline" title="90 Curve conv, Pre-decline" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="6" class="view_data">
<area shape= "rect" coords="776,860,903,902" target="" alt="Decline infeed conveyor" title="Decline infeed conveyor" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="7" class="view_data">
<area shape= "rect" coords="1096,856,1214,904" target="" alt="Infeed accumulation roller bed" title="Infeed accumulation roller bed" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="8" class="view_data">
<area shape= "rect" coords="1189,746,1294,793" target="" alt="Gapping conveyor 1 infeed" title="Gapping conveyor 1 infeed" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="9" class="view_data">
<area shape= "rect" coords="1303,748,1410,793" target="" alt="Gapping conveyor 2 infeed" title="Gapping conveyor 2 infeed" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="10" class="view_data">
<area shape= "rect" coords="1342,860,1445,908" target="" alt="Merge conveyor" title="Merge conveyor" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="11" class="view_data">
<area shape= "rect" coords="1491,947,1571,984" target="" alt="Gearmotor" title="Gearmotor" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="12" class="view_data">
<area shape= "rect" coords="1362,943,1462,979" target="" alt="Gearmotor" title="Gearmotor" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="13" class="view_data">
<area shape= "rect" coords="1442,807,1550,853" target="" alt="Post-merge roller bed" title="Post-merge roller bed" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="12" class="view_data">
<area shape= "rect" coords="1586,857,1696,904" target="" alt="90 Curve conv. Post-merge" title="90 Curve conv. Post-merge" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="13" class="view_data">
<area shape= "rect" coords="1499,380,1611,424" target="" alt="Mezzanine longitudinal conveyor" title="Mezzanine longitudinal conveyor" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="14" class="view_data">
<area shape= "rect" coords="1491,320,1615,354" target="" alt="Gapping conveyor 3 pre-sort" title="Gapping conveyor 3 pre-sort" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="15" class="view_data">
<area shape= "rect" coords="1491,278,1613,307" target="" alt="Gapping conveyor 4 pre-sort" title="Gapping conveyor 4 pre-sort" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="16" class="view_data">
<area shape= "rect" coords="1593,194,1693,234" target="" alt="90 Curved conv. Pre-sort" title="90 Curved conv. Pre-sort" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="17" class="view_data">
<area shape= "rect" coords="1482,20,1589,64" target="" alt="Gapping conveyor 5 pre-sort" title="Gapping conveyor 5 pre-sort" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="18" class="view_data">
<area shape= "rect" coords="1367,19,1469,64" target="" alt="Pre-sort conveyor" title="Pre-sort conveyor" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="19" class="view_data">
<area shape= "rect" coords="687,167,745,191" target="" alt="Shoe-sorter" title="Shoe-sorter" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="20" class="view_data">
<area shape= "rect" coords="570,122,670,163" target="" alt="Post-sort conveyor" title="Post-sort conveyor" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="21" class="view_data">
<area shape= "rect" coords="456,198,551,242" target="" alt="Curved conveyor Post-sort" title="Curved conveyor Post-sort" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="22" class="view_data">
<area shape= "rect" coords="531,631,658,682" target="" alt="Wall recirc. conveyor Bottom" title="Wall recirc. conveyor Bottom" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="23" class="view_data">
<area shape= "rect" coords="531,803,662,845" target="" alt="Wall roller bed  Bottom" title="Wall roller bed  Bottom" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="24" class="view_data">
<area shape= "rect" coords="494,916,600,959" target="" alt="Curved conveyor Recirc" title="Curved conveyor Recirc" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="25" class="view_data">
<area shape= "rect" coords="775,919,914,962" target="" alt="Recirc. rubber conveyor" title="Recirc. rubber conveyor" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="26" class="view_data">
<area shape= "rect" coords="1097,919,1206,962" target="" alt="Recirc. accumulation roller bed" title="Recirc. accumulation roller bed" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="27" class="view_data">
<area shape= "rect" coords="1186,1027,1294,1070" target="" alt="Gapping conveyor 3 Recirc" title="Gapping conveyor 3 Recirc" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="28" class="view_data">
<area shape= "rect" coords="1301,1027,1408,1066" target="" alt="Gapping conveyor 4 Recirc" title="Gapping conveyor 4 Recirc" style="outline-color: darkred" data-toggle="modal" data-target="#dataModal" id="29" class="view_data">

</map>


</div>

<script type="text/javascript" src="js/imageMapResizer.min.js"></script>

<div id="dataModal" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title">ASSET DESCRIPTION</h4>
                     <button onclick="window.location.reload();"  type="button" class="close" data-dismiss="modal">x</button>

                </div>
                <div class="modal-body" id="assets_detail" data-keyboard="false" data-backdrop="static">
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
                         <h3>Sub Component Description</h3>
                         <button  type="button" class="close" data-dismiss="modal">x</button>
                     </div>

                     <div class="modal-body" id="subassets_detail">
                       <div id="subModalBody">

                       </div>

                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal" data-target="#subModal">Close</button>
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
      url:"include/select.php",
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
    subComponent = $("#subComponent option:selected").text();
    $.ajax({
      url:"include/select_sub.php",
      method:"post",
      data:{subComponent:subComponent,assets_id :assets_id },

      error: function(){
        alert("error");
      }
    }).done(function(data){
        $('#subassets_detail').html(data);
        $('#subdataModal').modal("show");

		if($('#sublink').val()==''){
			$('#sublink').show();
			$('#checkSub').show();
		  } else {
			$('#editSub').show();
		  }
    });
  };

</script>
<script>
$(document).ready(function(){
     $('#submit_form').on('submit', function(e){
          e.preventDefault();
          $.ajax({
               url:"include/upload_subimg.php",
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
                    url:"delete.php",
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
