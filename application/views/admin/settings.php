    <?php
      //echo var_dump($customerLanguages);
    ?>
    <div class='col-xs-12 col-md-9' height='100%'>
      <div class='well body_btm_bdr' id='rr-panel'>
        <?php
          if(isset($_SESSION['message']['rr'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['rr'].'
            </div>';
          }
        ?>       
        
        <form method="POST" action="submitReturnReasons">
        <!--<form method="POST" action="debug">-->
        <h3>Edit return reasons 
		      <input name="ReturnReasons" class="ReturnReasons" value="1" type="hidden">
          <button type="button" data-toggle="modal" data-target="#myModal" id='add-return' class='btn btn-raised btn-warning pull-right'>Add</button>    <?php
              if ( isset($returnReasons[0]) ) {
                echo '<button class="btn btn-raised btn-success pull-right save-reasons" type="submit">Save</button>';
              }
            ?>
        </h3>
		
        <br>
        <div class="hidden">marker2</div>
        <br>        

        <?php
          $counter=0;
        
          if ( isset($returnReasons[0]) ) {
            foreach ($returnReasons as $key=>$value){
  			       $reason_div = 'reason_div'.$counter;			
  			       $hdnval = 'hdnval'.$counter;
          			echo '<div id="'.$reason_div.'" style="border: 1px solid #ddd; padding: 20px;"">';
          			if($counter!=0){
          				echo '<span class="order-btn"><span class="rr-counter"> ('.($counter+1).') </span><button type="button" class="btn move-up-btn">Move Up <span class="glyphicon glyphicon-arrow-up"></span></button></span>';
          			}else{
          				echo '<span class="order-btn"><span class="rr-counter"> ('.($counter+1).') </span></span>';
          			}echo '<span class="reason_span">';
          			foreach ($value as $rkey=>$rvalue) {
          				
          				if(($rkey+1)<=count($customerLanguages)){
          					foreach ($rvalue as $rrkey=>$rrvalue){
          						
          						if($rrkey!='Reason'){
          							echo ' <input type="hidden" class="'.$rrkey.'" name="ReturnReasons['.$key.']['.$rkey.']['.$rrkey.']" value="'.$rrvalue.'">';
          						}
          						else{
          							echo'<div class="form-group label-floating language_lbl">
          							<label for="i5" class="control-label">'.$rvalue['LanguageName'].'</label>
          							<input id="search-admin" type="text" name="ReturnReasons['.$key.']['.$rkey.']['.$rrkey.']" class="form-control reason_text" id="i5" value="'.$rrvalue.'"> <span class="help-block">Edit the reason</code></span>
          							</div>';
          						}
          						
          					}
          				}
  				
  			       }//echo '</span>';
                if(count($customerLanguages)>count($value)){
                  for($i=0; $i<(count($customerLanguages)-count($value)); $i++){
                    echo '
                    <input type="hidden" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][PKReasonID]" value="-1">';
                    echo '
                    <input type="hidden" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][FKCustomerID]" value="'.$_SESSION['Customerid'].'">';
                    echo '
                    <input type="hidden" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][IsActive]" value="true">';
                    echo '
                    <input type="hidden" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][FkLanguageid]" value="'.$customerLanguages[($rkey+$i+1)]['FkLanguageid'].'">';
                    echo '
                    <input type="hidden"  name="ReturnReasons['.$key.']['.($rkey+$i+1).'][Uid]" value="'.$returnReasons[$key][$rkey]['Uid'].'">';
                    echo '
                    <input type="hidden" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][LanguageName]" value="'.$customerLanguages[($rkey+$i+1)]['LanguageName'].'">';                  
                    
                    echo'
                    <div class="form-group label-floating">
                    <label for="i5" class="control-label">'.$customerLanguages[($rkey+$i+1)]['LanguageName'].'</label>
                    <input id="search-admin" type="text" name="ReturnReasons['.$key.']['.($rkey+$i+1).'][Reason]" class="form-control" id="i5" value="new reason">
                    <span class="help-block">Add a new reason</code></span>
                    </div>';
                  } 
                }
                if(count($returnReasons)>0){
                  echo '<button type="button" data-toggle="modal" data-target="#del-return'.$rvalue['Uid'].'" class="btn btn-raised btn-danger btn-warning pull-right">Delete</button><br><br>';
                }
                echo '</span></div><br>';
                $counter++;
            }
          }
        ?>

      </form>
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form method="POST" action="submitReturnReasons">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" >Add a return reason</h4>
              </div>
              <div class="modal-body">
                <?php
                /*$reason=[
                  "PKReasonID": -1,
                  "Reason": "Product Not Good English",
                  "FKCustomerID": $_SESSION['Customerid'],
                  "IsActive": true,
                  "FkLanguageid": $lang['FkLanguageid'],
                  "Uid": -1,
                  "LanguageName": $lang['LanguageName']
                ];*/
                $rkey=0;
                $key=0;
                $sequenceno_max =1;
                
                if(isset($rrvalue)){
				          $sequenceno_max = $rrvalue+1;
                }
                foreach ($customerLanguages as $lang){
                  
                  echo '<input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][PKReasonID]" value="-1">';
                  echo '
                  <input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][FKCustomerID]" value="'.$_SESSION['Customerid'].'">';
                  echo '
                  <input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][IsActive]" value="true">';
                  echo '
                  <input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][FkLanguageid]" value="'.$lang['FkLanguageid'].'">';
                  echo '
                  <input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][Uid]" value="">';
                  echo '<input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][LanguageName]" value="'.$lang['LanguageName'].'">';
				  echo '<input type="hidden" name="ReturnReasons['.$key.']['.$rkey.'][Sequenceno]" value="'.$sequenceno_max.'">';
                  
                  echo'
                  <div class="form-group label-floating">
                  <label for="i5" class="control-label">'.$lang['LanguageName'].'</label>
                  <input id="search-admin" type="text" name="ReturnReasons['.$key.']['.$rkey.'][Reason]" class="form-control" id="i5" value="">
                  <span class="help-block">Add a new reason</code></span>
                  </div>';
                  $rkey=$rkey+1;
                  
                }
                ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">add</button>
              </div>
              </form>
            </div>
          </div>
        </div>



        <?php
          if ( isset($returnReasons[0]) ) {
            foreach ($returnReasons as $key=>$value) {
              echo'
               <div class="modal fade" id="del-return'.$value[0]['Uid'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form method="POST" action="submitReturnReasons">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Delete reason?</h4>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure you want to delete this return reason</p>
              ';
              foreach ($value as $rkey=>$rvalue) {
                foreach ($rvalue as $rrkey=>$rrvalue){
                  if($rrkey=='IsActive'){
                    echo '
                      <input type="hidden" name="ReturnReasons[0]['.$rkey.']['.$rrkey.']" value="false">';
                  }
                  else{
                    echo '
                      <input type="hidden" name="ReturnReasons[0]['.$rkey.']['.$rrkey.']" value="'.$rrvalue.'">';
                  }
                }
              }
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
          }
        ?>        
      </div>
      <div class='well body_btm_bdr' id='language-panel'>
        <?php
          if(isset($_SESSION['message']['languages'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['languages'].'
            </div>';
          }
        ?>
        <!--<form method="POST" action="http://ws.developer.bleckmann.apoyaretail.com/api/CustomerLanguage/GetCustomerLanguagebyId">-->
        <form method="POST" action="submitLanguages">
        
        <h3>Edit languages 
                <?php
                  if ( count($customerLanguages) > 0 ) {
                    echo '<button class="btn btn-raised btn-success pull-right save-reasons">Save</button>';
                  }
                ?>
        </h3>
        
        <br>
        <?php
          if ( count($customerLanguages) > 0 ) {
            echo '<h4 >Choose a default language</h4>';
          }
        ?>
        
        <br>
        <div class='form-group'>
        <?php
          if ( count($customerLanguages) > 0 ) {
            echo '<div class="row">';
            $templangsel=true;
            foreach ($customerLanguages as $key=>$val) {
              echo'
                <div class="col-xs-3">
                  <div class="radio">
                    <label>
                      <input type="radio" name="DefaultLanguage" value="'.$val['LanguageName'].'" '.($val['Isdefault']?'checked':'').'> '.$val['LanguageName'].'
                    </label>
                  </div>
                </div>';
              
              if($key==3){
                echo '</div><div class="row">';
              }

              if($val['Isdefault']){
                $templangsel = false;
              }
            }
            echo '</div>';
            if($templangsel){
              echo '
              <script>
              $(\'#language-panel > form > div.form-group > div input[type="radio"]\').attr({\'disabled\': true});
              $(\'#language-panel > form > div.form-group > div > div:nth-child(1) > div > label > input[type="radio"]\').attr(\'checked\', true);
              </script>';
            }
          }
        ?>
        </div>
        <br><br>
        <div class='col-xs-12'>
          <div class="togglebutton">
              <?php 
                if ( count($customerLanguages) > 0 ) {
                  echo ' 
                    <label>
                      <input type="checkbox" id="def-lang-ip" name="DefaultLanguage" value="none"'. ($templangsel?'checked=""':'') . '>
                        Set default language for consumer automatically (based on their IP address)
                    </label>';
                }
              ?>
          </div>
        </div>
        <br><br><br><br>
        
        <div id='header-translations'>
          <?php

            if ( count($customerLanguages) > 0 ) {
              echo '<h4>Edit Header Translations </h4><br>';
              $compiledLangs=[];
              for($i=0; $i<4; $i++){
                $compiledLangs[$i]=array();
                foreach ($customerLanguages as $key=>$val) {
                  array_push($compiledLangs[$i], ['Value'=>$val['Page'.($i+1).'heading'], 'ArrayPos'=>[$key, 'Page'.($i+1).'heading']]);
                  
                  foreach ($val as $kkey => $vvalue) {
                    if($i==0){
                      if(strpos($kkey, 'heading')){

                      }
                      else{
                        echo '<input type="hidden" name="Languages['.$key.']['.$kkey.']" value="'.$vvalue.'">';
                      }
                    }
                  }
                }
              }
              foreach($compiledLangs as $key=>$value){
                echo'<p>Screen '.($key+1).' headers</p>
                <div style="border: 1px solid #ddd; padding: 20px;">';
                foreach ($value as $kkey=>$vvalue) {
                  
                  echo '
                  <div class="form-group label-floating">
                    <label for="i5" class="control-label">'.$customerLanguages[$vvalue['ArrayPos'][0]]['LanguageName'].'</label>
                    <input id="search-admin" type="text" name="Languages['.$vvalue['ArrayPos'][0].']['.$vvalue['ArrayPos'][1].']" class="form-control" id="i5" value="'.$vvalue['Value'].'">
                    <span class="help-block">Edit the header</code></span>
                  </div>';
                }

                echo '</div><br>';
              }
            }
          ?>
        </div>
        </form>
      </div>
      <div class='well body_btm_bdr' id="links-panel">
      <form method="POST" action="submitLinks">
      <button type="button" data-toggle="modal" data-target="#myLinksModal" id='add-link' class='btn btn-raised btn-warning pull-right'>Add</button>
      <h3>Edit links 
      <?php 
        if ( count($customerLanguages) > 0 ) {
          echo '<button class="btn btn-raised btn-success pull-right save-links">Save</button>';
        }
      ?>

      </h3>
      <br>
        <?php
          if(isset($_SESSION['message']['links'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['links'].'
            </div>';
          }
        ?>

        
        <?php
          $i=0;
          $j=0;
          $array_cnt = count($customerLanguages);
          $compiledLinks=[];
          if ( $array_cnt > 0 ) {
            foreach($customerLanguages as $key=>$value) {
                  foreach ($value as $kkey=>$vvalue) {
                    if ( $kkey == 'Links' ) {
                      $new_value = json_decode($vvalue);
                      #echo "new_value : " . json_encode($new_value) . "<br/>";
                      
                      foreach ($new_value as $k => $v) {
                        $compiledLinks[$j] = array();
                        #echo "v : " . $v . "<br/>";
                        array_push($compiledLinks[$j], ['Value'=>$v, 'LinkText'=>$k,'ArrayPos'=>$i]);
                        $j++;
                      }
                    }
                  }
              $i++;
            }
          }
          #echo "compiledLinks : " . json_encode($compiledLinks);
        ?>
            
          <?php
            if ( count($customerLanguages) > 0 ) {
                 $cmp_cnt = (count($compiledLinks)/count($customerLanguages));
                
                for($i=0;$i<$cmp_cnt;$i++) {
                  echo '<div style="border: 1px solid #ddd; padding: 20px;">';
                  #echo "compiledLinks : " . json_encode($compiledLinks[$i]);
                  #echo "cnt : " . ($j+$cmp_cnt);
                  for($j=0;$j<count($customerLanguages);$j++) {
                    echo '
                      <div class="form-group label-floating">
                        <label for="i5" class="control-label">'.$customerLanguages[$j]['LanguageName'].'</label>
                        <input id="search-admin" type="text" name="link[' .$i . '][' . $customerLanguages[$j]['LanguageName']. ']" class="form-control" value="'.$compiledLinks[$i+($cmp_cnt*$j)][0]['LinkText'].'">
                        <span class="help-block">Edit Link Text</code></span>
                      </div>';
                  }
                    echo '
                    <div class="form-group label-floating">
                      <label for="i5" class="control-label">Link Value</label>
                      <input id="search-admin" type="text" class="form-control" name="link[' .$i . '][LinkVal]"  value="'.$compiledLinks[$i][0]['Value'].'">
                      <span class="help-block">Edit link target location</code></span>
                    </div>';
                    echo '<button type="button" data-toggle="modal" data-target="#del-link'.$i.'" class="btn btn-raised btn-danger btn-warning pull-right">Delete</button><br><br>';
                    echo '</div><br>';
                }
              }
          ?>
        </form>
      </div>

        <!-- Modal - Add Link -->
        <div class="modal fade" id="myLinksModal" tabindex="-1" role="dialog" aria-labelledby="myLinksModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form method="POST" action="submitLinks">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add a Link</h4>
              </div>
              <div class="modal-body">
               <?php
                  $cmp_cnt = (count($compiledLinks)/count($customerLanguages));
                  
                  echo '<div style="border: 1px solid #ddd; padding: 20px;">';

                  for($i=0;$i<$cmp_cnt;$i++) {
                    
                    for($j=0;$j<count($customerLanguages);$j++) {
                      echo '
                          <input id="search-admin" type="hidden" name="link[' .$i . '][' . $customerLanguages[$j]['LanguageName']. ']" class="form-control" value="'.$compiledLinks[$i+($cmp_cnt*$j)][0]['LinkText'].'">
                          ';
                    }
                      echo '
                        <input id="search-admin" type="hidden" class="form-control" name="link[' .$i . '][LinkVal]"  value="'.$compiledLinks[$i][0]['Value'].'">';
                  }
                  for($j=0;$j<count($customerLanguages);$j++) {
                    echo '
                      <div class="form-group label-floating">
                        <label for="i5" class="control-label">'.$customerLanguages[$j]['LanguageName'].'</label>
                        <input id="search-admin" type="text" name="link[' .$cmp_cnt . '][' . $customerLanguages[$j]['LanguageName']. ']" class="form-control" value="">
                        <span class="help-block">Add Link Text</code></span>
                      </div>';
                    }

                    echo '
                    <div class="form-group label-floating">
                      <label for="i5" class="control-label">Link Value</label>
                      <input id="search-admin" type="text" name="link['. ($cmp_cnt) .'][LinkVal]" class="form-control" value="">
                      <span class="help-block">Add link target location</code></span>
                    </div>';
                    echo '</div><br>';
              ?>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Modal - Delete Link -->
        <?php
            if ( count($customerLanguages) > 0 ) {
                $cmp_cnt = (count($compiledLinks)/count($customerLanguages));
                for($i=0;$i<$cmp_cnt;$i++) {
                  echo'
                   <div class="modal fade" id="del-link'.$i.'" tabindex="-1" role="dialog" aria-labelledby="myLinksModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form method="POST" action="deleteLinks">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Delete Link?</h4>
                        </div>
                        <div class="modal-body">
                          <p>Are you sure you want to delete this link?</p></div>
                  ';
                    for($j=0;$j<count($customerLanguages);$j++) {
                          echo '
                              <input id="search-admin" type="hidden" name="link[' . $customerLanguages[$j]['LanguageName']. ']" class="form-control" value="'.$compiledLinks[$i+($cmp_cnt*$j)][0]['LinkText']. '$&*#' . $compiledLinks[$i][0]['Value'] .'">
                              ';
                        }
                          // echo '
                          //   <input id="search-admin" type="hidden"  name="link[' .$i . '][LinkVal]"  value="'.$compiledLinks[$i][0]['Value'].'">';
                    echo'
                        
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
            }
        ?>
        
        
        
      <!--EMAIL SECTION-->
      <div class='well body_btm_bdr' id='email-panel'>
        <?php
          if(isset($_SESSION['message']['emails'])){
            echo'
            <div class="alert alert-dismissible alert-success">
              '.$_SESSION['message']['emails'].'
            </div>';
          }
        ?>
        <style>
          #email-panel > form > div > ul > li.tab-head.active{
            background-color: #53b2a9;
          }
        </style>
        <form method='POST' action="submitEmails">
        <button type="submit" id='change-email' class='btn btn-raised btn-success pull-right'>Save</button>
        <h3>Email text 
        
        </h3><br><br>
        <div>
          <?php
            echo '<ul class="nav nav-tabs" role="tablist">';
            for($i=0; $i<sizeof($customerLanguages); $i++){
              
              $lang=$customerLanguages[$i];
              //echo var_dump($lang['LanguageName']);
              
              if($i==0){
                echo '
                <li role="presentation" class="tab-head active">
                <a href="#'.$lang['LanguageName'].'" aria-controls="'.$lang['LanguageName'].'" role="tab" data-toggle="tab">
                '.$lang['LanguageName'].'
                </a>
                </li>';
              }
              else{
                echo '
                <li role="presentation" class="tab-head">
                <a href="#'.$lang['LanguageName'].'" aria-controls="'.$lang['LanguageName'].'" role="tab" data-toggle="tab">
                '.$lang['LanguageName'].'
                </a>
                </li>';
              }
              
            }
            echo '</ul>';
          ?>
          
          
          <?php
            echo '<div class="tab-content">';
            for($i=0; $i<sizeof($customerLanguages); $i++){
              $lang=$customerLanguages[$i];
              echo '<input type="hidden" name="Languages['.$i.'][PKCustomerLanguageID]" value="'.$lang['PKCustomerLanguageID'].'">';
              echo '<input type="hidden" name="Languages['.$i.'][FkLanguageid]" value="'.$lang['FkLanguageid'].'">';
              echo '<input type="hidden" name="Languages['.$i.'][Customerid]" value="'.$lang['Customerid'].'">';
              echo '<input type="hidden" name="Languages['.$i.'][Isdefault]" value="'.$lang['Isdefault'].'">';
              echo '<input type="hidden" name="Languages['.$i.'][Page1heading]" value="'.$lang['Page1heading'].'">';
              echo '<input type="hidden" name="Languages['.$i.'][Page2heading]" value="'.$lang['Page2heading'].'">';
              echo '<input type="hidden" name="Languages['.$i.'][Page3heading]" value="'.$lang['Page3heading'].'">';
              echo '<input type="hidden" name="Languages['.$i.'][Page4heading]" value="'.$lang['Page4heading'].'">';
              //echo '<input type="hidden" name="Languages['.$i.'][LanguageName]" value="'.$lang['LanguageName'].'">';
              //echo '<input type="hidden" name="Languages['.$i.'][Links]" value="'.$lang['Links'].'">';
              if($i==0){
                echo '<div role="tabpanel" class="tab-pane active" id="'.$lang['LanguageName'].'">
                <div class="form-group label-floating">
                  <label for="t1" class="control-label">Email content</label>
                  <textarea rows="6" style="resize: none;" class="form-control" id="t1" name="Languages['.$i.'][EmailText]">'.$lang['EmailText'].'</textarea>
                </div>
                </div>';
              }
              else{
                echo '<div role="tabpanel" class="tab-pane" id="'.$lang['LanguageName'].'">
                <div class="form-group label-floating">
                  <label for="t1" class="control-label">Email content</label>
                  <textarea rows="6" style="resize: none;" class="form-control" id="t1" name="Languages['.$i.'][EmailText]">'.$lang['EmailText'].'</textarea>
                </div>
                </div>';
              }
              
            }
            echo '</div>';
            ?>
            <?php //echo var_dump($customerLanguages);?>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
</div>