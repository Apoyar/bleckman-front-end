$(document).ready(function() {
	$.validator.addMethod("regex", function(value, element, regexpr) {          
     return regexpr.test(value);
   }, "Please enter a valid pasword.");
   
		var url=API_BASE_URL_FE+'api/';
		
		$(".add-customer-pop").click(function(){
			var validator1 = $( "#customer-info-form" ).validate();
			validator1.resetForm();
			//$('#view_url').css({'display':'none'});
			//$('#lbl_url').css({'display':'none'});	
		    $('h4#myModalLabel').text('Add a Customer');
		    $('input#AddressLine1').val('');
		    $('input#AddressLine2').val('');
		    $('input#City').val('');
		    $('select#Country').val(-1);
		    $('input#CustomerName').val('');
		    $('input#EmailAddress').val('');
		    $('input#PhoneNumber').val('');
		    $('input#PostalCode').val('');
		    $('input#URL').val('');
		    $('input#State').val('');
		    // $('input#Username').val('');
		    // $('input#Password').val('');
		    $('input#PKCustomerID').val('');
		    $('div.login-info').show();
		});

		$(".edit-customer-pop").click(function(){
			//alert("hi");			
			$('.loading').css({'display':'block'});
			$('.customer-modal').css({'display':'none'});
			//$('#view_url').css({'display':'block'});
			//$('#lbl_url').css({'display':'block'});	
			
			var validator1 = $( "#customer-info-form" ).validate();
			validator1.resetForm();
			cust_array = $(this).attr("id").split("-");
			var selCustId = cust_array[2];
			//alert(selCustId);
			var apiCall=url+'Customer/GetActiveCustomerbyId?Customerid=' + selCustId;
			//console.log("apiCall : " + apiCall);
			$.ajax({
		        url: apiCall,
		        type: 'GET',
			    headers: {
			        Apoyar: apoyarToken
			    },
		        dataType: 'json',
		        success: function(data) {
		        	console.log("response data : ");
		        	//console.log(data);
		        	$('.loading').css({'display':'none'});
					$('.customer-modal').css({'display':'block'});
		        	$('h4#myModalLabel').text('Edit Customer Information');

		        	$('input#AddressLine1').removeClass("empty");
		        	$('input#AddressLine2').removeClass("empty");
		        	$('input#City').removeClass("empty");
		        	$('select#Country').removeClass("empty");
		        	$('input#CustomerName').removeClass("empty");
		        	$('input#EmailAddress').removeClass("empty");
		        	$('input#PhoneNumber').removeClass("empty");
		        	$('input#PostalCode').removeClass("empty");
		        	$('input#State').removeClass("empty");
					$('input#URL').removeClass("empty");
		        	
		        	$('input#AddressLine1').val(data.AddressLine1);
		        	$('input#AddressLine2').val(data.AddressLine2);
		        	$('input#City').val(data.City);
		        	$('select#Country').val(data.Country);
		        	$('input#CustomerName').val(data.CustomerName);
		        	$('input#EmailAddress').val(data.EmailAddress);
		        	$('input#PhoneNumber').val(data.PhoneNumber);
		        	$('input#PostalCode').val(data.PostalCode);
		        	$('input#State').val(data.State);
					$('#view_url #customer_id').text(data.PKCustomerID);
					$('input#URL').val($('#view_url').text());
		        	$('input#PKCustomerID').val(data.PKCustomerID);
		        	$('div.login-info').hide();
		        	$.material.init();
		        },
		        fail: function(data){
		          console.log(data);
		        }
		      });
		});
		$("#customer-info-form").validate({
				focusCleanup: true,
		        rules: {
		            CustomerName: "required",
		            PostalCode: "required",
		            EmailAddress: {
		                required: true,
		                email: true
		            },
		            AddressLine1 : "required",
		            Country: "required",
		   //          Username : {
		   //          	required: function(element) {
		   //          		//alert("customerid : " + $('#PKCustomerID').val());
		   //          		if ( $('#PKCustomerID').val() ) {
		   //          			return false;
		   //          		} else {
		   //          			return true;
		   //          		}
		   //          	}
		   //          },
					// Password : {
		   //          	required: function(element) {
		   //          		//alert("customerid : " + $('#PKCustomerID').val());
		   //          		if ( $('#PKCustomerID').val() ) {
		   //          			return false;
		   //          		} else {
		   //          			return true;
		   //          		}
		   //          	}
		   //          },
		   //          Password : {
					// 	 required: true,						 
					// 	 //New Contain at least 6 characters.contain at least 1 number.,contain at least 1 lowercase character (a-z),contain at least 1 uppercase character (A-Z),contains only 0-9a-zA-Z.
					// 	 //With Special Chars // /^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{6,}$/ 
					// 	 //Without Special Chars /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/
					// 	 regex: /^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{6,}$/     	
						
		   //          }
		        },
		        messages: {
		            CustomerName: "Please enter Customer Name",
		            PostalCode: "Please enter Postal Code",
		            EmailAddress: "Please enter a valid email address",
		            AddressLine1: "Please enter Address",
		            Country: "Please enter Country Name",
		            //Username: "Please enter Username",
		            //Password: "Enter Password must contain <br />minimum 6 chars with at least <br />one number, and <br />one UPPERCASE and lowercase letter, and     <br />one special charaters like $,@,!,%,*,#,?,& "
		        },
		        submitHandler: function(form) {
		        	//alert("submit");
		            form.submit();
		        }
		});
					
		$.validator.addMethod("valueNotEquals", function(value, element, arg){
			return arg != value;
		}, "Value must not equal arg.");

		$(".add-user-pop").click(function(){
			var validator1 = $( "#user-info-form" ).validate();
			validator1.resetForm();
		    $('h4#myUserLabel').text('Add a User');
		    $('input#Address').val('');
		    $('input#City').val('');
		    $('select#Country').val(-1);
		    $('input#FirstName').val('');
		    $('input#LastName').val('');
		    $('input#EmailAddress').val('');
		    $('input#Phone').val('');
		    $('input#PostalCode').val('');
		    $('input#State').val('');
		    $('input#Username').val('');
		    $('input#Password').val('');
		    $('input#PKUserID').val('');
		    $('select#FKRoleID').val('-1');
		    $('div.login-info').show();
		});

		$("#user-info-form").validate({
				focusCleanup: true,
		        rules: {
		            FirstName: "required",
		            LastName : "required",
		            //PostalCode: "required",
		            EmailAddress: {
		                required: true,
		                email: true
		            },
		            //Country: "required",
		            FKRoleID: {
		            	valueNotEquals: -1
		            },
		            Username : {
		            	required: function(element) {
		            		//alert("customerid : " + $('#PKCustomerID').val());
		            		if ( $('#PKUserID').val() ) {
		            			return false;
		            		} else {
		            			return true;
		            		}
		            	}
		            },
		            Password : {
		            	required: function(element) {
		            		//alert("customerid : " + $('#PKCustomerID').val());
		            		if ( $('#PKUserID').val() ) {
		            			return false;
		            		} else {
		            			return true;
		            		}
		            	}
		            },
					Password : {
						required: true,						 
						 //New Contain at least 6 characters.contain at least 1 number.,contain at least 1 lowercase character (a-z),contain at least 1 uppercase character (A-Z),contains only 0-9a-zA-Z.						 
						 //With Special Chars // /^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{6,}$/ 
						 //Without Special Chars /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/
						 regex: /^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{6,}$/
					}
		        },
		        messages: {
		            FirstName: "Please enter First Name",
		            LastName: "Please enter Last Name",
		            //PostalCode: "Please enter Postal Code",
		            EmailAddress: "Please enter a valid email address",
		            //Country: "Please enter Country Name",
		            FKRoleID:"Please select a role",
		            Username: "Please enter Username",
		            Password: "Enter Password must contain <br />minimum 6 chars with at least <br />one number, and <br />one UPPERCASE and lowercase letter, and     <br />one special charaters like $,@,!,%,*,#,?,& "
		        },
		        submitHandler: function(form) {
		        	//alert("submit");
		            form.submit();
		        }
		});

		$("#add-warehouse-form").validate({
		        rules: {
		            "Warehouses[0][Name]": "required",
		            "Warehouses[0][PostalCode]": "required",
		            "Warehouses[0][HouseNumber]" : "required",
		            "Warehouses[0][Country]": "required",
		        },
		        messages: {
		            "Warehouses[0][Name]": "Please enter Warehouse Name",
		            "Warehouses[0][PostalCode]": "Please enter Postal Code",
		            "Warehouses[0][HouseNumber]": "Please enter House Number",
		            "Warehouses[0][Country]": "Please enter Country Name"
		        },
		        submitHandler: function(form) {
		        	//alert("submit");
		            form.submit();
		        }
		});
		
		$("#add-role-form").validate({
			rules:{
				"Roles[0][RoleName]" : "required",
			},
			messages:{
				"Roles[0][RoleName]" : "Please enter a Role Name"
			},
		    submitHandler: function(form) {
		      	//alert("submit");
		        form.submit();
		    }
		});
		$("#carrier_info_form").validate({
			rules: {				
				CarrierName: "required",
				APIKey: "required",				
				APIURL : "required",
				ConsumerCountryName: "required",
				AnnounceAPI: "required",
				TrackTraceURL: "required",				
				APIUserName : {
					required: function(element) {
						//alert("customerid : " + $('#PKCustomerID').val());
						if ( $('#PKCarrierID').val() ) {
							return false;
						} else {
							return true;
						}
					}
				},
				APIPassword : {
					required: function(element) {
						//alert("customerid : " + $('#PKCustomerID').val());
						if ( $('#PKCarrierID').val() ) {
							return false;
						} else {
							return true;
						}
					}
				}
			},
			messages: {
				CarrierName: "Please enter Carrier Name",
				APIKey: "Please enter API Key",
				APIURL: "Please enter a valid API URL",
				AnnounceAPI: "Please enter Announce API",
				TrackTraceURL: "Please enter Track Trace URL",
				ConsumerCountryName: "Please Unique Country Name",
				APIUserName: "Please enter Username",
				APIPassword: "Please enter Password"
			},
			submitHandler: function(form) {
				//alert("submit");
				form.submit();
			}
	});		
		
		
		$("#add_carrier").click(function(){
		    $('h4#carrierLabel').text('Add a Carrier');
		    $('input#PKCarrierID').val('');
		    $('input#CarrierName').val('');
		    $('input#APIUserName').val('');
		    $('input#APIPassword').val('');
		    $('input#APIKey').val('');
		    $('input#APIURL').val('');
		    $('input#FKCustomerID').val('');
		    $('select#ConsumerCountryName').val(-1);
			$('select#ConsumerCountryName').prop("readonly",false);
		    $('input#AnnounceAPI').val('');
		    $('input#TrackTraceURL').val('');
			$('input#ApplicationID').val('');			
		});
		$(".edit_carrier").click(function(){
			$('.loading').css({'display':'block'});
			$('.carrier_div').css({'display':'none'});
			var url=API_BASE_URL_FE+'api/';
			carrier_array = $(this).attr("id").split("_");
			var selCarrierId = carrier_array[1];
			//alert(selCustId);
			$.material.options.autofill = true;
			var apiCall=url+'Carrier/GetCarrierbyId?CarrierId=' + selCarrierId;
			//console.log("apiCall : " + apiCall);
			$('#loadingspin').css({'display':'block'});//Hide spin image
			$.ajax({
		        url: apiCall,
		        type: 'GET',
				//data: input_data,
		        dataType: 'json',
		        success: function(data) {
		        	//console.log("response data : ");
		        	//console.log(data);
					$('.loading').css({'display':'none'});
					$('.carrier_div').css({'display':'block'});
		        	$('h4#carrierLabel').text('Edit Carrier Information');
		        	$('input#CarrierName').val(data.CarrierName);
		        	$('input#APIUserName').val(data.APIUserName);
		        	$('input#APIPassword').val(data.APIPassword);
		        	$('input#APIKey').val(data.APIKey);
		        	$('input#APIURL').val(data.APIURL);
		        	$('input#FKCustomerID').val(data.FKCustomerID);
		        	$('select#ConsumerCountryName').val(data.ConsumerCountryName);
					$('select#ConsumerCountryName').attr("disabled", true);
		        	$('input#AnnounceAPI').val(data.AnnounceAPI);
		        	$('input#TrackTraceURL').val(data.TrackTraceURL);
					$('input#ApplicationID').val(data.ApplicationID);
					$('input#LabelAPI').val(data.LabelAPI);		        	
		        	$('input#PKCarrierID').val(data.PKCarrierID);
					$('#loadingspin').css({'display':'none'});//Hide spin image	   
					$.material.init();     	
		        },
		        fail: function(data){
		          console.log(data);
				  $('#loadingspin').css({'display':'block'});//Hide spin image
				  $('.loading').css({'display':'block'});			
		        }
		      });
		});
		
		$("#ConsumerCountryName").blur(function(){			
			var existing_country_list = $('#existing_country_list').val();
			var countryArray = existing_country_list.split(',');
			var ConsumerCountryName = $('#ConsumerCountryName').val();
			var PKCarrierID = $('#PKCarrierID').val();
			
			if ($.inArray(ConsumerCountryName, countryArray)!='-1' && PKCarrierID == '') {
				//alert(ConsumerCountryName + ' is duplicate!');
				$('#ConsumerCountryName').val('');
				$('#ConsumerCountryName').focus();
				$('#duplicate_country').css({'display':'block'});				
				//console.log(ConsumerCountryName);
			} else {				
				$('#duplicate_country').css({'display':'none'});
			}			
		});
		
		$('#showcustomerSelect').click(function() {
		    //alert(this.checked);
		    if ( this.checked == true ) {
		    	$('#select-customer-div').show();
		    } else {
		    	$('#select-customer-div').hide();
		    }
		});

		$('.AssignedtoCustomer').click(function() {
			if ( this.checked == true ) {
				var res = $(this).attr("id").split("-");
				if(!($('#languageActive' + res[1]).is(":checked"))) {
					//alert("test : " + res[0] + ", " + res[1] );
					$('#languageActive' + res[1] ).prop("checked", true);
				}
			}
		});

		$("#select-customer").on('change', function(){
			//alert("change" + $(this).val());
			$('.loading-screen').show();
			if ( $(this).val() > -1 ) {
				$('.customer-assign').show();
				getCustomerLanguages($(this).val());
			}
			
		});
		//console.log("customerid : " + customerId);
		var url_val = window.location.href.split('?')[0];
		var url_val1 = url_val.split('#')[0];
		var loc = url_val1.substr(window.location.href.lastIndexOf('/') + 1);
		console.log(loc);
		if ( loc == 'languages') {
			if (customerId == '') {
				$('#showcustomerSelect').prop("checked", false);
				$('#select-customer-div').hide();
				$('.customer-assign').hide();
			} else {
			//if ( customerId ) {
				$('.loading-screen').show();
				$('#showcustomerSelect').prop("checked", true);
				$('#select-customer-div').show();
				$("#select-customer").val(customerId);
				$('.customer-assign').show();
				getCustomerLanguages(customerId);
			}
		} else if ( loc == 'users') {
			if (customerId == ''){
				//console.log("allUsers : ");
				//console.log(allUsers);
				formatUsersData(allUsers);
				$('#showcustomerSelect-Users').prop("checked", false);
				$("#select-customer").val(customerId);
				$('.customer-assign').hide();

			} else {
				//alert('customerId : ' + customerId );
				$('.loading-screen').show();
				$('#showcustomerSelect-Users').prop("checked", true);
				$('#select-customer-div-users').show();
				$("#select-customer-user").val(customerId);
				$('.customer-assign').show();
				getCustomerUsers(customerId);
			}
		}

		$('#showcustomerSelect-Users').click(function() {
		    //alert(this.checked);
		    if ( this.checked == true ) {
		    	$('#select-customer-div-users').show();
		    	
		    } else {
		    	$('#select-customer-div-users').hide();
		    	$('.customer-assign').hide();
		    }
		});
		$("#select-customer-user").on('change', function(){
			//alert("change" + $(this).val());
			$('.loading-screen').show();
			if ( $(this).val() > -1 ) {
				getCustomerUsers($(this).val());
			}
		});
		function getCustomerUsers(custid) {
			apiCall=url+'user/GetUsersbyCustomeridandUnassigned';
		    $.ajax({
		      url: apiCall,
		      type: 'get',
			  headers: {
				Apoyar: apoyarToken
			  },
		      data: { customerid: custid },
		      dataType: 'json',
		      success: function (response) {
		      	$('.customer-assign').show();
		      	formatUsersData(response);
		      	$('.loading-screen').hide();
		      },
		      fail: function() {
		      	$('.loading-screen').hide();
		      }
		    });
		}
		function formatUsersData(response) {
		      	var tableData = '';
		        console.log(response);
		        for(i=0; i<response.length; i++) {
		        	var selCountry = '';
			  		for(j=0;j<allCountries.length;j++) {
						if ( response[i]['Country'] == allCountries[j]['PKCountryId']) {
							selCountry = allCountries[j]['CountryName'];
							break;
						}
					}
			        tableData += '<tr>\
										<td class="customer-assign" style="text-align:center;vertical-align:middle;">\
									    	<input type="hidden" name="Users[' + i +'][Isactive]" value="0" />\
											<div class="form-group">\
												<div class="checkbox">\
													<label>\
														<input type="checkbox" id="userAssigned' + i + '" name="Users[' + i +'][Isactive]" value="1"'
															+ ((response[i]['Fkcustomerid'] > 0 ) ? " checked='checked'" : "") + '>\
													</label>\
												</div>\
											</div>\
										</td>\
								<td >\
								<input type="hidden" name="Users[' + i +'][PKUserID]" value="' + response[i]['PKUserID'] + '">\
								<div style="background-color:#f2f2f2;border-bottom: 1px solid #22B8AA; padding-bottom: 18px;margin-bottom:6px;padding:10px;">\
								  <div class="list-group-item">\
								    <div class="row-action-primary">\
								      <img class="img-circle" style="line-height:104px;height:72px;width:72px;" src="' + baseurl + 'img/user.png">\
								    </div>\
								    <div class="row-content">\
								      <div class="least-content hide-xs">\
								      		<p>'+ response[i]['RoleName'] + '</p>\
												<a data-toggle="modal" style="color:#f44336;cursor:pointer;" data-target="#delete-user-modal'+ response[i]['PKUserID'] +'" id="delete-user" class=" pull-right"><i class="material-icons">delete</i></a>\
												<a type="button" class="pull-right edit-user-pop" style="padding-right:12px;color:#4caf50;cursor:pointer;" data-toggle="modal" data-target="#add-user-modal" id="edit-user-'+ response[i]['PKUserID'] +'"><i class="material-icons">mode_edit</i></a>\
								      </div>\
								      <h3 class="list-group-item-heading"><b>'+ response[i]['FirstName'] +' ' + response[i]['LastName'] +'</b></h3>\
								      <p class="list-group-item-text" style="padding-bottom:8px;"><i style="font-size:18px;vertical-align:middle;color:gray;padding-right:4px;" class="material-icons">phone</i>'+ response[i]['Phone'] + '</p>\
								      <p class="list-group-item-text" style="padding-bottom:8px;"><i style="font-size:18px;vertical-align:middle;color:gray;padding-right:4px;" class="material-icons">email</i>'+ response[i]['EmailAddress'] + '</p>\
								      <p class="list-group-item-text"><i style="font-size:18px;vertical-align:middle;color:gray;padding-right:4px;" class="material-icons">location_on</i>'+ response[i]['PostalCode']+ ', ' + response[i]['City'] + ', ' + response[i]['State'] + ', ' + selCountry  +'</p>\
								    </div>\
								  </div>\
								</div>\
							';
					tableData += '<div class="modal fade" id="delete-user-modal' + response[i]['PKUserID'] + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">\
						              <div class="modal-dialog" role="document">\
						                <div class="modal-content">\
						                  <form method="POST" action="deleteUser">\
						                  <div class="modal-header">\
						                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>\
						                    <h4 class="modal-title" id="myModalLabel">Delete User - '+ response[i]['FirstName'] + '?</h4>\
						                  </div>\
						                  <div class="modal-body">\
						                    <p>Are you sure you want to delete this User?</p>\
						    	<input type="hidden" name="PKUserID" value="'+ response[i]['PKUserID'] + '">\
				                  </div>\
				                  <div class="modal-footer">\
				                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>\
				                    <button type="submit" class="btn btn-danger">Delete</button>\
				                  </div>\
				                  </form>\
				                </div>\
				              </div>\
				            </div>\
				            </td></tr>';
				}
		        $('#CustomerUsers').html(tableData);
		        $.material.init();
			    
		}
		function getCustomerLanguages(custid) {
			// console.log('allLanguages');
			// console.log(allLanguages);
			apiCall=url+'CustomerLanguage/GetCustomerLanguagebyId';
		    $.ajax({
		      url: apiCall,
		      type: 'get',
		      data: { Customerid: custid },
		      dataType: 'json',
		      success: function (response) {
		        //console.log(response);
		        for( j=0;j<allLanguages.length;j++ ) {
		        	$('#AssignedtoCustomer-' + j ).prop("checked", false);
		        	//console.log('j : ' + j );
		        	//console.log("PKLanguageID : " + allLanguages[j]['PKLanguageID'] );
			        for(i=0; i<response.length; i++) {
			        	if ( allLanguages[j]['PKLanguageID'] == response[i]['FkLanguageid'] ) {
			        		//console.log("FkLanguageid : " + response[i]['FkLanguageid']);
			        		$('#AssignedtoCustomer-' + j ).prop("checked", true);
			        	}
			        }
			    }
			    $('.loading-screen').hide();
		      },
		      fail: function(){
		      	$('.loading-screen').hide();
		      }
		    });
		}

		$("#CustomerUsers").on('click', 'a.edit-user-pop', function(){
			$('.loading').css({'display':'block'});
			$('.user_div').css({'display':'none'});
			var validator1 = $( "#user-info-form" ).validate();
			validator1.resetForm();
			user_array = $(this).attr("id").split("-");
			var selUserId = user_array[2];
			
			//alert(selUserId);
			var apiCall=url+'User/GetActiveUserbyId?Userid=' + selUserId;
			//console.log("apiCall : " + apiCall);
			$.ajax({
		        url: apiCall,
		        type: 'GET',
			    headers: {
			        Apoyar: apoyarToken
			    },
		        dataType: 'json',
		        success: function(data) {
		        	console.log("response data : ");
		        	//console.log(data);
					$('.loading').css({'display':'none'});
					$('.user_div').css({'display':'block'});
		        	$('h4#myUserLabel').text('Edit User Information');
		        	$('input#FirstName').val(data.FirstName);
		        	$('input#LastName').val(data.LastName);
		        	$('input#EmailAddress').val(data.EmailAddress);
		        	$('input#Phone').val(data.Phone);
		        	$('input#Address').val(data.Address);
		        	$('input#City').val(data.City);
		        	$('input#State').val(data.State);
		        	$('select#Country').val(data.Country);
		        	$('input#PostalCode').val(data.PostalCode);
		        	$('select#FKRoleID').val(data.FKRoleID);
		        	$('select#Fkcustomerid').val(data.Fkcustomerid);
		        	$('input#PKUserID').val(data.PKUserID);
		        	$('div.login-info').hide();
					if ( data.FKRoleID == 1 ) {
						$('#Fkcustomerid-div').hide();
					} else {
						$('#Fkcustomerid-div').show();
					}
		        	$.material.init();
		        },
		        fail: function(data){
		          console.log(data);
		        }
		      });
		});
		$('select#FKRoleID').on('change', function(){
			console.log("FKRoleID : " + $(this).val());
			if ( $(this).val() == 1 ) {
				$('#Fkcustomerid-div').hide();
			} else {
				$('#Fkcustomerid-div').show();
			}
		});
		/**/
		//Filter all Orders according to the Customer Id
		$("#orders_by_customer_id").on('change', function(){
			//alert("change" + $(this).val());
			$('.loading-screen').show();
			if ( $(this).val() != '') {				
				retrieveReturnOrders($(this).val());
				
				if($("#orders_data").html() !== ""){
					$('.paginate_button a').eq(1).trigger('click');
					//alert($('.paginate_button > li a').eq(1).text());
					//$("#orders_data").DataTable().fnDestroy();//destroying the table
				}				
				//$('#orders_data').DataTable({				 
				// "ordering": false,
				 //"pagingType": "numbers",
				//});
			}
		});
		//Direct Order page link from Customer page			
	    if ($('#hdn_customer_id_ord').length) {
		   var hdn_customer_id_ord = $('#hdn_customer_id_ord').val();
		   retrieveReturnOrders(hdn_customer_id_ord);		
		}
		
		function renderReturnOrders(raw_data){
			html='';
			html2='';
			html3='';
			var pagination_html = '';
			var page_count = raw_data['Count'];
			var pageno = raw_data['PageNo'];
			var btn_sel = 'style="color:#FFF !important; background-color:#0D508B !important;"';
			var btn_normal = 'style="color:#FFF !important;"';
			console.log(raw_data);
			$('.form-group').css({'margin':'0', 'padding':'0'});
			//console.log(raw_data['ReturnOrders'].length);
			//console.log(data['ReturnOrders'].[0].ReturnId);
			//console.log(raw_data['PageNo']);
			if(page_count > 1){
				
				pagination_html = '<b>Pages : </b> ';
				for(i=1;i<=page_count;i++){
					pagination_html = pagination_html+'<button ';
					if(pageno === i){
						pagination_html = pagination_html+btn_sel
					}
					else{
						pagination_html = pagination_html+btn_normal
					}
					pagination_html = pagination_html+' type="button" class="btn btn-primary btn-sm btn_paginate">'+i+'</button>';
				}
			}
			
			for(i=0; i<raw_data['ReturnOrders'].length; i++){
				var data = raw_data['ReturnOrders'];
				//console.log(data);
				date=new Date(data[i].ReturnsOrderCreationDate);
				resultDate=date.getDate()+'/'+(date.getMonth()+1)+'/'+(date.getYear()+1900);
				html=html+'\<tr>\
					  <td style="white-space: nowrap;">'+resultDate+'</td>\
					  \
					  <td style="white-space: nowrap;">'+data[i].OrderId+'</td>\
					  \
					  <td style="white-space: nowrap;">'+data[i].ReturnId+'</td>\
					  \
					  <td style="white-space: nowrap;"><a target="_blank" href="'+data[i].ReturnsOrderTrackingCode+'">Link</a></td>\
					  \
					  <td style="white-space: nowrap;"><b>'+' '+data[i].ReturnOrderTotalRefundAmount.toFixed(2)+'</b></td>\
					  \
					   <td style="white-space: nowrap;">'+data[i].CustomerName+'</td>\
					  \
					  <td style="white-space: nowrap;">'+data[i].CarrierName+'</td>\
					  \
					  <td style="white-space: normal !important;">'+data[i].StatusName+'</td>\
					  \
					  <td style="white-space: nowrap;">\
					  <button data-toggle="modal" data-target="#moreInfo" id="'+data[i].ReturnId+'" style="margin-top: 0;" class="btn btn-primary btn-raised btn_more_info">More info</button>\
					  <button data-toggle="modal" data-target="#rOrderComment'+data[i].ReturnId+'" style="margin-top: 0;" class="btn btn-warning btn-raised">Comment</button></td>\	</tr>\ ';
					  
			  

			  html3=html3+'\
			  <div class="modal fade" id="rOrderComment'+data[i].ReturnId+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">\
				<div class="modal-dialog" role="document">\
				  <div class="modal-content">\
					<form action="postComment" method="POST">\
					  <div class="modal-header">\
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>\
						<h4 class="modal-title" id="myModalLabel">Comment for return order: '+data[i].ReturnId+'</h4>\
					  </div>\
					  <div class="modal-body">\
						<input type="hidden" name="ReturnId" value="'+data[i].ReturnId+'">\
						<div class="form-group label-floating">\
						  <label for="t1" class="control-label">Comment:</label>\
						  <textarea rows="20" name="Comment" id="t1" name="comment" class="form-control" placeholder="No comment has been made yet">'+data[i].Comment+'</textarea>\
						</div>\
					  </div>\
					  <div class="modal-footer">\
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>\
						<button type="submit" class="btn btn-success">Save</button>\
					  </div>\
					</form>\
				  </div>\
				</div>\
			  </div>\
			  ';
			}
			$('body').append(html2);
			$('body').append(html3);
			$('#orders_data > tbody').html(html);
			$('#btm_pagination').html(pagination_html);
				/*
				if($("#orders_data").html() !== ""){
					//$("#orders_data").DataTable().fnDestroy();//destroying the table
				}
				//$('#orders_data').html(data);
				$('#orders_data').DataTable({
					"bDestroy" : false,				 
					"oLanguage": {
						"sSearch": "<span>QUICK SEARCH:</span> _INPUT_"
					},
				});*/			
			
		  }
		  function retrieveReturnOrders(customerId, pageno){
			$('.loading-screen').slideDown('slow');
			// apiCall=url+'returnorder/GetReturnOrderbyCustomerid';
			apiCall=url+'returnorder/PostBMReturnOrderbyKeywords';
			//console.log("apoyarToken : " + apoyarToken );
			var searchInput={};
			
			searchInput['FKCustomerId'] = customerId;
			$('tr input[type]').each(function(){
			  if($(this).val()){
				searchInput[$(this).attr('name')]=$(this).val();
				default_render=false;
			  }
			});
			//Change the date format to YYYY-DD-MM
			var ReturnsOrderCreationDate = $('#ReturnsOrderCreationDate').val();
			console.log(ReturnsOrderCreationDate);
			if(ReturnsOrderCreationDate !== ''){			
				var date_array = [];    
				date_array = ReturnsOrderCreationDate.split("-");    
				var newDateFormat = date_array[2] + "-" + date_array[1] + "-" + date_array[0];
				var newDateFormatToShow = date_array[0] + "-" + date_array[1] + "-" + date_array[2];			
				searchInput['ReturnsOrderCreationDate']= newDateFormat;
			}
			
			if(typeof(pageno)==='undefined'){				
				searchInput['pageno'] = 1;
			}else{
				searchInput['pageno'] = pageno;
			} 
			searchInput['pagesize'] = 15;
			
			
			//Check the pageno defined or not
			//data: {Customerid: customerId, pageno:pageno, pagesize:'15'},
			console.log(searchInput);
			$.ajax({
			  url: apiCall,
			  type: 'post',
			  data: searchInput,
			  headers: {
				  Apoyar: apoyarToken
			  },
			  dataType: 'json',
			  success: function (response) {
				$('.loading-screen').slideUp('slow');
				//console.log(response);
				renderReturnOrders(response);				
			  },
			  fail: function(){
				$('.loading-screen').slideDown('slow');
			  }
			});			
		  }
		
		$(document).on('click', '.btn_paginate', function() {
			//alert($(this).text());
			var pageno = $(this).text();
			var customerId = $('#orders_by_customer_id').val();
			retrieveReturnOrders(customerId, pageno);			
		});
		
		$(document).on('click', '.btn_more_info', function() {
			//alert($(this).attr('id')); //ReturnId
			var ReturnId = $(this).attr('id');
			var moreinfo_html = '';			
			//var customerId = $('#orders_by_customer_id').val();
			$('#moreInfo').html('');
			var apiCall=url+'returnorder/GetBMReturnOrderlinesbyReturnOrderid?ReturnId=' + ReturnId;
			$.ajax({
		        url: apiCall,
		        type: 'GET',
			    headers: {
			        Apoyar: apoyarToken
			    },
		        dataType: 'json',
		        success: function(data) {
		        	//console.log("response data : ");
		        	//console.log(data);
					//data[i].OrderId
					//console.log(data.OrderId);
					//console.log(data['Returnorderline'][0].EanBarcode);
					/**/
					moreinfo_html = '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title" id="myModalLabel">Full info on return order: '+data.ReturnId+'</h4></div><div class="modal-body"><b>Full date/time:</b>'+data.ReturnsOrderCreationDate+',<b>Orderid:</b>'+data.OrderId+',	<b>Return status:</b>'+data.StatusName+'<br><br><b>Customer Email:</b> '+data.ConsumerEmail+'<br><br><b>Customer Phone:</b>'+data.Consumerphonenumber+' <br><br>	<b>Comment:</b><br>'+(data.Comment?data.Comment:'No comment has been made yet')+'<br><br><b>Items returned ('+data.Returnorderline.length+'):</b><hr>';
					for(a=0; a<data.Returnorderline.length; a++){
						var r=data.Returnorderline[a];
						moreinfo_html=moreinfo_html+'\
						<b>Item name:</b> '+r.ProductName+'<br> <b>Product SKU:</b> '+r.SKU+'<br> <b>Product info:</b> '+r.ProductInfo+'<br> <b>Return reason:</b> '+r.ReturnReason+'<br> <b>Quantity:</b> '+r.QtyReturned+'<br> <b>Price:</b> '+r.Price+' <hr>\
						'
					}
					moreinfo_html=moreinfo_html+'<hr></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div>';
					$('#moreInfo').html(moreinfo_html);
					
					$.material.init();
		        },
		        fail: function(data){
		          console.log(data);
		        }
		      });
			
						
		});
		
		$.material.options.autofill = true;
		$.material.init();

		//hover effect for settings button
		$('.settings-btn-link').hover(function(){
			$(this).attr('src', '../../img/settings-btn-hover.png');
			console.log('work');
		}, function(){
			$(this).attr('src', '../../img/settings-btn.png');
		});
		//Back-end search 
		$('#order_search_btn').click(function(){
			var customerId = $('orders_by_customer_id').val();
			retrieveReturnOrders(customerId);			
		});
	    //Added this code for submit button, so that user can enter submit for search
	    $("#orders_data .form-control").keyup(function(event){
			if(event.keyCode == 13){
				$("#order_search_btn").trigger('click');
			}
		});
			
  $.expr[':'].Contains = function(a,i,m){
      return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
  };
  
  function listFilter(header, list) {
    var form = $("<form>").attr({"class":"filterform","action":"#"}),
        input = $("<input>").attr({"class":"search_input","type":"text","placeholder":"Search Customer "});
    $(form).append(input).appendTo(header);
 
    $(input)
      .change( function () {
        var filter = $(this).val();
        if(filter) {
          //$(list).find(".customer_name:not(:Contains(" + filter + "))").parent().slideUp();
          //$(list).find(".customer_name:Contains(" + filter + ")").parent().slideDown();  
		  
		  $(list).find(".customer_name:not(:Contains(" + filter + "))").parent().parent().closest('div').hide('slow');
		  //$(list).find(".customer_name:not(:Contains(" + filter + "))").parent().parent().closest('div').css({'display':'none'});		  
		  //$(list).find(".customer_name:Contains(" + filter + ")").parent().parent().closest('div').css({'display':'block'});
		  $(list).find(".customer_name:Contains(" + filter + ")").parent().parent().closest('div').show('slow');
        } else {
          //$(list).find(".entry").slideDown();		  
		  //$(list).find(".customer_name:Contains(" + filter + ")").parent().parent().closest('div').css({'display':'block'});
		  $(list).find(".customer_name:Contains(" + filter + ")").parent().parent().closest('div').show('slow');
        }
        return false;
      })
    .keyup( function () {
        $(this).change();
    });
  }
 
		  $(function () {
			listFilter($("#header"), $("#list"));
		  });		
		

		var settings_global_cnt=0;
		var settings_local_cnt=0;
		$('#add-carrier-global-setting').click(function() {
			var html1 = '<div class="row">\
				                	<div class="col-md-12">\
				                		<div class="col-md-6">\
							              	<div class="form-group label-floating">\
							                  <label class="control-label">Settings Name</label>\
							                  <input id="SettingsName" type="text" name="GlobalSetting[' + settings_global_cnt +'][SettingName]" class="form-control" value="">\
							                  <span class="help-block">Enter Settings Name</span>\
							                </div>\
				                		</div>\
				                		<div class="col-md-6">\
							              	<div class="form-group label-floating">\
							                  <label class="control-label">Settings Value</label>\
							                  <input id="SettingsValue" type="text" name="GlobalSetting[' + settings_global_cnt +'][SettingValue]" class="form-control" value="">\
							                  <span class="help-block">Enter Settings Value</span>\
							                </div>\
				                		</div>\
				                	</div>\
				        </div>';
			$('div#global-setting').append(html1);
			settings_global_cnt++;
			$('#global-settings-error').hide();
		});
		$('#add-carrier-local-setting').click(function() {
			var html1 = '<div class="row">\
				                	<div class="col-md-12">\
				                		<div class="col-md-6">\
							              	<div class="form-group label-floating">\
							                  <label class="control-label">Settings Name</label>\
							                  <input id="SettingsName" type="text" name="CarrierSetting[' + settings_local_cnt +'][SettingName]" class="form-control" value="">\
							                  <span class="help-block">Enter Settings Name</span>\
							                </div>\
				                		</div>\
				                		<div class="col-md-6">\
							              	<div class="form-group label-floating">\
							                  <label class="control-label">Settings Value</label>\
							                  <input id="SettingsValue" disabled type="text" name="CarrierSetting[' + settings_local_cnt +'][SettingValue]" class="form-control" value="">\
							                  <span class="help-block">Enter Settings Value</span>\
							                </div>\
				                		</div>\
				                	</div>\
				        </div>';
			$('div#carrier-setting').append(html1);
			settings_local_cnt++;
			$('#local-settings-error').hide();
		});
		$(".add-carrier-pop").click(function(){
			$('h4#myCarrierLabel').text('Add a Carrier');
			var validator1 = $( "#add-carrier-form" ).validate();
			validator1.resetForm();
		   	$('input#CarrierName').val('');
			$('input#PKCarrierId').val('');
			settings_global_cnt=0;
			$('div#global-setting').html('');
			$('select#Countries').val(-1);
			$('#Countries').multiselect({enableFiltering: true, maxHeight: 200, buttonWidth: 250, nonSelectedText: 'Select a Country', nSelectedText: 'Countries Selected',});
			$("#Countries").multiselect("refresh");
		   //      	$("#add-carrier-form").validate(); //sets up the validator
					// $("GlobalSetting[]").rules("add", { required : true });
					// console.log("set");
		});
		$("#carriers-table").on('click', '.edit-carrier-pop', function(){
			$('.loading').css({'display':'block'});
			$('.carrier_div').css({'display':'none'});
			var validator1 = $( "#add-carrier-form" ).validate();
			validator1.resetForm();
			$('#Countries').multiselect({enableFiltering: true, maxHeight: 200, buttonWidth: 250, nonSelectedText: 'Select a Country', nSelectedText: 'Countries Selected',});
			carrier_array = $(this).attr("id").split("-");
			var selCarrierId = carrier_array[2];
			
			console.log(selCarrierId);
			var apiCall=url+'Carrier/GetActiveCarrierbyid?CarrierId=' + selCarrierId;
			console.log("apiCall : " + apiCall);
			$.ajax({
		        url: apiCall,
		        type: 'GET',
			    headers: {
			        Apoyar: apoyarToken
			    },
		        dataType: 'json',
		        success: function(data) {
		        	console.log("response data : ");
		        	console.log(data);
					$('.loading').css({'display':'none'});
					$('.carrier_div').css({'display':'block'});
		   			$('h4#myCarrierLabel').text('Edit Carrier Information');
		   			$('input#CarrierName').val(data.CarrierName);
		   			$('input#PKCarrierId').val(data.PKCarrierID);

		   			$('select#Countries').val(data.Countries);
		   			//$('select#Countries').val(["2","5"]);
		   			$("#Countries").multiselect("refresh");
		   			console.log(data.Countries.toString());
		   			
		   			console.log(data['GlobalSetting'].length);
		   			for(i=0;i<data['GlobalSetting'].length;i++) {
						var html1 = '<div class="row">\
				                	<div class="col-md-12">\
				                		<input type="hidden" name="GlobalSetting[' + i +'][PKGlobalCarrierId]" value="'+ data['GlobalSetting'][i]['PKGlobalCarrierId'] +'">\
				                		<div class="col-md-6">\
							              	<div class="form-group label-floating">\
							                  <label class="control-label">Settings Name</label>\
							                  <input id="SettingsName" type="text" name="GlobalSetting[' + i +'][SettingName]" class="form-control" value="'+ data['GlobalSetting'][i]['SettingName'] +'">\
							                  <span class="help-block">Enter Settings Name</span>\
							                </div>\
				                		</div>\
				                		<div class="col-md-6">\
							              	<div class="form-group label-floating">\
							                  <label class="control-label">Settings Value</label>\
							                  <input id="SettingsValue" type="text" name="GlobalSetting[' + i +'][SettingValue]" class="form-control" value="'+ data['GlobalSetting'][i]['SettingValue'] +'">\
							                  <span class="help-block">Enter Settings Value</span>\
							                </div>\
				                		</div>\
				                	</div>\
				       		</div>';
						$('div#global-setting').append(html1);
					}
					for(i=0;i<data['CarrierSetting'].length;i++) {
						var html2 = '<div class="row">\
							                	<div class="col-md-12">\
							                	<input type="hidden" name="CarrierSetting[' + i +'][PKGlobalCarrierId]" value="'+ data['CarrierSetting'][i]['PKGlobalCarrierId'] +'">\
							                		<div class="col-md-6">\
										              	<div class="form-group label-floating">\
										                  <label class="control-label">Settings Name</label>\
										                  <input id="SettingsName" type="text" name="CarrierSetting[' + settings_local_cnt +'][SettingName]" class="form-control" value="'+ data['CarrierSetting'][i]['SettingName'] +'">\
										                  <span class="help-block">Enter Settings Name</span>\
										                </div>\
							                		</div>\
							                		<div class="col-md-6">\
										              	<div class="form-group label-floating">\
										                  <label class="control-label">Settings Value</label>\
										                  <input id="SettingsValue" disabled type="text" name="CarrierSetting[' + settings_local_cnt +'][SettingValue]" class="form-control" value="">\
										                  <span class="help-block">Enter Settings Value</span>\
										                </div>\
							                		</div>\
							                	</div>\
							        </div>';
						$('div#carrier-setting').append(html2);
						settings_local_cnt++;
		   			}
		   			settings_global_cnt = data['GlobalSetting'].length;
		   			settings_local_cnt = data['CarrierSetting'].length;
		        	$.material.init();
		        },
		        fail: function(data){
		          console.log(data);
		        }
		      });
		});
		$("#FKCarrierId").on('change', function() {
			console.log($(this).val());
			$("div#carrierCountry *").prop('disabled',true);
			var apiCall=url+'carrier/GetCountriesbyCarrierid?CarrierId=' + $(this).val();
			console.log("apiCall : " + apiCall);
			$.ajax({
		        url: apiCall,
		        type: 'GET',
			    headers: {
			        Apoyar: apoyarToken
			    },
		        dataType: 'json',
		        success: function(data) {
		        	console.log("response data : ");
		        	console.log(data);
		        	var html1 = '<div class="form-group" id="select-country-div"><label>Select a Country</label>\
		        					<select id="country" class="form-control">\
										<option value="-1">Select a Country</option>';
										for(i=0;i<data.length;i++) {
											html1+= '<option value="'+ data[i]['PKCountryId'] + '-' + data[i]['CountryCode'] + '">' + data[i]['CountryName'] + '</option>';
										}
					html1 += '</select></div>';
					$('div#carrierCountry').html(html1);
					$("div#carrierCountry *").prop('disabled',false);
		        	$.material.init();
		        	$("#setCustomerCarrierMap").validate(); //sets up the validator
					$("select#country").rules("add", { valueNotEquals : -1 });
		        },
		        fail: function(data){
		          console.log(data);
		        }
		      });
		});
		$("#carrierCountry").on('change', '#select-country',function() {
			console.log($(this).val());
			country_array = $(this).val().split("-");
			//var countryId = country_array[0];
			$('#CountryCode').val(country_array[1]);
			$('#FKCountryID').val(country_array[0]);
		});

		$(".manage-carrier-pop").click(function() {
			$('.loading').css({'display':'block'});
			$('.carrier-modal').css({'display':'none'});

			array = $(this).attr("id").split("-");
			//var selId = array[2];
			var apiCall=url+'Carrier/GetCarrierSettingbyCCWid?CCWid=' + array[2] + '&Carrierid=' + array[3];
			console.log(apiCall);
			console.log(apoyarToken);
			$.ajax({
		        url: apiCall,
		        type: 'GET',
			    headers: {
			        Apoyar: apoyarToken
			    },
		        dataType: 'json',
		        success: function(data) {
		        	console.log("response data : ");
		        	console.log(data);
		        	var html2 = '';
		        	$('.loading').css({'display':'none'});
					$('.carrier-modal').css({'display':'block'});
					
					if (data['Global']) {
						console.log('gs length : ' + data['GlobalSetting'].length);
						for(i=0;i<data['GlobalSetting'].length;i++) {
							html2 += '<div class="row">\
							            <div class="col-md-12">\
							                <input type="hidden" name="CarrierSetting[' + i +'][FKCCWId]" value="'+ array[2] +'">\
							                		<div class="col-md-6">\
										              	<div class="form-group label-floating">\
										                  <label class="control-label">Settings Name</label>\
										                  <input id="SettingsName" type="text" name="CarrierSetting[' + i +'][SettingName]" class="form-control" value="'+ data['GlobalSetting'][i]['SettingName'] +'">\
										                  <span class="help-block">Enter Settings Name</span>\
										                </div>\
							                		</div>\
							                		<div class="col-md-6">\
										              	<div class="form-group label-floating">\
										                  <label class="control-label">Settings Value</label>\
										                  <input id="SettingsValue" type="text" name="CarrierSetting[' + i +'][SettingValue]" class="form-control" value="'+ data['GlobalSetting'][i]['SettingValue'] +'">\
										                  <span class="help-block">Enter Settings Value</span>\
										                </div>\
							                		</div>\
							                	</div>\
							        </div>';
		   				}
		   				$('div.carrier-modal').html(html2);
		   			} else {
		   				console.log('cs length : ' + data['CarrierSetting'].length);
						for(i=0;i<data['CarrierSetting'].length;i++) {
							html2 += '<div class="row">\
							            <div class="col-md-12">\
							            	<input type="hidden" name="CarrierSetting[' + i +'][PKCarrierSettingId]" value="'+ data['CarrierSetting'][i]['PKCarrierSettingId'] +'">\
							            	<input type="hidden" name="CarrierSetting[' + i +'][FKCCWId]" value="'+ data['CarrierSetting'][i]['FKCCWId'] +'">\
							                		<div class="col-md-6">\
										              	<div class="form-group label-floating">\
										                  <label class="control-label">Settings Name</label>\
										                  <input id="SettingsName" type="text" name="CarrierSetting[' + i +'][SettingName]" class="form-control" value="'+ data['CarrierSetting'][i]['SettingName'] +'">\
										                  <span class="help-block">Enter Settings Name</span>\
										                </div>\
							                		</div>\
							                		<div class="col-md-6">\
										              	<div class="form-group label-floating">\
										                  <label class="control-label">Settings Value</label>\
										                  <input id="SettingsValue" type="text" name="CarrierSetting[' + i +'][SettingValue]" class="form-control" value="'+ data['CarrierSetting'][i]['SettingValue'] +'">\
										                  <span class="help-block">Enter Settings Value</span>\
										                </div>\
							                		</div>\
							                	</div>\
							        </div>';
		   				}
		   				$('div.carrier-modal').html(html2);
		   			}
		        	$.material.init();
		        },
		        fail: function(data){
		          console.log(data);
		        }
		      });
		});
		$("#setCustomerCarrierMap").validate({
		        rules: {
		            FKCarrierId: { valueNotEquals : -1 },
		            FkCustomerid: "required",
		            country : { valueNotEquals : -1 },
		            Warehouseid:  { valueNotEquals : -1 },
		        },
		        messages: {
		            FKCarrierId: "Please select a Carrier",
		            FkCustomerid: "Please select a Customer",
		            country: "Please select a Country",
		            Warehouseid: "Please select a Warehouse"
		        },
		        submitHandler: function(form) {
		        	//alert("submit");
		            form.submit();
		        }
		});
		$("#add-carrier-form").validate({
		        rules: {
		            CarrierName: "required",
		            "Countries[]" : "required",
		        },
		        messages: {
		            CarrierName: "Please enter a Carrier Name",
		            "Countries[]": "Please select a Country",
		        },
		        submitHandler: function(form) {
		        	if ( settings_global_cnt > 0) {
		        		if (settings_local_cnt > 0) {
		            		form.submit();
		            	} else {
		            		$('#local-settings-error').show();
		            	}
		            } else {
		            	$('#global-settings-error').show();
		            }
		        }
		});

});