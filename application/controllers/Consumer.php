<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumer extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->helper("url");
	  //$this->load->helper("get_appearance_settings.php");
    
    if(!isset($_GET['Customer'])){
      echo 'please provide a customer id';
      exit();
    }
    
    $this->Customerid=$_GET['Customer'];
    if ( isset($_GET['Mode'])) {
      $this->Mode=$_GET['Mode'];
    } else {
      $this->Mode=2;
    }
    if(isset($_GET['Lang'])){
      $this->Languagename=$_GET['Lang'];
    } else {
      if ( count( $this->getCustomerLanguages() ) > 0 ) {
        foreach($this->getCustomerLanguages() as $l) {
          if($l['Isdefault']==true){
            $this->Languagename=$l['LanguageName'];
            break;
          }
          else{
            $this->Languagename='English';
            $this->Links = $l['Links'];
          }
        }
      } else {
        $this->Languagename='English';
      }
    }
  }

  private function getCustomerLanguages(){
    $data = array(
      'Customerid'=>$this->Customerid
    );

    $data_url='?'.http_build_query($data);

    $data_string = json_encode($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_URL, API_BASE_URL_BE."api/CustomerLanguage/GetCustomerLanguagebyId".$data_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send the request
    $result = json_decode(curl_exec($ch), true);

    // Free up the resources $curl is using
    curl_close($ch);

    return $result;
  }
  private function getTranslations(){

    $data = array(
      'Customerid'=>$this->Customerid
    );

    $data_url='?'.http_build_query($data);

    $data_string = json_encode($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_URL, API_BASE_URL_BE."api/Translation/GetAllTranslationsbyCustomerid".$data_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send the request
    $result = json_decode(curl_exec($ch), true);

    // Free up the resources $curl is using
    curl_close($ch);
    
    return $result;
  }
  private function getCountries(){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_URL, API_BASE_URL_BE."api/country/GetAllActiveCountriesForConsumer");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send the request
    $result = json_decode(curl_exec($ch), true);

    // Free up the resources $curl is using
    curl_close($ch);
    
    return $result;
  }
  public function portal(){
    
    $data['customerLanguages']=$this->getCustomerLanguages();
    $data['all_langs']=$data['customerLanguages'];
    $data['allCountries']=$this->getCountries();

    $data['Links'] = [];
    //set customerLanguages to current selected language
    if ( count($data['customerLanguages']) > 0 ) {
        foreach($data['customerLanguages'] as $r) {
          if($r['LanguageName']==$this->Languagename){
            $data['customerLanguages']=$r;
            $data['Links'] = $r['Links'];
          }
        }
        //set translations to current selected language
        $data['translations']=[];
        foreach ($this->getTranslations() as $key => $value) {
          if (is_array($value)) {
            foreach ($value as $kkey => $vvalue) {
              if($vvalue['Languagename']==$this->Languagename){
                array_push($data['translations'], $vvalue);
              }
            }
          }
        }
    }


    $data['Mode']=$this->Mode;
    $data['Customerid']=$this->Customerid;
    $data['LanguageName']=$this->Languagename;
    $customer_id=$this->Customerid;
    $req = array(
      'Customerid'=>$customer_id
    );  
    $data_url='?'.http_build_query($req);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_URL, API_BASE_URL_BE."api/operation/GetOperationsbyCustomerid".$data_url);   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send the request
    $result = json_decode(curl_exec($ch), true);
    // Free up the resources $curl is using
    curl_close($ch);

    $customerOpModes = $result;
	  $data['om1']=false;
    $data['om2']=false;
    for($i=0;$i<count($customerOpModes);$i++) {
      if( $customerOpModes[$i]['FKOperationId'] == 1 ) {
        $data['om1']=true;
      }
      if( $customerOpModes[$i]['FKOperationId'] == 2 ) {
        $data['om2']=true;
      }
    }
	  $data2 = array('Customerid'=>$customer_id);
	  $data_url='?'.http_build_query($data2);
	  $data_string = json_encode($data2);
	  $ch = curl_init();

	  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	  curl_setopt($ch, CURLOPT_URL, API_BASE_URL_BE."api/CustomerSetting/GetCustomerFeaturesbyId".$data_url);	  
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	  // Send the request
	  $result = json_decode(curl_exec($ch), true);
	  // Free up the resources $curl is using
	  curl_close($ch);
	  $appearanceSettings = $result;
	  $serialize_appearance = @unserialize($appearanceSettings['CustomerSetting']['Colours']);
	  if(!is_array($serialize_appearance)){
			  $header_color='#625454';
			  $menu_bg = '#1C1818';
			  $menu_font ='#FFFFFF';
			  $dd_bg = '#CC1543';
			  $dd_font ='#ffffff';
			  $accent_1 = '#CC1543';
			  $accent_2 = '#E25176';
	  }else{		  
		  $Colors = json_encode($serialize_appearance);
		  $Colors = json_decode($Colors);		
		  $main_logo = (isset($appearanceSettings['CustomerSetting']['Logo']))?$appearanceSettings['CustomerSetting']['Logo']:'';
		  $PKSettingID = (isset($appearanceSettings['CustomerSetting']['PKSettingID']))?$appearanceSettings['CustomerSetting']['PKSettingID']:'';
		  $FKCustomerid = (isset($appearanceSettings['CustomerSetting']['FKCustomerid']))?$appearanceSettings['CustomerSetting']['FKCustomerid']:'';
		
			if(count($Colors)>0){
				foreach($Colors as $result){					
					$header_color = (isset($Colors->Header))?$Colors->Header:'';
					$menu_bg = (isset($Colors->Menu[0]))?$Colors->Menu[0]:'';
					$menu_font = (isset($Colors->Menu[1]))?$Colors->Menu[1]:'';					
					$dd_bg = (isset($Colors->Dropdown[0]))?$Colors->Dropdown[0]:'';
					$dd_font = (isset($Colors->Dropdown[1]))?$Colors->Dropdown[1]:'';
					$accent_1 = (isset($Colors->Accent[0]))?$Colors->Accent[0]:'';
					$accent_2 = (isset($Colors->Accent[1]))?$Colors->Accent[1]:'';
				}
		}
	}	
  $data['customername'] = $appearanceSettings['CustomerSetting']['CustomerName'];
	//Use in Live
	/* In header I have put the (style scoped) for specific requirement*/
	$hdr_bg = $header_color;		
	$dd_bg = $dd_bg;
	
	$data['menu_font'] = $menu_font;
	$data['accent_1'] = $accent_1;
	$data['accent_2'] = $accent_2;
	$data['dd_font'] = $dd_font;
	
	$data['dd_bg_style'] = 'style="background-color:'.$dd_bg.' !important;"';	
	$data['menu_bg_style'] = 'style="background-color:'.$menu_bg.' !important;"';
	$data['hdr_bg_style'] = 'style="background-color:'.$hdr_bg.' !important"';
	
	//file_exists($filename)
    $logo = API_BASE_URL_FE.'images/'.$customer_id.'/logo/logo.png';
    $spacer = API_BASE_URL_FE.'images/'.$customer_id.'/spacer/spacer.png';
    $loading = API_BASE_URL_FE.'images/'.$customer_id.'/loading/loading.gif';      
  
    $data['logo'] =  (@fopen($logo, 'r'))?$logo:base_url().'/img/logo.png';
    $data['spacer'] = (@fopen($spacer, 'r'))?$spacer:base_url().'/img/bm-spacer.jpg';
    $data['loading'] = (@fopen($loading, 'r'))?$loading:base_url().'/img/loading-pink.gif';  

    $this->load->view('consumer/templates/header', $data);
    $this->load->view('consumer/portal', $data);
    $this->load->view('consumer/templates/footer');
  }	
}