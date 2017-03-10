    <nav class="sub-menu menu-toggle grid-3 portrait-hidden">
      <h1 class="title">Contents</h1>
      <a name="table-of-contents"></a>
      <ol class="toc-node-numbers">
        <li class="toc-node-level-1 first"><a href="#mode1"><span class="toc-text">Operation Mode1</span></a></li>
            <ol class="children" style="display: block;">
                <li class="toc-node-level-2"><a href="#GetAllActiveCountriesbyCustomerid"><span class="toc-text">GetAllActiveCountriesbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMCarriersbyCustomerid"><span class="toc-text">GetBMCarriersbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#PostMode1"><span class="toc-text">PostMode1</span></a></li>
            </ol>
        <li class="toc-node-level-1"><a href="#mode2"><span class="toc-text">Operation Mode2</span></a></li>
            <ol class="children" style="display: block;">
                <li class="toc-node-level-2"><a href="#GetBMAllOrdersbyid"><span class="toc-text">GetBMAllOrdersbyid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetAllReturnReasonsbyCustomerid"><span class="toc-text">GetAllReturnReasonsbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMCarriersbyCustomerid"><span class="toc-text">GetBMCarriersbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#PostBMReturnOrder"><span class="toc-text">PostBMReturnOrder</span></a></li>
            </ol>
        <li class="toc-node-level-1"><a href="#mode3"><span class="toc-text">Operation Mode3</span></a></li>
            <ol class="children" style="display: block;">
                <li class="toc-node-level-2"><a href="#GetAllActiveCountriesbyCustomerid3"><span class="toc-text">GetAllActiveCountriesbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMCarriersbyCustomerid3"><span class="toc-text">GetBMCarriersbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#PostMode3"><span class="toc-text">PostMode3</span></a></li>
            </ol>
        <li class="toc-node-level-1"><a href="#mode4"><span class="toc-text">Operation Mode4</span></a></li>
            <ol class="children" style="display: block;">
                <li class="toc-node-level-2"><a href="#PostSearchOrders"><span class="toc-text">PostSearchOrders</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMAllOrdersbyid4"><span class="toc-text">GetBMAllOrdersbyid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetAllReturnReasonsbyCustomerid4"><span class="toc-text">GetAllReturnReasonsbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMCarriersbyCustomerid4"><span class="toc-text">GetBMCarriersbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#PostBMReturnOrder4"><span class="toc-text">PostBMReturnOrder</span></a></li>
            </ol>
        <li class="toc-node-level-5"><a href="#mode5"><span class="toc-text">Operation Mode5</span></a></li>
            <ol class="children" style="display: block;">
                <li class="toc-node-level-2"><a href="#GetAllReturnReasonsbyCustomerid5"><span class="toc-text">GetAllActiveCountriesbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMCarriersbyCustomerid5"><span class="toc-text">GetBMCarriersbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#PostMode5"><span class="toc-text">PostMode5</span></a></li>
            </ol>
      </ol>
    </nav>
    <article class="portrait-8 grid-6 desktop-10">
      <div class="portrait-8 grid-6 desktop-10">
        <div class="content">
            <div>
            <div class="toc-item-anchor"><a name="mode1"></a></div>
            <h2 class="h2 title toc-headings" style="color:#cc1543;">Operation Mode 1</h2>

            <div class="toc-item-anchor"><a name="GetAllActiveCountriesbyCustomerid"></a></div>
            <h2 class="h2 title toc-headings">GetAllActiveCountriesbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Country/GetAllActiveCountriesbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Countries by Customer ID and from this response pick up the CountryCode as this will be used in the subsequesnt API calls “GetBMCarriersbyCustomerid” and “PostMode1”.</li>
            </ul>

            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetAllActiveCountriesbyCustomerid</td>
                        <td>Gets all active countries based on customerid provided&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Alpha NUmeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [{
                        "PKCountryId": 2,
                        "CountryName": "ALBANIA",
                        "CountryCode": "ALB",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 14,
                        "CountryName": "AUSTRIA",
                        "CountryCode": "AUT",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 21,
                        "CountryName": "BELGIUM",
                        "CountryCode": "BEL",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 73,
                        "CountryName": "FRANCE",
                        "CountryCode": "FRA",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 80,
                        "CountryName": "GERMANY",
                        "CountryCode": "DEU",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 103,
                        "CountryName": "IRELAND",
                        "CountryCode": "IRL",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 105,
                        "CountryName": "ITALY",
                        "CountryCode": "ITA",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 124,
                        "CountryName": "LUXEMBOURG",
                        "CountryCode": "LUX",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 150,
                        "CountryName": "NETHERLANDS",
                        "CountryCode": "NLD",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 225,
                        "CountryName": "UNITED KINGDOM",
                        "CountryCode": "GBR",
                        "IsActive": true
                      }
                    ]
                </pre>
            </div>
            <div class="toc-item-anchor">
                <a name="GetBMCarriersbyCustomerid"></a>
            </div>
            <h2 class="h2 title toc-headings toc-headings">GetBMCarriersbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Carrier/GetBMCarriersbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Carriers by Customer ID and selected country (which you get from above API call) and from this response pick up the values for  PKCarrierid, Carriername, Warehouseid as these values will be used in “PostMode1”.</li>
            </ul>     
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMCarriersbyCustomerid</td>
                        <td>Get Carriers by Customer Id and Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>2 Character Code</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                [
                  {
                    "PKCarrierID": 1,
                    "CarrierName": "DHL",
                    "Isactive": true,
                    "WarehouseId": "KHTRUEFC",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  },
                  {
                    "PKCarrierID": 3,
                    "CarrierName": "Royal Mail",
                    "Isactive": true,
                    "WarehouseId": "KHTRUEFC",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  },
                  {
                    "PKCarrierID": 3,
                    "CarrierName": "Royal Mail",
                    "Isactive": true,
                    "WarehouseId": "KRUISHOUTEM1",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  },
                  {
                    "PKCarrierID": 5,
                    "CarrierName": "UPS",
                    "Isactive": true,
                    "WarehouseId": "KHTRUEFC",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  }
                ]
                </pre>
            </div>
            <div class="toc-item-anchor"><a name="PostMode1"></a></div>
            <h2 class="h2 title toc-headings">PostMode1</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnorder/PostMode1</li>
                <li><i>Description: </i>This Call for placing return order without order information only with consumer information.</li>
            </ul>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td>
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerId</p>
                        </td>
                        <td nowrap="">
                            <p>101</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ID of the consumer Alpha numeric Length 25</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName1</p>
                        </td>
                        <td nowrap="">
                            <p>HARVEY NICHOLS DIST.CENTRE -C</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Name of the Consumer Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail2</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet1</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION LILIPUT</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer Street 1 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipHouseNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1-2-3</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Consumer House No Length 5</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipPostalCode</p>
                        </td>
                        <td nowrap="">
                            <p>1030</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer Postal Code Length 10</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCity</p>
                        </td>
                        <td nowrap="">
                            <p>NORTHAMPTON</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer City Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Consumershipstate</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer State Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllActiveCountriesbyCustomerid” field CountryCode.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllCarriers” field PKCarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>FKCustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>1246252</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Customerid Length 255 numeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerName</p>
                        </td>
                        <td nowrap="">
                            <p>True Religion</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>CustomerName Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Shipfromwarehouseid</p>
                        </td>
                        <td nowrap="">
                            <p>ATPOST123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field WarehouseId</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>XYZ</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td >
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Mode</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send mode as 1</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>BccEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Orderid</p>
                        </td>
                        <td nowrap="">
                            <p>89898989</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Orderid</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request Parameters as JSON</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    {
                    "ConsumerId":"101",
                    "ConsumerName1":"HARVEY NICHOLS DIST.CENTRE -C/",
                    "ConsumerEmail":"",
                    "ConsumerShipStreet1":"DIMENSION LILIPUT",
                    "ConsumerFromShipHouseNumber":"",
                    "ConsumerFromShipPostalCode":"NN4 7AS",
                    "ConsumerFromShipCity":"NORTHAMPTON",
                    "Consumershipstate":"GB",
                    "ConsumerFromShipCountry":"GB",   [Send only Country Code]
                    "CarrierId":"1",
                    "FKCustomerId":"1",
                    “Shipfromwarehouseid”: “KHTRUEFC”,
                    "CarrierName":"DHL",
                    "Mode":1,
                    “BccEmail”:x@x.com,
                    “Orderid”:”89898989”
                    }

                </pre>
            </div>
            <h2 class="h2 title toc-headings">Json Response</h2>

            <div class="geshifilter">
                <h3>Status=2000: Return order created but Return Label not Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"1000",
                    "Messages":"Error Message",
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=1000: Return order created and Return Label generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"2000",
                    "Messages":"returnlabelurl",  [URL of the return label]
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode OK 200.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=0: Return order NOT created and Return Label NOT Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"0",
                    "Messages":"Error Message"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
          </div>

        </div>
        <div class="content">
            <div>
                <div class="toc-item-anchor"><a name="mode2"></a></div>
                <h2 class="h2 title toc-headings" style="color:#cc1543;">Operation Mode 2</h2>
            </div>
            <div class="toc-item-anchor"><a name="GetBMAllOrdersbyid"></a></div>
            <h2 class="h2 title toc-headings">GetBMAllOrdersbyid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Order/GetBMAllOrdersbyid</li>
                <li><i>Description: </i>This call is used to get Order and Orderlines by ConsumerEmail and Orderid from this response pick up the Data(How to use Mention in Below Table of PostBMReturnOrder for fields) as this will be used in the subsequesnt API “PostBMReturnOrder” and from that Data ConsumerShipCountry and FKCustomerID field to be used in “GetBMCarriersbyCustomerid”</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMAllOrdersbyid</td>
                        <td>Gets all Order and Orderlines by ConsumerEmail and Orderid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Provide Valid Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Orderid</p>
                        </td>
                        <td nowrap="">
                            <p>41P24005050000126</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    {
                      "Status": -1,
                      "ShipmentId": "41P24005050000126",
                      "FKCustomerID": "",
                      "Consumerid": "TRGDE0",
                      "ConsumerEmail": "x@x.com",
                      "ShipFromWarehouseId": "KHTRUEFC",
                      "Source": "RP",
                      "OrderType": "X-DOCK",
                      "OrderId": "41P24005050000126",
                      "ConsumerPhoneNumber": "",
                      "ShippedDate": "2013-04-30T09:17:41",
                      "DeliveyDate": "1800-01-01T00:00:00",
                      "MaxReturnDays": -1,
                      "ConsumerName1": "TRUE RELIGION BRANDJEANS GERMA",
                      "ConsumerName2": "",
                      "ConsumerShipStreet1": "INDUSTRIEZONE 6C",
                      "ConsumerShipStreet2": "/",
                      "ConsumerShipStreet3": "",
                      "ConsumerShipHouseNumber": "",
                      "ConsumerShipPostalCode": "9770",
                      "ConsumerShipCity": "KRUISHOUTEM",
                      "ConsumerShipState": "BE",
                      "ConsumerShipCountry": "BEL",
                      "ConsumerLanguage": "",
                      "TotalValue": 0,
                      "BMOrderLine": [{
                          "Status": 10,
                          "WarehouseId": "KHTRUEFC",
                          "ShipmentLineId": 1011,
                          "ShipmentId": null,
                          "OrderId": "41P24005050000126",
                          "OrderlineID": 1011,
                          "SKU": "M13JX43BW2-1001.38",
                          "StyleDescription": "MENS STUDDED BIKER BELT",
                          "ColourDescription": "BLACK",
                          "SizeDescription": "38",
                          "EANBARCODE": "887150445222",
                          "HTS": "",
                          "Origine": "",
                          "Price": 53.94,
                          "ProductCurrency": "USD",
                          "UnitWeight": 0.001,
                          "UnitOfMeasure": "STUKS",
                          "HazmatCode": "",
                          "QtyShipped": 0,
                          "TotalLineAmount": -1618.200000000001
                        }]
                    }

                </pre>
            </div>
            <div class="toc-item-anchor"><a name="GetAllReturnReasonsbyCustomerid"></a></div>
            <h2 class="h2 title toc-headings">GetAllReturnReasonsbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnreason/GetAllReturnReasonsbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Returnreasons by Customer ID and from this response pick up the values for  PKReasonID as these values will be used in “PostBMReturnOrder.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetAllReturnreasonsbyCustomerid</td>
                        <td>Get Returnreaons for customer language wise and with sequence no by Customer Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field FKCustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      [
                        {
                          "PKReasonID": 84,
                          "Reason": "The product did not match its description1",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "104",
                          "LanguageName": "English",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 85,
                          "Reason": "Le produit ne correspond &#224; sa description",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "104",
                          "LanguageName": "French",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 86,
                          "Reason": "Het product komt niet overeen de beschrijving",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "104",
                          "LanguageName": "Dutch",
                          "Sequenceno": 4
                        }
                      ],
                      [
                        {
                          "PKReasonID": 87,
                          "Reason": "Incorrect Product or Size Ordered",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "105",
                          "LanguageName": "English",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 88,
                          "Reason": " Produit ou Taille incorrecte Ordonn&#233;",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "105",
                          "LanguageName": "French",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 89,
                          "Reason": " Onjuiste product of maat besteld",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "105",
                          "LanguageName": "Dutch",
                          "Sequenceno": 7
                        }
                      ]
                    ]
                </pre>
            </div>

            <div class="toc-item-anchor"><a name="GetBMCarriersbyCustomerid"></a></div>
            <h2 class="h2 title toc-headings">GetBMCarriersbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Carrier/GetBMCarriersbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Carriers by Customer ID and selected country (which you get from above API call) and from this response pick up the values for  PKCarrierid, Carriername, Warehouseid as these values will be used in “PostMode1”.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMCarriersbyCustomerid</td>
                        <td>Get Carriers by Customer Id and Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field ConsumerShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field FKCustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      {
                        "PKCarrierID": 1,
                        "CarrierName": "DHL",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KRUISHOUTEM1",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 5,
                        "CarrierName": "UPS",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      }
                    ]
                </pre>
            </div>
            <div class="toc-item-anchor"><a name="PostBMReturnOrder"></a></div>
            <h2 class="h2 title toc-headings">PostBMReturnOrder</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnorder/PostBMReturnOrder</li>
                <li><i>Description: </i>This Call for placing return order with order information.</li>
            </ul>

            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td>
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerId</p>
                        </td>
                        <td nowrap="">
                            <p>101</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field Consumerid ID of the consumer Alpha numeric Length 25</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName1</p>
                        </td>
                        <td nowrap="">
                            <p>HARVEY NICHOLS DIST.CENTRE -C</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerName1 Name of the Consumer Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerName2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerEmail Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail2</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>This is user Defined Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet1</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION LILIPUT</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet1 Consumer Street 1 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Consumershipstreet2</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet2 Consumer Street 2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Consumershipstreet3</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet3 Consumer Street 3 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>Consumerphonenumber</p>
                        </td>
                        <td nowrap="">
                            <p>1234567891</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerPhoneNumber Consumer Phone Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipHouseNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1-2-3</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerFromShipHouseNumber Consumer House No Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipPostalCode</p>
                        </td>
                        <td nowrap="">
                            <p>1030</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipPostalCode Consumer Postal Code Length 10</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCity</p>
                        </td>
                        <td nowrap="">
                            <p>NORTHAMPTON</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerFromShipCity Consumer City Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Consumershipstate</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipState Consumer State Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllActiveCountriesbyCustomerid” field CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field OrderId Orderid Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Ordertype</p>
                        </td>
                        <td nowrap="">
                            <p>MUPS STD</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field OrderType Ordertype Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnOrderTotalRefundAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.00</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Make it total of Returnorder items selected Amount in Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Source</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field Source Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ShipmentId Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>CarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllCarriers” field PKCarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>FKCustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>1246252</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field FKCustomerID Customerid Length 255 numeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerName</p>
                        </td>
                        <td nowrap="">
                            <p>True Religion</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>CustomerName Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Shipfromwarehouseid</p>
                        </td>
                        <td nowrap="">
                            <p>ATPOST123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field WarehouseId</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>XYZ</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td >
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Mode</p>
                        </td>
                        <td nowrap="">
                            <p>2</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send mode as 2</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>BccEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Apoyar</p>
                        </td>
                        <td nowrap="">
                            <p>ahgsdhfagf</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>‘GetBMAllOrdersbyId’ you will get the token in header with field ‘apoyar’ in this function send in header to respective api ‘PostBMReturnOrder’</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>LineId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field OrderlineID</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Orderid</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field OrderId Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field ShipmentId Alphanumeric Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>SKU</p>
                        </td>
                        <td nowrap="">
                            <p>MC907XQ0-COKM.32</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field SKU Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>EanBarcode</p>
                        </td>
                        <td nowrap="">
                            <p>889347388510</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field EANBARCODE Alphanumeric Length 14</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Price</p>
                        </td>
                        <td nowrap="">
                            <p>22.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field Price Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ProductCurrency</p>
                        </td>
                        <td nowrap="">
                            <p>GBP</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field ProductCurrency Length 3</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>QtyReturned</p>
                        </td>
                        <td nowrap="">
                            <p>3</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Selected Quantity</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnReasonId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Selected Return Reason ID</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>TotalLineAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Price multiply with Selected Quantity Count</p>
                        </td>
                        <td nowrap="">
                            <p>Decimal</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Status</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send Default as 1</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <h2 class="h2 title toc-headings">Request Parameters as JSON</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                {
                    "CarrierId":11,
                    "CarrierName":"Fastway",
                    "ConsumerEmail":"x@x.com",
                    "ConsumerEmail2":"sriramk@apoyar.eu",
                    "ConsumerFromShipCity":"MIDDLESBOROUGH",
                    "ConsumerFromShipCountry":"IRL",
                    "ConsumerFromShipHouseNumber":"",
                    "ConsumerFromShipPostalCode":"A65 F4E2",
                    "ConsumerId":101,
                    "ConsumerName1":"PSYCHE LIMITED",
                    "ConsumerShipStreet1":"175-187 LINTHORPE ROAD",
                    "Consumername2":"",
                    "Consumerphonenumber":"",
                    "Consumershipstate":"IR",
                    "Consumershipstreet2":"/",
                    "Consumershipstreet3":"",
                    "FKCustomerId":1,
                    "OrderId":"410009352004",
                    "Ordertype":"MUPS STD",
                    "ReturnOrderTotalRefundAmount":"74.00",
                    "Shipfromwarehouseid":"OLDENZAL1",
                    "ShipmentId":"410009352004",
                    "Source":"RP",
                    "Status":1,
                    "Mode":2,
                    “BccEmail”:”x@x.com”,
                    "Returnorderline":[{
                        "EanBarcode":"889347388510",
                        "LineId":1,
                        "OrderId":"410009352004",
                        "Price":"74.00",
                        "ProductCurrency":"GBP",
                        "QtyReturned":1,
                        "ReturnReasonId":108,
                        "SKU":"MC907XQ0-COKM.32",
                        "ShipmentId":"",
                        "Status":1
                        "TotalLineAmount":74
                    }]
                }

                </pre>
            </div>
            <h2 class="h2 title toc-headings">Json Response</h2>

            <div class="geshifilter">
                <h3>Status=2000: Return order created but Return Label not Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"1000",
                    "Messages":"Error Message",
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=1000: Return order created and Return Label generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"2000",
                    "Messages":"returnlabelurl",  [URL of the return label]
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode OK 200.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=0: Return order NOT created and Return Label NOT Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"0",
                    "Messages":"Error Message"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
        </div>
        <div class="content">
            <div>
            <div class="toc-item-anchor"><a name="mode3"></a></div>
            <h2 class="h2 title toc-headings" style="color:#cc1543;">Operation Mode 3</h2>

            <div class="toc-item-anchor"><a name="GetAllActiveCountriesbyCustomerid3"></a></div>
            <h2 class="h2 title toc-headings">GetAllActiveCountriesbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Country/GetAllActiveCountriesbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Countries by Customer ID and from this response pick up the CountryCode as this will be used in the subsequesnt API calls “GetBMCarriersbyCustomerid” and “PostMode3”.</li>
            </ul>

            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetAllActiveCountriesbyCustomerid</td>
                        <td>Gets all active countries based on customerid provided&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Alpha NUmeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [{
                        "PKCountryId": 2,
                        "CountryName": "ALBANIA",
                        "CountryCode": "ALB",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 14,
                        "CountryName": "AUSTRIA",
                        "CountryCode": "AUT",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 21,
                        "CountryName": "BELGIUM",
                        "CountryCode": "BEL",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 73,
                        "CountryName": "FRANCE",
                        "CountryCode": "FRA",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 80,
                        "CountryName": "GERMANY",
                        "CountryCode": "DEU",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 103,
                        "CountryName": "IRELAND",
                        "CountryCode": "IRL",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 105,
                        "CountryName": "ITALY",
                        "CountryCode": "ITA",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 124,
                        "CountryName": "LUXEMBOURG",
                        "CountryCode": "LUX",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 150,
                        "CountryName": "NETHERLANDS",
                        "CountryCode": "NLD",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 225,
                        "CountryName": "UNITED KINGDOM",
                        "CountryCode": "GBR",
                        "IsActive": true
                      }
                    ]
                </pre>
            </div>
            <div class="toc-item-anchor">
                <a name="GetBMCarriersbyCustomerid3"></a>
            </div>
            <h2 class="h2 title toc-headings toc-headings">GetBMCarriersbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Carrier/GetBMCarriersbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Carriers by Customer ID and selected country (which you get from above API call) and from this response pick up the values for  PKCarrierid, Carriername, Warehouseid as these values will be used in “PostMode1”.</li>
            </ul>     
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMCarriersbyCustomerid</td>
                        <td>Get Carriers by Customer Id and Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>2 Character Code</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                [
                  {
                    "PKCarrierID": 1,
                    "CarrierName": "DHL",
                    "Isactive": true,
                    "WarehouseId": "KHTRUEFC",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  },
                  {
                    "PKCarrierID": 3,
                    "CarrierName": "Royal Mail",
                    "Isactive": true,
                    "WarehouseId": "KHTRUEFC",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  },
                  {
                    "PKCarrierID": 3,
                    "CarrierName": "Royal Mail",
                    "Isactive": true,
                    "WarehouseId": "KRUISHOUTEM1",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  },
                  {
                    "PKCarrierID": 5,
                    "CarrierName": "UPS",
                    "Isactive": true,
                    "WarehouseId": "KHTRUEFC",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  }
                ]
                </pre>
            </div>
            <div class="toc-item-anchor"><a name="PostMode3"></a></div>
            <h2 class="h2 title toc-headings">PostMode3</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnorder/PostMode3</li>
                <li><i>Description: </i>This Call for placing return order without order information only with consumer information by Customer Service User.</li>
            </ul>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td>
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerId</p>
                        </td>
                        <td nowrap="">
                            <p>101</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ID of the consumer Alpha numeric Length 25</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName1</p>
                        </td>
                        <td nowrap="">
                            <p>HARVEY NICHOLS DIST.CENTRE -C</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Name of the Consumer Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail2</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet1</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION LILIPUT</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer Street 1 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipHouseNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1-2-3</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Consumer House No Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipPostalCode</p>
                        </td>
                        <td nowrap="">
                            <p>1030</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer Postal Code Length 10</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCity</p>
                        </td>
                        <td nowrap="">
                            <p>NORTHAMPTON</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer City Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Consumershipstate</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer State Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllActiveCountriesbyCustomerid” field CountryCode.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllCarriers” field PKCarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>FKCustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>1246252</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Customerid Length 255 numeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerName</p>
                        </td>
                        <td nowrap="">
                            <p>True Religion</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>CustomerName Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Shipfromwarehouseid</p>
                        </td>
                        <td nowrap="">
                            <p>ATPOST123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field WarehouseId</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>XYZ</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td >
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Mode</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send mode as 1</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>BccEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Userid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Customer Representative Id</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Orderid</p>
                        </td>
                        <td nowrap="">
                            <p>89898989</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Orderid</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Apoyar</p>
                        </td>
                        <td nowrap="">
                            <p>‘hjhakjDHKJASD’</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Login user Token “Send in Header”</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request Parameters as JSON</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    {
                        "ConsumerId":"101",
                        "ConsumerName1":"HARVEY NICHOLS DIST.CENTRE -C/",
                        "ConsumerEmail":"",
                        "ConsumerShipStreet1":"DIMENSION LILIPUT",
                        "ConsumerFromShipHouseNumber":"",
                        "ConsumerFromShipPostalCode":"NN4 7AS",
                        "ConsumerFromShipCity":"NORTHAMPTON",
                        "Consumershipstate":"GB",
                        "ConsumerFromShipCountry":"GB",   [Send only Country Code]
                        "CarrierId":"1",
                        "FKCustomerId":"1",
                        “Shipfromwarehouseid”: “KHTRUEFC”,
                        "CarrierName":"DHL",
                        “Userid”:1,
                        “Mode”:3,
                        “BccEmail”:”x@x.com”,
                        “Orderid”:”89898989”
                    }
                </pre>
            </div>
            <h2 class="h2 title toc-headings">Json Response</h2>

            <div class="geshifilter">
                <h3>Status=2000: Return order created but Return Label not Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"1000",
                    "Messages":"Error Message",
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=1000: Return order created and Return Label generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"2000",
                    "Messages":"returnlabelurl",  [URL of the return label]
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode OK 200.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=0: Return order NOT created and Return Label NOT Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"0",
                    "Messages":"Error Message"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
          </div>

        </div>
        <div class="content">
            <div>
                <div class="toc-item-anchor"><a name="mode4"></a></div>
                <h2 class="h2 title toc-headings" style="color:#cc1543;">Operation Mode 4</h2>
            </div>


            <div class="toc-item-anchor"><a name="PostSearchOrders"></a></div>
            <h2 class="h2 title toc-headings">PostSearchOrders</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Order/PostSearchOrders</li>
                <li><i>Description: </i>Get Order and Orderlines by ConumserEmail and Orderid. Please send atleast one of emailid or phone or name. CustomerID is a mandatory field.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PostSearchOrders</td>
                        <td>Get Order and Orderlines by ConumserEmail and Orderid.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Email</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Provide Valid Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Orderid</p>
                        </td>
                        <td nowrap="">
                            <p>41P24005050000126</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Phone</p>
                        </td>
                        <td nowrap="">
                            <p>9999999999</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Provide Valid Phone Number</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Name</p>
                        </td>
                        <td nowrap="">
                            <p>Xxx</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>123a</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Alpha Numeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      {
                        "Status": 10,
                        "ShipmentId": "430000010001",
                        "FKCustomerID": "",
                        "Consumerid": "TRGIT1",
                        "ConsumerEmail": "sriramsukesh@gmail.com",
                        "ShipFromWarehouseId": "KHTRUEFC",
                        "Source": "RP",
                        "OrderType": "NIET-MP",
                        "OrderId": "430000010001",
                        "ConsumerPhoneNumber": "",
                        "ShippedDate": "2013-04-26T09:18:25.511388",
                        "DeliveyDate": "1800-01-01T00:00:00",
                        "MaxReturnDays": -1,
                        "ConsumerName1": "TRUE RELIGION BRAND JEANS ITAL",
                        "ConsumerName2": "",
                        "ConsumerShipStreet1": "VIA MORIMONDO 5",
                        "ConsumerShipStreet2": "/",
                        "ConsumerShipStreet3": "",
                        "ConsumerShipHouseNumber": "",
                        "ConsumerShipPostalCode": "20143",
                        "ConsumerShipCity": "MILAN",
                        "ConsumerShipState": "IT",
                        "ConsumerShipCountry": "ITA",
                        "ConsumerLanguage": "",
                        "TotalValue": 0,
                        "BMOrderLine": null
                      }
                    ] 

                </pre>
            </div>
            <div class="toc-item-anchor"><a name="GetBMAllOrdersbyid4"></a></div>
            <h2 class="h2 title toc-headings">GetBMAllOrdersbyid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Order/GetBMAllOrdersbyid</li>
                <li><i>Description: </i>This call is used to get Order and Orderlines by ConsumerEmail and Orderid from this response pick up the Data(How to use Mention in Below Table of PostBMReturnOrder for fields) as this will be used in the subsequesnt API “PostBMReturnOrder” and from that Data ConsumerShipCountry and FKCustomerID field to be used in “GetBMCarriersbyCustomerid”</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMAllOrdersbyid</td>
                        <td>Gets all Order and Orderlines by ConsumerEmail and Orderid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Provide Valid Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Orderid</p>
                        </td>
                        <td nowrap="">
                            <p>41P24005050000126</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    {
                      "Status": -1,
                      "ShipmentId": "41P24005050000126",
                      "FKCustomerID": "",
                      "Consumerid": "TRGDE0",
                      "ConsumerEmail": "x@x.com",
                      "ShipFromWarehouseId": "KHTRUEFC",
                      "Source": "RP",
                      "OrderType": "X-DOCK",
                      "OrderId": "41P24005050000126",
                      "ConsumerPhoneNumber": "",
                      "ShippedDate": "2013-04-30T09:17:41",
                      "DeliveyDate": "1800-01-01T00:00:00",
                      "MaxReturnDays": -1,
                      "ConsumerName1": "TRUE RELIGION BRANDJEANS GERMA",
                      "ConsumerName2": "",
                      "ConsumerShipStreet1": "INDUSTRIEZONE 6C",
                      "ConsumerShipStreet2": "/",
                      "ConsumerShipStreet3": "",
                      "ConsumerShipHouseNumber": "",
                      "ConsumerShipPostalCode": "9770",
                      "ConsumerShipCity": "KRUISHOUTEM",
                      "ConsumerShipState": "BE",
                      "ConsumerShipCountry": "BEL",
                      "ConsumerLanguage": "",
                      "TotalValue": 0,
                      "BMOrderLine": [{
                          "Status": 10,
                          "WarehouseId": "KHTRUEFC",
                          "ShipmentLineId": 1011,
                          "ShipmentId": null,
                          "OrderId": "41P24005050000126",
                          "OrderlineID": 1011,
                          "SKU": "M13JX43BW2-1001.38",
                          "StyleDescription": "MENS STUDDED BIKER BELT",
                          "ColourDescription": "BLACK",
                          "SizeDescription": "38",
                          "EANBARCODE": "887150445222",
                          "HTS": "",
                          "Origine": "",
                          "Price": 53.94,
                          "ProductCurrency": "USD",
                          "UnitWeight": 0.001,
                          "UnitOfMeasure": "STUKS",
                          "HazmatCode": "",
                          "QtyShipped": 0,
                          "TotalLineAmount": -1618.200000000001
                        }]
                    }

                </pre>
            </div>
            <div class="toc-item-anchor"><a name="GetAllReturnReasonsbyCustomerid4"></a></div>
            <h2 class="h2 title toc-headings">GetAllReturnReasonsbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnreason/GetAllReturnReasonsbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Returnreasons by Customer ID and from this response pick up the values for  PKReasonID as these values will be used in “PostBMReturnOrder.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetAllReturnreasonsbyCustomerid</td>
                        <td>Get Returnreaons for customer language wise and with sequence no by Customer Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field FKCustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      [
                        {
                          "PKReasonID": 84,
                          "Reason": "The product did not match its description1",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "104",
                          "LanguageName": "English",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 85,
                          "Reason": "Le produit ne correspond &#224; sa description",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "104",
                          "LanguageName": "French",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 86,
                          "Reason": "Het product komt niet overeen de beschrijving",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "104",
                          "LanguageName": "Dutch",
                          "Sequenceno": 4
                        }
                      ],
                      [
                        {
                          "PKReasonID": 87,
                          "Reason": "Incorrect Product or Size Ordered",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "105",
                          "LanguageName": "English",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 88,
                          "Reason": " Produit ou Taille incorrecte Ordonn&#233;",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "105",
                          "LanguageName": "French",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 89,
                          "Reason": " Onjuiste product of maat besteld",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "105",
                          "LanguageName": "Dutch",
                          "Sequenceno": 7
                        }
                      ]
                    ]
                </pre>
            </div>

            <div class="toc-item-anchor"><a name="GetBMCarriersbyCustomerid4"></a></div>
            <h2 class="h2 title toc-headings">GetBMCarriersbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Carrier/GetBMCarriersbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Carriers by Customer ID and selected country (which you get from above API call) and from this response pick up the values for  PKCarrierid, Carriername, Warehouseid as these values will be used in “PostMode1”.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMCarriersbyCustomerid</td>
                        <td>Get Carriers by Customer Id and Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field ConsumerShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field FKCustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      {
                        "PKCarrierID": 1,
                        "CarrierName": "DHL",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KRUISHOUTEM1",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 5,
                        "CarrierName": "UPS",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      }
                    ]
                </pre>
            </div>
            <div class="toc-item-anchor"><a name="PostBMReturnOrder4"></a></div>
            <h2 class="h2 title toc-headings">PostBMReturnOrder</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnorder/PostBMReturnOrder</li>
                <li><i>Description: </i>This Call for placing return order with order information.</li>
            </ul>

            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td>
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerId</p>
                        </td>
                        <td nowrap="">
                            <p>101</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field Consumerid ID of the consumer Alpha numeric Length 25</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName1</p>
                        </td>
                        <td nowrap="">
                            <p>HARVEY NICHOLS DIST.CENTRE -C</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerName1 Name of the Consumer Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerName2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerEmail Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail2</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>This is user Defined Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet1</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION LILIPUT</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet1 Consumer Street 1 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Consumershipstreet2</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet2 Consumer Street 2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Consumershipstreet3</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet3 Consumer Street 3 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>Consumerphonenumber</p>
                        </td>
                        <td nowrap="">
                            <p>1234567891</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerPhoneNumber Consumer Phone Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipHouseNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1-2-3</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerFromShipHouseNumber Consumer House No Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipPostalCode</p>
                        </td>
                        <td nowrap="">
                            <p>1030</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipPostalCode Consumer Postal Code Length 10</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCity</p>
                        </td>
                        <td nowrap="">
                            <p>NORTHAMPTON</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerFromShipCity Consumer City Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Consumershipstate</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipState Consumer State Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllActiveCountriesbyCustomerid” field CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field OrderId Orderid Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Ordertype</p>
                        </td>
                        <td nowrap="">
                            <p>MUPS STD</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field OrderType Ordertype Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnOrderTotalRefundAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.00</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Make it total of Returnorder items selected Amount in Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Source</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field Source Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ShipmentId Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>CarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllCarriers” field PKCarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>FKCustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>1246252</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field FKCustomerID Customerid Length 255 numeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerName</p>
                        </td>
                        <td nowrap="">
                            <p>True Religion</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>CustomerName Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Shipfromwarehouseid</p>
                        </td>
                        <td nowrap="">
                            <p>ATPOST123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field WarehouseId</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>XYZ</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td >
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Mode</p>
                        </td>
                        <td nowrap="">
                            <p>2</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send mode as 2</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>BccEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Apoyar</p>
                        </td>
                        <td nowrap="">
                            <p>ahgsdhfagf</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>‘GetBMAllOrdersbyId’ you will get the token in header with field ‘apoyar’ in this function send in header to respective api ‘PostBMReturnOrder’</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>LineId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field OrderlineID</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Orderid</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field OrderId Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field ShipmentId Alphanumeric Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>SKU</p>
                        </td>
                        <td nowrap="">
                            <p>MC907XQ0-COKM.32</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field SKU Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>EanBarcode</p>
                        </td>
                        <td nowrap="">
                            <p>889347388510</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field EANBARCODE Alphanumeric Length 14</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Price</p>
                        </td>
                        <td nowrap="">
                            <p>22.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field Price Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ProductCurrency</p>
                        </td>
                        <td nowrap="">
                            <p>GBP</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field ProductCurrency Length 3</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>QtyReturned</p>
                        </td>
                        <td nowrap="">
                            <p>3</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Selected Quantity</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnReasonId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Selected Return Reason ID</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>TotalLineAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Price multiply with Selected Quantity Count</p>
                        </td>
                        <td nowrap="">
                            <p>Decimal</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Status</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send Default as 1</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Userid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Customer Representative Id</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <h2 class="h2 title toc-headings">Request Parameters as JSON</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    {
                        "CarrierId":11,
                        "CarrierName":"Fastway",
                        "ConsumerEmail":"x@x.com",
                        "ConsumerEmail2":"sriramk@apoyar.eu",
                        "ConsumerFromShipCity":"MIDDLESBOROUGH",
                        "ConsumerFromShipCountry":"IRL",
                        "ConsumerFromShipHouseNumber":"",
                        "ConsumerFromShipPostalCode":"A65 F4E2",
                        "ConsumerId":101,
                        "ConsumerName1":"PSYCHE LIMITED",
                        "ConsumerShipStreet1":"175-187 LINTHORPE ROAD",
                        "Consumername2":"",
                        "Consumerphonenumber":"",
                        "Consumershipstate":"IR",
                        "Consumershipstreet2":"/",
                        "Consumershipstreet3":"",
                        "FKCustomerId":1,
                        "OrderId":"410009352004",
                        "Ordertype":"MUPS STD",
                        "ReturnOrderTotalRefundAmount":"74.00",
                        "Shipfromwarehouseid":"OLDENZAL1",
                        "ShipmentId":"410009352004",
                        "Source":"RP",
                        "Status":1,
                        "Userid":123,
                        "Mode":4,
                        "BccEmail":x@x.com”,
                        "Returnorderline":[{
                            "EanBarcode":"889347388510",
                            "LineId":1,
                            "OrderId":"410009352004",
                            "Price":"74.00",
                            "ProductCurrency":"GBP",
                            "QtyReturned":1,
                            "ReturnReasonId":108,
                            "SKU":"MC907XQ0-COKM.32",
                            "ShipmentId":"",
                            "Status":1
                            "TotalLineAmount":74
                        }]
                    }
                </pre>
            </div>
            <h2 class="h2 title toc-headings">Json Response</h2>

            <div class="geshifilter">
                <h3>Status=2000: Return order created but Return Label not Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"1000",
                    "Messages":"Error Message",
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=1000: Return order created and Return Label generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"2000",
                    "Messages":"returnlabelurl",  [URL of the return label]
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode OK 200.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=0: Return order NOT created and Return Label NOT Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"0",
                    "Messages":"Error Message"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
        </div>
        <div class="content">
            <div>
                <div class="toc-item-anchor"><a name="mode5"></a></div>
                <h2 class="h2 title toc-headings" style="color:#cc1543;">Operation Mode 5</h2>
            </div>

            <div class="toc-item-anchor"><a name="GetAllReturnReasonsbyCustomerid5"></a></div>
            <h2 class="h2 title toc-headings">GetAllReturnReasonsbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnreason/GetAllReturnReasonsbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Returnreasons by Customer ID and from this response pick up the values for  PKReasonID as these values will be used in “PostBMReturnOrder.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetAllReturnreasonsbyCustomerid</td>
                        <td>Get Returnreaons for customer language wise and with sequence no by Customer Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Bleckmann CustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      [
                        {
                          "PKReasonID": 84,
                          "Reason": "The product did not match its description1",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "104",
                          "LanguageName": "English",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 85,
                          "Reason": "Le produit ne correspond &#224; sa description",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "104",
                          "LanguageName": "French",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 86,
                          "Reason": "Het product komt niet overeen de beschrijving",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "104",
                          "LanguageName": "Dutch",
                          "Sequenceno": 4
                        }
                      ],
                      [
                        {
                          "PKReasonID": 87,
                          "Reason": "Incorrect Product or Size Ordered",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "105",
                          "LanguageName": "English",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 88,
                          "Reason": " Produit ou Taille incorrecte Ordonn&#233;",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "105",
                          "LanguageName": "French",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 89,
                          "Reason": " Onjuiste product of maat besteld",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "105",
                          "LanguageName": "Dutch",
                          "Sequenceno": 7
                        }
                      ]
                    ]

                </pre>
            </div>

            <div class="toc-item-anchor"><a name="GetBMCarriersbyCustomerid5"></a></div>
            <h2 class="h2 title toc-headings">GetBMCarriersbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Carrier/GetBMCarriersbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Carriers by Customer ID and selected country (which you get from above API call) and from this response pick up the values for  PKCarrierid, Carriername, Warehouseid as these values will be used in “PostMode1”.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMCarriersbyCustomerid</td>
                        <td>Get Carriers by Customer Id and Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field ConsumerShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field FKCustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      {
                        "PKCarrierID": 1,
                        "CarrierName": "DHL",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KRUISHOUTEM1",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 5,
                        "CarrierName": "UPS",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      }
                    ]
                </pre>
            </div>
            <div class="toc-item-anchor"><a name="PostMode5"></a></div>
            <h2 class="h2 title toc-headings">PostMode5</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnorder/PostMode5</li>
                <li><i>Description: </i>This Call for placing return order with order information.</li>
            </ul>

            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td>
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerId</p>
                        </td>
                        <td nowrap="">
                            <p>101</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ID of the consumer Alpha numeric Length 25</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName1</p>
                        </td>
                        <td nowrap="">
                            <p>HARVEY NICHOLS DIST.CENTRE -C</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerName1 Name of the Consumer Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>ConsumerName2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerEmail Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail2</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>This is user Defined Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet1</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION LILIPUT</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerShipStreet1 - Consumer Street 1 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Consumershipstreet2</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>ConsumerShipStreet2 - Consumer Street 2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Consumershipstreet3</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>ConsumerShipStreet3 - Consumer Street 3 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>Consumerphonenumber</p>
                        </td>
                        <td nowrap="">
                            <p>1234567891</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>ConsumerPhoneNumber Consumer Phone Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipHouseNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1-2-3</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>ConsumerShipHouseNumber Consumer House No Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipPostalCode</p>
                        </td>
                        <td nowrap="">
                            <p>1030</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerShipPostalCode Consumer Postal Code Length 10</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCity</p>
                        </td>
                        <td nowrap="">
                            <p>NORTHAMPTON</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerShipCity Consumer City Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Consumershipstate</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerShipState Consumer State Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerFromShipCountry Consumer Country Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>OrderId Orderid Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Ordertype</p>
                        </td>
                        <td nowrap="">
                            <p>MUPS STD</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>OrderType Ordertype Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnOrderTotalRefundAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.00</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Make it total of Returnorder items selected Amount in Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Source</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Source Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ShipmentId Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>CarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllCarriers” field PKCarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>FKCustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>1246252</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Bleckmann CustomerID Customerid Length 255</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerName</p>
                        </td>
                        <td nowrap="">
                            <p>True Religion</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>CustomerName Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Shipfromwarehouseid</p>
                        </td>
                        <td nowrap="">
                            <p>ATPOST123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field WarehouseId</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>XYZ</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td >
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Mode</p>
                        </td>
                        <td nowrap="">
                            <p>2</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send mode as 5</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>BccEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Apoyar</p>
                        </td>
                        <td nowrap="">
                            <p>ahgsdhfagf</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>‘GetBMAllOrdersbyId’ you will get the token in header with field ‘apoyar’ in this function send in header to respective api ‘PostBMReturnOrder’</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>LineId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field OrderlineID</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Orderid</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine field OrderId Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine field ShipmentId Alphanumeric Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>SKU</p>
                        </td>
                        <td nowrap="">
                            <p>MC907XQ0-COKM.32</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine field SKU Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>EanBarcode</p>
                        </td>
                        <td nowrap="">
                            <p>889347388510</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine selected orderline field EANBARCODE Alphanumeric Length 14</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Price</p>
                        </td>
                        <td nowrap="">
                            <p>22.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine field Price Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ProductCurrency</p>
                        </td>
                        <td nowrap="">
                            <p>GBP</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine field ProductCurrency Length 3</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>QtyReturned</p>
                        </td>
                        <td nowrap="">
                            <p>3</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Quantity</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnReasonId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a ReturnReason from the options given. To get the options see API Call “GetAllReturnreasonsbyCustomerid”</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>TotalLineAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Price multiply with Selected Quantity Count</p>
                        </td>
                        <td nowrap="">
                            <p>Decimal</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Status</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send Default as 1</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <h2 class="h2 title toc-headings">Request Parameters as JSON</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    {
                        "CarrierId":11,
                        "CarrierName":"Fastway",
                        "ConsumerEmail":"x@x.com",
                        "ConsumerEmail2":"sriramk@apoyar.eu",
                        "ConsumerFromShipCity":"MIDDLESBOROUGH",
                        "ConsumerFromShipCountry":"IRL",
                        "ConsumerFromShipHouseNumber":"",
                        "ConsumerFromShipPostalCode":"A65 F4E2",
                        "ConsumerId":101,
                        "ConsumerName1":"PSYCHE LIMITED",
                        "ConsumerShipStreet1":"175-187 LINTHORPE ROAD",
                        "Consumername2":"",
                        "Consumerphonenumber":"",
                        "Consumershipstate":"IR",
                        "Consumershipstreet2":"/",
                        "Consumershipstreet3":"",
                        "FKCustomerId":1,
                        "OrderId":"410009352004",
                        "Ordertype":"MUPS STD",
                        "ReturnOrderTotalRefundAmount":"74.00",
                        "Shipfromwarehouseid":"OLDENZAL1",
                        "ShipmentId":"410009352004",
                        "Source":"RP",
                        "Status":1,
                        "Userid":123,
                        "Mode":4,
                        "BccEmail":x@x.com”,
                        "Returnorderline":[{
                            "EanBarcode":"889347388510",
                            "LineId":1,
                            "OrderId":"410009352004",
                            "Price":"74.00",
                            "ProductCurrency":"GBP",
                            "QtyReturned":1,
                            "ReturnReasonId":108,
                            "SKU":"MC907XQ0-COKM.32",
                            "ShipmentId":"",
                            "Status":1
                            "TotalLineAmount":74
                        }]
                    }
                </pre>
            </div>
            <h2 class="h2 title toc-headings">Json Response</h2>

            <div class="geshifilter">
                <h3>Status=2000: Return order created but Return Label not Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"1000",
                    "Messages":"Error Message",
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=1000: Return order created and Return Label generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"2000",
                    "Messages":"returnlabelurl",  [URL of the return label]
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode OK 200.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=0: Return order NOT created and Return Label NOT Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"0",
                    "Messages":"Error Message"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
        </div>
    </article>
  </div>
</main>
<br/>
<br/>


<script type="text/javascript">
    $(function(){
        $('#apicalls').addClass('active');
        $('#intro').removeClass('active');
    });
</script>