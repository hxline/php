<?php 
	session_start();
	if (isset($_SESSION['data'])) {
?>
	<!DOCTYPE html>
	<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<body>
		<a href="form.php"><button>ADD</button></a>
		<button id="addBtn">ADD With Modal</button>
		<table border="3">
			<tr>
				<th width="70px">String</th>
				<th width="70px">Integer</th>
				<th width="120px">Action</th>
				<th width="160px">Action with modal</th>
			</tr>
			<?php
				for ($i=0; $i < sizeof($_SESSION['data']); $i++) { 
			?>
			<tr>
				<td><?php echo $_SESSION['data'][$i]['string'] ?></td>
				<td><?php echo $_SESSION['data'][$i]['int'] ?></td>
				<td><a href="action.php?action=delete&id=<?php echo $i ?>">Delete</a> || <a href="form.php?action=update&id=<?php echo $i ?>">Update</a></td>
				<td><button onclick="deleteData(<?php echo $i ?>);" >Delete</button> || <button onclick="updateData(<?php echo $i.",'".$_SESSION['data'][$i]['string']."','".$_SESSION['data'][$i]['int']."'" ?>);" >Update</button></td>
			</tr>
			<?php
				}
			?>
		</table>
		<!-- Modal -->
		<div class="container">
		  <div class="modal fade" id="myForm" role="dialog">
		    <div class="modal-dialog">
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header" style="padding:10px 9px;">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4>Submit Data</h4>
		        </div>
		        <form id="formData" role="form" method="POST">
			        <div class="modal-body" style="padding:10px 5px;">
			            <div class="form-group">
			              <label>String</label>
			              <input type="text" class="form-control" id="txtStr" name="string" value="" placeholder="STRING">
			            </div>
			            <div class="form-group">
			              <label>Integer</label>
			              <input type="text" class="form-control" id="txtInt" name="int" value="" placeholder="INTEGER">
			            </div>
			        </div>
			        <div class="modal-footer">
			          <button type="submit" class="btn btn-success btn-default pull-right">Save</button>
			          <button class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
			        </div>
		        </form>
		      </div>
		    </div>
		  </div> 
		  <div class="modal fade" id="myDelete" role="dialog">
		    <div class="modal-dialog">
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header" style="padding:10px 9px;">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4>Confirmation</h4>
		        </div>
			        <div class="modal-body" style="padding:10px 5px;">
			            <div class="form-group">
			              <label>Yakin delete ?</label>
			            </div>
			        </div>
			        <div class="modal-footer">
			          <a id="deleteBtn" class="btn btn-success btn-default pull-right">Yes</a>
			          <button class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
			        </div>
		      </div>
		    </div>
		  </div> 
		</div>
		<!-- end Modal -->
		<script>
			$(document).ready(function(){
			    $("#addBtn").click(function(){
			    	$("#formData").attr("action", "action.php?action=add");
			    	$("#txtStr").val("");
			    	$("#txtInt").val("");
			        $("#myForm").modal();
			    });
			});

			function updateData(id, str, int) {
				$("#formData").attr("action", "action.php?action=update&id=" + id);
			    $("#txtStr").val(str);
			    $("#txtInt").val(int);
				$("#myForm").modal();
			}

			function deleteData(id) {
				$("#deleteBtn").attr("href", "action.php?action=delete&id=" + id);
				$("#myDelete").modal();
			}
		</script>
	</body>
	</html>
<?php
		var_dump($_SESSION['data']);
	}
?>