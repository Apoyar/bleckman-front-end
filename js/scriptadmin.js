$(document).ready(function(){
	//init material design skin  
	$.material.init();
	//TODO: MAKE THIS PASSED FROM PHP
	//var customerId=1;
	var url=API_BASE_URL_FE+'api/';
	//var url='http://128.0.210.37/Bleckmannapi/api/';
	var apiCall=url+'';
	var result=false;
	var customerSettings={};
	var submition={};	

  function retrieveReturnOrders(customerId, pageno){
	  var searchInput = {};
    $('.loading-screen').slideDown('slow');    
	apiCall=url+'returnorder/PostBMReturnOrderbyKeywords';
    //console.log("apoyarToken : " + apoyarToken );	
	console.log(customerId);	
	
	var default_render=true;
	searchInput['FKCustomerId'] = customerId;
	
	$('tr input[type]').each(function(){
	  if($(this).val()){
		searchInput[$(this).attr('name')]=$(this).val();
		default_render=false;
	  }
	});
	
	var ReturnsOrderCreationDate = $('#ReturnsOrderCreationDate').val();
	var ReturnsOrderToDate = $('#ReturnsOrderToDate').val();
	console.log(ReturnsOrderCreationDate);
	console.log(ReturnsOrderToDate);
	if(ReturnsOrderCreationDate !== ''){      
        var date_array = [];
        date_array = ReturnsOrderCreationDate.split("-");    
        var newDateFormat = date_array[2] + "-" + date_array[1] + "-" + date_array[0];
        var newDateFormatToShow = date_array[0] + "-" + date_array[1] + "-" + date_array[2];      
        searchInput['From']= newDateFormat;
      }
    if(ReturnsOrderToDate !== ''){      
        var date_array = [];    
        date_array = ReturnsOrderToDate.split("-");    
        var newDateFormat = date_array[2] + "-" + date_array[1] + "-" + date_array[0];
        var newDateFormatToShow = date_array[0] + "-" + date_array[1] + "-" + date_array[2];      
        searchInput['To']= newDateFormat;
      }
	
	var pagesize = $('#page_size').val();
	searchInput['FKCustomerId'] = customerId;
	
	if(typeof(pageno)==='undefined'){				
		searchInput['pageno'] = 1;
	}else{
		searchInput['pageno'] = pageno;
	}
	if(typeof(pagesize)==='undefined'){				
		searchInput['pagesize'] = 20;
	}else{
		searchInput['pagesize'] = pagesize;
	}	
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
        console.log(response);
        renderReturnOrders(response);
      },
      fail: function(){
        $('.loading-screen').slideDown('slow');
      }
    });    
  }
	$(document).on('click', 'a[class="page-link"]', function() {
		//alert($(this).text());
		var pageno = $(this).text();			
		retrieveReturnOrders(customerId, pageno);			
	});
	//Pagination NEXT on click
	$(document).on('click', 'a[class="page-link next"]', function() {						
		var href_val_array = $(this).attr("href").split("-");
		//alert(href_val_array[1]);
		var pageno = href_val_array[1];		
		retrieveReturnOrders(customerId, pageno);			
	});
	//Pagination PREV on click
	$(document).on('click', 'a[class="page-link prev"]', function() {						
		var href_val_array = $(this).attr("href").split("-");
		//alert(href_val_array[1]);
		var pageno = href_val_array[1];		
		retrieveReturnOrders(customerId, pageno);			
	});
	
	
	$(document).on('change', '#page_size', function() {
		//alert($(this).val());			
		retrieveReturnOrders(customerId);			
	});
  function renderReturnOrders(raw_data){
    var html='';
    var html2='';
    var html3='';
  	var pagination_html = '';
  	var total_num_records = raw_data['TotRecords'];
  	console.log(raw_data);
  	var page_count = raw_data['Count'];
  	var pageno = raw_data['PageNo'];
		var btn_sel = 'style="color:#FFF !important; background-color:#0D508B !important;"';
		var btn_normal = 'style="color:#FFF !important;background-color:#337AB7 !important;"';
  	if(page_count > 1){
  		$('#page_size_div').css({'display':'block'})
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
      //date=new Date(data[i].ReturnsOrderCreationDate);
      date1=data[i].ReturnsOrderCreationDate.split('T');
      console.log("date1 : " + date1);
      date=new Date(date1[0]);

      resultDate=date.getDate()+'/'+(date.getMonth()+1)+'/'+(date.getYear()+1900);
      console.log("resultDate : " + resultDate);
      html=html+'\
        <tr>\
          <tr>\
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
              <td style="white-space: nowrap;">'+data[i].CarrierName+'</td>\
              \
              <td style="white-space: normal !important;">'+data[i].StatusName+'</td>\
              \
              <td style="white-space: nowrap;">\
              <a alt="More Info" title="More Info" data-toggle="modal" data-target="#moreInfo" id="'+data[i].ReturnId+'" class="btn_more_info pull-left" style="color:#FF5722;margin-right:10px;cursor:pointer;"><i class="large material-icons">zoom_in</i></a>\
              <a data-toggle="modal" data-target="#rOrderComment'+data[i].ReturnId+'" style="cursor:pointer;" alt="Comments" title="Comments" class="pull-left"><i class="large material-icons">comment</i></a>\
        </tr>\
      ';
      html3=html3+'\
      <div class="modal fade rOrderCommentModal" id="rOrderComment'+data[i].ReturnId+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">\
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
  	$('#total_records span').text(total_num_records);
    $('body').append(html2);
    $('body').append(html3);
    
    $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody').html(html);
	//$('#btm_pagination').html(pagination_html);
	//$('#override #orders_data tbody').html(html);
	//Calling the new pagination script
			//var page_count = response['Count'];
			//page_count PageNo
			var page_size = $('#page_size').val();
			$('#btm_pagination').pagination({
				items: total_num_records,
				itemsOnPage: page_size,
				cssStyle: 'light-theme',
				prevText:'&laquo;',
				nextText:'&raquo;'
				
			});
			//Initialize page number first time
			var init_page = (pageno === 1)?0:pageno;
			$('#btm_pagination').pagination('selectPage', init_page);
			$('#btm_pagination').pagination('prevPage');
			$('#btm_pagination').pagination('nextPage');	 
  }
  $(".rOrderCommentModal").on('shown.bs.modal', function() {
    $.material.init();
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
				moreinfo_html = '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="modal-title" id="myModalLabel"><b>Full info on return order: '+data.ReturnId+'</b></h4></div><div class="modal-body"><b>Full date/time:</b>'+data.ReturnsOrderCreationDate+',<b>Orderid:</b>'+data.OrderId+',	<b>Return status:</b>'+data.StatusName+'<hr/><h4>Customer Info:</h4>'+
					'<div class="row" style="padding-left:0 !important;"><div class="col-md-6 pull-left"><b>Name:</b> '+data.ConsumerName1+'<br/>'+
					'<b>Street1:</b> '+data.ConsumerShipStreet1+'<br/>'+
					'<b>Street2:</b> '+data.ConsumerShipStreet2+'<br/>'+
					'<b>Street3:</b> '+data.ConsumerShipStreet3+'<br/>'+
					'<b>Shipping House Number:</b> '+data.ConsumerFromShipHouseNumber+'<br/>'+
					'<b>Shipping Postal Code:</b> '+data.ConsumerFromShipPostalCode+'<br/>'+
					'</div><div class="col-md-5 pull-right"><b>City:</b> '+data.ConsumerFromShipCity+'<br/>'+
					'<b>State:</b> '+data.Consumershipstate+'<br/>'+
					'<b>Country:</b> '+data.ConsumerFromShipCountry+'<br/>'+					
					'<b>Email:</b> '+data.ConsumerEmail+'<br/>'+
					'<b> Phone:</b>'+data.Consumerphonenumber+'</div></div>'+
					
					'<hr><h4>Warehouse:</h4><div class="row" style="padding-left:0 !important;"><div class="col-md-6 pull-left"><b>Warehouse id :</b> '+data.Shipfromwarehouseid+'</div><div class="col-md-6 pull-right"> <b>Warehouse :</b> '+data.Warehouse+
					'</div></div><hr><h4>Comment:</h4>'+(data.Comment?data.Comment:'No comment has been made yet')+'<br><hr><h4>Items returned ('+data.Returnorderline.length+'):</h4>';
					for(a=0; a<data.Returnorderline.length; a++){
						var r=data.Returnorderline[a];
						
						moreinfo_html=moreinfo_html+
						'<div class="row" style="padding-left:0 !important;"><div class="col-md-6"><b>Item name:</b> '+r.ProductName+'<br> <b>Product SKU:</b> '+r.SKU+'<br> <b>Product info:</b> '+r.ProductInfo+'<br> </div><div class="col-md-6"><b>Quantity:</b> '+r.QtyReturned+'<br> <b>Price:</b> '+r.Price
						+'<br><b>Return reason:</b> '+r.ReturnReason+'</div></div><hr>';
					}
					moreinfo_html=moreinfo_html+'</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div>';
				
				$('#moreInfo').html(moreinfo_html);
				
				$.material.init();
			},
			fail: function(data){
			  console.log(data);
			}
		  });
					
		});
  //Unused search()! There is no use of search function
  function search(){
    //apiCall=url+'returnorder/PostReturnOrderbyKeywords';
    apiCall=url+'returnorder/PostBMReturnOrderbyKeywords';

    var searchInput={};
    var default_render=true;
    searchInput['FKCustomerId'] = customerId;
    
    $('tr input[type]').each(function(){
      if($(this).val()){
        searchInput[$(this).attr('name')]=$(this).val();
        default_render=false;
      }
    });
	//Change the date format to YYYY-DD-MM
   //  var ReturnsOrderCreationDate = $('#ReturnsOrderCreationDate').val();
	  // var date_array = [];    
   //  date_array = ReturnsOrderCreationDate.split("-");    
   //  var newDateFormat = date_array[2] + "-" + date_array[1] + "-" + date_array[0];
	  // var newDateFormatToShow = date_array[0] + "-" + date_array[1] + "-" + date_array[2];
	
      var ReturnsOrderCreationDate = $('#ReturnsOrderCreationDate').val();
      var ReturnsOrderToDate = $('#ReturnsOrderToDate').val();
      console.log(ReturnsOrderCreationDate);
      console.log(ReturnsOrderToDate);
      if(ReturnsOrderCreationDate !== ''){      
        var date_array = [];
        date_array = ReturnsOrderCreationDate.split("-");    
        var newDateFormatFrom = date_array[2] + "-" + date_array[1] + "-" + date_array[0];
        var newDateFormatToShow = date_array[0] + "-" + date_array[1] + "-" + date_array[2];      
        searchInput['From']= newDateFormatFrom;
      }
      if(ReturnsOrderToDate !== ''){      
        var date_array = [];    
        date_array = ReturnsOrderToDate.split("-");    
        var newDateFormatTo = date_array[2] + "-" + date_array[1] + "-" + date_array[0];
        var newDateFormatToShow = date_array[0] + "-" + date_array[1] + "-" + date_array[2];      
        searchInput['To']= newDateFormatTo;
      }

  	if(typeof(pageno)==='undefined') {
  		searchInput['pageno'] = 1;
  	} else {
  		searchInput['pageno'] = pageno;
  	} 
  	searchInput['pagesize'] = 20;
    console.log(searchInput);
    if(default_render){
      console.log(" in default_render");
      retrieveReturnOrders(customerId);
      $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div > div.alert.alert-dismissible.alert-primary').html('Listing the latest 20 returned orders')
    } else {
      $('.loading-screen').slideDown('slow');      
	    //searchInput['ReturnsOrderCreationDate']= newDateFormat;
	    console.log(searchInput);
      $.ajax({
        url: apiCall,
        type: 'post',
        data: searchInput,
        headers: {
            Apoyar: apoyarToken
        },
        dataType: 'json',
        success: function (data) {
		      //searchInput['ReturnsOrderCreationDate']= newDateFormatToShow;
          $('.loading-screen').slideUp('slow');
          console.log(data);
          renderReturnOrders(data);
          updateMessage(searchInput);
        },
        fail: function(){
          $('.loading-screen').slideUp('slow');
          renderReturnOrders({});
          //console.log(data);
        }
      });     
    }

  }
  //this function is to update the search message
  function updateMessage(searchData){
    var html='Searching for (';
    for(v in searchData){
      html=html+v+' : '+searchData[v]+' ';
    }
    html=html+')';
    $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-9 > div > div.alert.alert-dismissible.alert-primary').html(html);
  }

  function updateStats(){
    var from=$('#stat-from').val();
    var to=$('#stat-to').val();
    var from_array = [];
    var to_array = [];
    from_array = from.split("-");
    to_array = to.split("-");
    var newFrom = from_array[2] + "-" + from_array[1] + "-" + from_array[0];
    var newTo = to_array[2] + "-" + to_array[1] + "-" + to_array[0];

    // console.log("from : " + from );
    // console.log("newFrom : " + newFrom );
    // console.log("to : " + to );
    // console.log("newTo : " + newTo );

    //apiCall=url+'returnorder/GetReturnOrderbydates';
    apiCall=url+'returnorder/GetBMReturnOrderbydates';
    $('.loading-screen').slideDown('slow');


    $.ajax({
      url: apiCall,
      type: 'get',
      data: {FromDate: newFrom, ToDate: newTo, Customerid: customerId},
      headers: {
          Apoyar: apoyarToken
      },
      dataType: 'json',
      success: function (data) {
        //console.log(data);
        $('.loading-screen').slideUp('slow');

        $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html(data.length);

        var sum=0;
        
        for(i=0; i<data.length; i++){
          sum=sum+data[i].ReturnOrderTotalRefundAmount;
        }

        $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('<b> &euro; '+(Math.round(sum * 100) / 100).toFixed(2)+'</b>');

        if(data.length==0){
          $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html('N/A');
          $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('N/A');
        }
      },
      fail: function(){
        $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html('N/A');
        $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('N/A');
        $('.loading-screen').slideUp('slow');
      }
    });

    // $.get(apiCall, {FromDate: new_from, ToDate: new_to, Customerid: customerId})
    // .success(function(data){
    //   $('.loading-screen').slideUp('slow');

    //   $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html(data.length);

    //   var sum=0;
      
    //   for(i=0; i<data.length; i++){
    //     sum=sum+data[i].Returnordertotal;
    //   }

    //   $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('<b> &euro; '+(Math.round(sum * 100) / 100).toFixed(2)+'</b>');

    //   if(data.length==0){
    //     $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html('N/A');
    //     $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('N/A');
    //   }

    // }).fail(function(data){
    //   $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(1) > td:nth-child(2)').html('N/A');
    //   $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > div.bootstrap-table > div.fixed-table-container > div.fixed-table-body > table > tbody > tr:nth-child(2) > td:nth-child(2)').html('N/A');
    //   $('.loading-screen').slideUp('slow');

    // }).always(function(data){
    //   console.log(data);
    
    // });

  }

  //execute
  $('#override > div.container-fluid.form1 > div > div.col-xs-12.col-md-3 > div.well.hidden-xs.hidden-sm > button').click(function(){
    updateStats();
  });
  
  $('#search-button').click(function(){
    //search();//Unused right now
	retrieveReturnOrders(customerId);
  });
  //Added this code for submit button, so that user can enter submit for search
  $("#orders_data .form-control").keyup(function(event){
		if(event.keyCode == 13){
			$("#search-button").trigger('click');
		}
	});	
  
  retrieveReturnOrders(customerId);
  //console.log("customerId:" + customerId);  
	
});