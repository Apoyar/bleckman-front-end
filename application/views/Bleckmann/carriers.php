<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-multiselect.js"></script>	
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-multiselect.css">	
<style type="text/css">
	.multiselect-container {
		max-width: 250px;
		overflow-x: auto;
	}
</style>

<div class='col-xs-12 col-md-9' height='100%'>
	<div class='container-fluid'>
		<div class='well' id='ap-panel'  style="border-bottom: 15px solid #E25176; padding-bottom: 40px;" >		
	    	<h3>Global Carriers</h3>
				<div class='row'>
					<div class="col-xs-12 col-md-12">
						<button type="button" data-toggle="modal" data-target="#add-carrier-modal" id='add-carrier' class='add-carrier-pop btn btn-raised btn-warning pull-right'>Add Carrier</button>
					</div>
				</div>
				<br>
				<div class="row">
					<?php
			          if(isset($_SESSION['message']['carrier_panel'])){
			            echo'
			            <div class="alert alert-dismissible alert-' . $_SESSION['message']['alert_status'] . '">
			              '.$_SESSION['message']['carrier_panel'].'</div>';
			          }
			        ?>
			    </div>
			    <div class="row">
			    	<div class="col-md-offset-1 col-md-10">
						<table class='table'>
							<thead>
								<tr>
									<th>Carrier Name</th>
									<th style="align-content: right;">Settings</th>
								</tr>
							</thead>
							<tbody id="carriers-table">
								<?php
									//echo "carriers : " . json_encode($carriers);
									for ($i=0; $i<count($carriers); $i++) {
				              			echo '<input type="hidden" name="PKCarrierID" value="' . $carriers[$i]['PKCarrierID'] . '">
					              			<tr>
						              			<td><br>' .	$carriers[$i]['CarrierName'] . '</td>
						              			<td>
						              				<button type="button" class="btn btn-raised btn-success edit-carrier-pop"  data-toggle="modal" data-target="#add-carrier-modal" id="edit-carrier-' .$carriers[$i]['PKCarrierID'] .'">
						              					Edit
						              				</button>
						              				<button type="button" class="btn btn-raised btn-danger"  data-toggle="modal" data-target="#delete-carrier-modal'. $carriers[$i]['PKCarrierID'] .'" id="delete-carrier" >
						              					delete
						              				</button>
						              			</td>
					              			</tr>';
										echo '<div class="modal fade" id="delete-carrier-modal'.$carriers[$i]['PKCarrierID'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									              <div class="modal-dialog" role="document">
									                <div class="modal-content">
									                  <form method="POST" action="submitCarrier">
									                  <div class="modal-header">
									                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									                    <h4 class="modal-title" id="myModalLabel">Delete Carrier - '. $carriers[$i]['CarrierName'].'?</h4>
									                  </div>
									                  <div class="modal-body">
									                    <p>Are you sure you want to delete this Carrier?</p>';
									    echo '<input type="hidden" name="PKCarrierID" value="'. $carriers[$i]['PKCarrierID'].'">';
									    echo '<input type="hidden" name="CarrierName" value="'. $carriers[$i]['CarrierName'].'">';
									    echo '<input type="hidden" name="IsActive" value="false">';
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
							</tbody>
						</table>
					</div>
				</div>
			
	    </div>
	</div>
</div>
        <!-- Add Carrier Modal -->
        <div class="modal fade" id="add-carrier-modal" tabindex="-1" role="dialog" aria-labelledby="myUserLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
	              <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myCarrierLabel"></h4>
	              </div>
	              <form method="POST" action="submitCarrier" id="add-carrier-form">
		              <div class="modal-body">
							<div class='loading' style="display:none;">
							  <div style='height: 15vh'></div>
							  <center><img src='<?php echo base_url();?>img/loading-pink.gif' style='height: 10vh'>
							  <br>
							  <p style='color: #CC1543;'>&nbsp;&nbsp;&nbsp;&nbsp;Loading...</p>
							  <div style='height: 15vh'></div>				      
							  </center>
							</div>
							<div class="carrier_div">
				                <div class="row">
				                	<div class="col-md-6">
						              	<div class="form-group label-floating">
						                  <label class="control-label">Carrier Name</label>
						                  <input id="CarrierName" type="text" name="CarrierName" class="form-control" value="">
						                  <span class="help-block">Enter Carrier Name</span>
						                </div>
						            </div>
						            <div class='col-md-6'>
						            	<div class="form-group label-floating">
						                  	<?php
						                  	//echo json_encode($allCountries);
						                  	echo '<select class="form-control" id="Countries" name="Countries[]" multiple>';
							                  	//echo '<option value="-1">Select a Country</option>';
							                  	for ($i=0; $i<count($allCountries); $i++) {
							                  		if ( $allCountries[$i]['IsActive'] ) {
							                  			echo '<option value="' . $allCountries[$i]['PKCountryId'].'">' . $allCountries[$i]['CountryName'] . '</option>';
							                  		}
							                  	}
						                  	echo '</select>';
						                  	?>
					                  	</div>
						            </div>
<!-- 									<div class='col-md-6' style="height: 80px;overflow-y: auto;">
									    Select a Country
									    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#countryCollapse" aria-expanded="false" aria-controls="countryCollapse">
									      <span class='glyphicon glyphicon-arrow-down'></span>
									    </button>
									    <input type="hidden" name="countrylist" value="">
									    <div class="collapse" id="countryCollapse" style="height: 180px;">
									    	<?php
												for($i=0;$i<count($allCountries);$i++) {
													echo '<div class="">
													        <div class="checkbox">
													          <label>
													            <input name="countryid" type="checkbox" value="'. $allCountries[$i]['PKCountryId'] . '"> '. $allCountries[$i]['CountryName'] .'
													          </label>
													        </div>
													        <p class="help-block"></p>
													      </div>';
												}
									      	?>
									    </div>
									</div> -->
				          		</div>
				          		<br/>
				          		<div class="row">
				          			<div class="col-md-12">
						                <div style="border: 1px solid #ddd; padding: 20px;margin-bottom:5px;">
						                	<h4>Global Settings <a class="pull-right" id="add-carrier-global-setting" href="#">Add New</a></h4>
						                	<div id="global-setting">

						                	</div>
						                </div>
					                </div>
				                </div>
				                <br/>
				                <div class="row">
				                	<div class="col-md-12">
						                <div style="border: 1px solid #ddd; padding: 20px;margin-bottom:5px;">
						                	<h4>Carrier Settings <a class="pull-right" id="add-carrier-local-setting" href="#">Add New</a></h4>
						                	<div id="carrier-setting">
						                	</div>
						                </div>
					                </div>
				                </div>
				    		</div>
			          </div>
			          <input id="PKCarrierId" type="hidden" name="PKCarrierId" value="">
			          <input id="Isactive" type="hidden" name="Isactive" value="true">
			          
		              <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                <button type="submit" class="btn btn-success">save</button>
		              </div>
              	</form>
            </div>
          </div>
        </div>