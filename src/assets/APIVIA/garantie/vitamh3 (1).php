<?php
$data2 = $array["list"]["VITAMH3"]["tarifs_base"];
$montant_apivia_vitamh3_1 = $data2["niveau_1"];
$montant_apivia_vitamh3_pro1 = $data2["niveau_1_prorata"];
					
					//niveau 1
			       $niv = "1";	
				   $prod="apivia_vitamin_hospi"; 
				   $apivia_vitamh3 = get_apivia($db_name, $niv, $prod);
			       foreach($apivia_vitamh3 as $apiv){
                   $produit_apivia_vitamh3 = 'apivia_vitamin_hospi';
				   $formule_apivia_vitamh3 = $apiv['niveau'];
			       $date_apivia_vitamh3  = date('d/m/Y');
				   $ID_p_vitamh = $apiv['id']; 
				   $PID_apivia_vitamh3 = $apiv['identifiant'];	
				   $logo = $apiv['logo'] ;
				   } 
$infos_sous_apiv_vitamh3 = $produit_apivia_vitamh3.'-'.$formule_apivia_vitamh3.'-'.$date_apivia_vitamh3.'-'.$montant_apivia_vitamh3_1.'-'.$PID_apivia_vitamh3;
$infos_apivia_vitamh3 = $produit_apivia_vitamh3.'-'.$formule_apivia_vitamh3.'-'.$date_apivia_vitamh3.'-'.$montant_apivia_vitamh3_1.'-'.$PID_apivia_vitamh3;
				 	
					////////////// hospi
					            $type = "Honoraires (DPTAM)";		
					            $apivia_vitamh3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_vitamh3_detail as $apiv_detail){
								$hopt_apivia_vitamh3 = $apiv_detail['offre'];
								$info_hopt_apivia_vitamh3 = $apiv_detail['info'];
						        
								}
								$type = "Honoraires (hors DPTAM)";		
					            $apivia_vitamh3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_vitamh3_detail as $apiv_detail){
								$hopt2_apivia_vitamh3 = $apiv_detail['offre'];
								$info_hopt2_apivia_vitamh3 = $apiv_detail['info'];
						       
								}
								$type = "Frais de séjour (établ. Conv.)";		
					            $apivia_vitamh3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_vitamh3_detail as $apiv_detail){
								$frais_sejour_apivia_vitamh3 = $apiv_detail['offre'];
								$info_frais_sejour_apivia_vitamh3 = $apiv_detail['info'];
						       
								}
								$type = "Forfait journalier hospitalier";		
					            $apivia_vitamh3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_vitamh3_detail as $apiv_detail){
								$forfait_jour_apivia_vitamh3 = $apiv_detail['offre'];
								$info_forfait_jour_apivia_vitamh3 = $apiv_detail['info'];
						       
								}
								
								$type = "Chambre particulière";		
					            $apivia_vitamh3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_vitamh3_detail as $apiv_detail){
								$cha_apivia_vitamh3 = $apiv_detail['offre'];
								$info_cha_apivia_vitamh3 = $apiv_detail['info'];
						       
								}
								
								$type = "Frais d'accompagnement";		
					            $apivia_vitamh3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_vitamh3_detail as $apiv_detail){
								$frais_acc_apivia_vitamh3 = $apiv_detail['offre'];
								$info_frais_acc_apivia_vitamh3 = $apiv_detail['info'];
						       
								}
								
								$type = "Frais de transport";		
					            $apivia_vitamh3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_vitamh3_detail as $apiv_detail){
								$transp_med_apivia_vitamh3 = $apiv_detail['offre'];
								$info_transp_med_apivia_vitamh3 = $apiv_detail['info'];
						        
								}
								
								
								///////service+
								$type = "Assistance";		
					            $apivia_vitamh3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_vitamh3_detail as $apiv_detail){
								$assistance_apivia_vitamh3 = $apiv_detail['offre'];
								$info_assistance_apivia_vitamh3 = $apiv_detail['info'];
						       
								}
								
								
				  // } ?>
					       <tr>
						   <td style="display: none;"><?php  echo $montant_apivia_vitamh3_1;  ?></td>
						  
						     <td style="background-color:#e3fae1; " >
							<img src= "<?php  echo $logo ;  ?>" alt="produit santé" class="img-responsive" style="display: block;margin-left: auto;margin-right: auto;width: 100%;height: 100%;">
                           
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'Apivia vitamin hospi' ; ?> </span>
			 
			           <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			              Niveau <?php  echo $formule_apivia_vitamh3 ;  ?></span>
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		    <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_vitamh3_1.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
                              
			<input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_vitamh3; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_vitamh;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?id_prd=<?php echo $ID_p_vitamh;  ?>&produit=<?php echo $infos_sous_apiv_vitamh3 ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p>
							
		                   </td>
						   
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_vitamh3; ?>
		 <?php if($info_hopt_apivia_vitamh3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_vitamh3; ?>"></i>
		 <?php } ?>					
						
		</p>
		
		 </td>				
							</tr>
 