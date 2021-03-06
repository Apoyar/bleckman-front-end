<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		<div class="row well" style="border-bottom: 15px solid #E25176;padding-bottom: 40px;">
			<h4>Manage Warehouses</h4>
				<?php
		          if(isset($_SESSION['message']['warehouse_panel'])){
		            echo'
		            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
		              '.$_SESSION['message']['warehouse_panel'].'
		            </div>';
		          }
	        	?>
	        	<div style="padding: 15px;">
					<form method="POST" action="submitWarehouses">
						<div class="row">
							<button type="button" data-toggle="modal" data-target="#add-Warehouse-modal" id='add-Warehouse' class='btn btn-raised btn-warning pull-right'>Add</button>
							<button type="submit" id='save-roles' class='btn btn-raised btn-success pull-right'>Save</button>
						</div>
						<div class="row">
							<h4>Edit Warehouse Details</h4>
		              		<?php
		              			//echo json_encode($allWarehouses);
								//echo count($allWarehouses);
		              			for ($i=0; $i<count($allWarehouses); $i++) {

		              				echo '<div style="border: 1px solid #ddd; padding: 20px;margin-bottom:5px;">';
		              				echo '<input type="hidden" id="PKWarehouseID" name="Warehouses[' . $i .'][PKWarehouseID]" value="'.$allWarehouses[$i]['PKWarehouseID'].'">';
				              		echo '<div class="row">
							                	<div class="col-md-6">
									              	<div class="form-group label-floating">
									                  <label class="control-label">Name</label>
									                  <input type="text" name="Warehouses[' . $i .'][Name]" class="form-control" value="'. $allWarehouses[$i]['Name'] .'">

									                  <span class="help-block">Edit Warehouse Name</span>
									                </div>
									            </div>
												<div class="col-md-6">
									              	<div class="form-group label-floating">
									                  <label class="control-label">Warehouse ID</label>
									                  <input type="text" name="Warehouses[' . $i .'][WarehouseID]" class="form-control" value="'. $allWarehouses[$i]['WarehouseID'] .'">

									                  <span class="help-block">Edit Warehouse ID</span>
									                </div>
									            </div>
							          		</div>';
				              		echo '<div class="row">
							                	<div class="col-md-6">
									              	<div class="form-group label-floating">
									                  <label class="control-label">Street1</label>
									                  <input type="text" name="Warehouses[' . $i .'][Street]" class="form-control" value="'. $allWarehouses[$i]['Street'] .'">
									                  <span class="help-block">Edit Street1</span>
									                </div>
									            </div>
							                	<div class="col-md-6">
									              	<div class="form-group label-floating">
									                  <label class="control-label">Street2</label>
									                  <input type="text" name="Warehouses[' . $i .'][Street2]" class="form-control" value="'. $allWarehouses[$i]['Street2'] .'">
									                  <span class="help-block">Edit Street2</span>
									                </div>
									            </div>

							          		</div>';
							        echo '<div class="row">
							                	<div class="col-md-6">
									              	<div class="form-group label-floating">
									                  <label class="control-label">House Number</label>
									                  <input type="text" name="Warehouses[' . $i .'][HouseNumber]" class="form-control" value="'. $allWarehouses[$i]['HouseNumber'] .'">
									                  <span class="help-block">Edit House Number</span>
									                </div>
									            </div>
							                	<div class="col-md-6">
									              	<div class="form-group label-floating">
									                  <label class="control-label">PostalCode</label>
									                  <input type="text" name="Warehouses[' . $i .'][PostalCode]" class="form-control" value="'. $allWarehouses[$i]['PostalCode'] .'">
									                  <span class="help-block">Edit PostalCode</span>
									                </div>
									            </div>
							        		</div>';
				              		echo '<div class="row">
							                	<div class="col-md-6">
									              	<div class="form-group label-floating">
									                  <label class="control-label">City</label>
									                  <input type="text" name="Warehouses[' . $i .'][City]" class="form-control" value="'. $allWarehouses[$i]['City'] .'">
									                  <span class="help-block">Edit City</span>
									                </div>
									            </div>
							                	<div class="col-md-6">
									              	<div class="form-group label-floating">
									              		<label class="control-label">Country</label>
									                  	<select class="form-control" name="Warehouses[' . $i .'][Country]">
									                  	<option value="-1">Select a Country &darr;</option>';
									                  	for ($j=0; $j<count($allCountries); $j++) { 
									                  		if ( $allCountries[$j]['IsActive'] ) {
									                  			if ( $allWarehouses[$i]['Country'] == $allCountries[$j]['PKCountryId']) {
									                  				echo '<option selected="selected" value="' . $allCountries[$j]['PKCountryId'].'">' . $allCountries[$j]['CountryName'] . '</option>';
									                  			} else {
									                  				echo '<option value="' . $allCountries[$j]['PKCountryId'].'">' . $allCountries[$j]['CountryName'] . '</option>';
									                  			}
									                  		}
									                  	}
									                  	
									            echo '</select>
									                 
									                </div>

									            </div>

							          		</div>';
							        echo '<button type="button" data-toggle="modal" data-target="#delete-warehouse-modal'.$allWarehouses[$i]['PKWarehouseID'].'" class="btn btn-raised btn-danger btn-warning pull-right">Delete</button><br><br>';
							        echo '</div>';
									//delete warehouse modal
									echo '<div class="modal fade" id="delete-warehouse-modal'.$allWarehouses[$i]['PKWarehouseID'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								              <div class="modal-dialog" role="document">
								                <div class="modal-content">
								                  <form method="POST" action="deleteWarehouse">
								                  <div class="modal-header">
								                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								                    <h4 class="modal-title" id="myModalLabel">Delete Warehouse - '. $allWarehouses[$i]['Name'].'?</h4>
								                  </div>
								                  <div class="modal-body">
								                    <p>Are you sure you want to delete this Warehouse?</p>';
								    echo '<input type="hidden" name="PKWarehouseID" value="'. $allWarehouses[$i]['PKWarehouseID'].'">';
						            echo'
						                  </div>
						                  <div class="modal-footer">
						                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						                    <button type="submit" class="btn btn-danger">Delete</button>
						                  </div>
						                  </form>
						                </div>
						              </div>
						            </div>
						            ';
					          	}
			          		?>
			          	
			          	</div>
			        </form>
		        </div>
	    </div>
	</div>
</div>

        <!-- Add Warehouses Modal -->
        <div class="modal fade" id="add-Warehouse-modal" tabindex="-1" role="dialog" aria-labelledby="myUserLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myUserLabel" >Add a Warehouse</h4>
	              </div>
	              <form method="POST" action="submitWarehouses" id="add-warehouse-form">
		              <div class="modal-body">
			                <div class="row">
			                	<div class="col-md-6">
					              	<div class="form-group label-floating">
					                  <label class="control-label">Name</label>
					                  <input id="Name" type="text" name="Warehouses[0][Name]" class="form-control" value="">
					                  <span class="help-block">Enter Warehouse Name</span>
					                </div>
					            </div>
								<div class="col-md-6">
					              	<div class="form-group label-floating">
					                  <label class="control-label">Warehouse ID</label>
					                  <input id="Name" type="text" name="Warehouses[0][WarehouseID]" class="form-control" value="">
					                  <span class="help-block">Enter Warehouse ID</span>
					                </div>
					            </div>
			          		</div>
							<div class="row">
				            	<div class="col-md-6">
					              	<div class="form-group label-floating">
									    <label class="control-label">Street1</label>
							            <input type="text" name="Warehouses[0][Street]" class="form-control" value="">
				   	                    <span class="help-block">Enter Street1</span>
									</div>
					            </div>
				            	<div class="col-md-6">
					              	<div class="form-group label-floating">
									    <label class="control-label">Street2</label>
							            <input type="text" name="Warehouses[0][Street2]" class="form-control" value="">
				   	                    <span class="help-block">Enter Street2</span>
									</div>
					            </div>
			          		</div>
			          		<div class="row">
							    <div class="col-md-6">
								   	<div class="form-group label-floating">
									    <label class="control-label">House Number</label>
									    <input type="text" name="Warehouses[0][HouseNumber]" class="form-control" value="">
									    <span class="help-block">Enter House Number</span>
									</div>
								</div>
			                	<div class="col-md-6">
									<div class="form-group label-floating">
									    <label class="control-label">PostalCode</label>
									    <input type="text" name="Warehouses[0][PostalCode]" class="form-control" value="">
									    <span class="help-block">Enter PostalCode</span>
									</div>
								</div>
			          		</div>
							<div class="row">
							    <div class="col-md-6">
									<div class="form-group label-floating">
									    <label class="control-label">City</label>
							            <input type="text" name="Warehouses[0][City]" class="form-control" value="">
				  	                    <span class="help-block">Enter City</span>
						            </div>
					            </div>
							    <div class="col-md-6">
					              	<div class="form-group label-floating">
					              		<label class="control-label">Country</label>
					                  <?php
					                  	//echo json_encode($allCountries);
					                  	echo '<select class="form-control" name="Warehouses[0][Country]">';
					                  	echo '<option value="-1">Select a Country &darr;</option>';
					                  	for ($i=0; $i<count($allCountries); $i++) { 
					                  		if ( $allCountries[$i]['IsActive'] ) {
					                  			echo '<option value="' . $allCountries[$i]['PKCountryId'].'">' . $allCountries[$i]['CountryName'] . '</option>';
					                  		}
					                  	}
					                  	echo '</select>';
					                  ?>
					                </div>
					            </div>
							</div>
			          </div>
		              <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                <button type="submit" class="btn btn-success">save</button>
		              </div>
              	</form>
            </div>
          </div>
        </div>