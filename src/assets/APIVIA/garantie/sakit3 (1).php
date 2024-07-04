<?php
$data1 = $array["list"]["SAKIT3"]["tarifs_base"];
$montant_apivia_sakit31 = $data1["niveau_1"];
$montant_apivia_sakit3_pro1 = $data1["niveau_1_prorata"];
$montant_apivia_sakit32 = $data1["niveau_2"];
$montant_apivia_sakit3_pro2 = $data1["niveau_2_prorata"];
$montant_apivia_sakit33 = $data1["niveau_3"];
$montant_apivia_sakit3_pro3 = $data1["niveau_3_prorata"];
$montant_apivia_sakit34 = $data1["niveau_4"];
$montant_apivia_sakit3_pro4 = $data1["niveau_4_prorata"];
$montant_apivia_sakit35 = $data1["niveau_5"];
$montant_apivia_sakit3_pro5 = $data1["niveau_5_prorata"];

//////////renforts
///niv1
/*$data_rnf1 = $array["list"]["SAKIT3"]["tarifs_renforts"]["niveau_1"];
$montant_apivia_sakit3_bep1_1 = $data_rnf1["BEP1"];
$montant_apivia_sakit3_bep2_1 = $data_rnf1["BEP2"];
$montant_apivia_sakit3_hh_1 = $data_rnf1["HH"];
$montant_apivia_sakit3_oda_1 = $data_rnf1["ODA"];*/

////////////////niv2///////////////////
$data_rnf2 = $array["list"]["SAKIT3"]["tarifs_renforts"]["niveau_2"];
$montant_apivia_sakit3_bep1_2 = $data_rnf2["BEP1"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_bep1_2 = $data_rnf2["BEP1_prorata"] + $montant_apivia_sakit3_pro2;
$montant_apivia_sakit3_bep2_2 = $data_rnf2["BEP2"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_bep2_2 = $data_rnf2["BEP2_prorata"] + $montant_apivia_sakit3_pro2;
$montant_apivia_sakit3_hh_2 = $data_rnf2["HH"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_hh_2 = $data_rnf2["HH_prorata"] + $montant_apivia_sakit3_pro2;
$montant_apivia_sakit3_oda_2 = $data_rnf2["ODA"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_oda_2 = $data_rnf2["ODA_prorata"]+ $montant_apivia_sakit3_pro2;
////////hh+bep2
$montant_apivia_sakit3_hhbep2_2 = $data_rnf2["HH"] + $data_rnf2["BEP2"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_hhbep2_2 = $data_rnf2["HH_prorata"] + $data_rnf2["BEP2_prorata"] + $montant_apivia_sakit3_pro2;
////hh+bep1
$montant_apivia_sakit3_hhbep1_2 = $data_rnf2["HH"] + $data_rnf2["BEP1"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_hhbep1_2 = $data_rnf2["HH_prorata"] + $data_rnf2["BEP1_prorata"] + $montant_apivia_sakit3_pro2;
////hh+oda
$montant_apivia_sakit3_hhoda_2 = $data_rnf2["HH"] + $data_rnf2["ODA"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_hhoda_2 = $data_rnf2["HH_prorata"] + $data_rnf2["ODA_prorata"] + $montant_apivia_sakit3_pro2;
///////bep1+bep2
$montant_apivia_sakit3_bep1bep2_2 = $data_rnf2["BEP1"] + $data_rnf2["BEP2"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_bep1bep2_2 = $data_rnf2["BEP1_prorata"] + $data_rnf2["BEP2_prorata"] + $montant_apivia_sakit3_pro2;
/////bep1+oda
$montant_apivia_sakit3_bep1oda_2 = $data_rnf2["BEP1"] + $data_rnf2["ODA"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_bep1oda_2 = $data_rnf2["BEP1_prorata"] + $data_rnf2["ODA_prorata"] + $montant_apivia_sakit3_pro2;

////bep2+oda
$montant_apivia_sakit3_bep2oda_2 = $data_rnf2["BEP2"] + $data_rnf2["ODA"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_bep2oda_2 = $data_rnf2["BEP2_prorata"] + $data_rnf2["ODA_prorata"] + $montant_apivia_sakit3_pro2;
////////////////////par 3///////////////////
////////hh+bep1+bep2
$montant_apivia_sakit3_hhbep1bep2_2 = $data_rnf2["HH"] + $data_rnf2["BEP1"] + $data_rnf2["BEP2"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_hhbep1bep2_2 = $data_rnf2["HH_prorata"] + $data_rnf2["BEP1_prorata"] + $data_rnf2["BEP2_prorata"] + $montant_apivia_sakit3_pro2;

///////hh+bep1+oda
$montant_apivia_sakit3_hhbep1oda_2 = $data_rnf2["HH"] + $data_rnf2["BEP1"] + $data_rnf2["ODA"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_hhbep1oda_2 = $data_rnf2["HH_prorata"] + $data_rnf2["BEP1_prorata"] + $data_rnf2["ODA_prorata"] + $montant_apivia_sakit3_pro2;

/////hh+bep2+oda
$montant_apivia_sakit3_hhbep2oda_2 = $data_rnf2["HH"] + $data_rnf2["BEP2"] + $data_rnf2["ODA"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_hhbep2oda_2 = $data_rnf2["HH_prorata"] + $data_rnf2["BEP2_prorata"] + $data_rnf2["ODA_prorata"] + $montant_apivia_sakit3_pro2;

/////oda+bep1+bep2
$montant_apivia_sakit3_odabep1bep2_2 = $data_rnf2["ODA"] + $data_rnf2["BEP1"] + $data_rnf2["BEP2"] + $montant_apivia_sakit32;
$montant_apivia_sakit3_pro_odabep1bep2_2 = $data_rnf2["ODA_prorata"] + $data_rnf2["BEP1_prorata"] + $data_rnf2["BEP2_prorata"] + $montant_apivia_sakit3_pro2;

/////////////////////////////niv3/////////////////////////////
$data_rnf3 = $array["list"]["SAKIT3"]["tarifs_renforts"]["niveau_3"];
$montant_apivia_sakit3_bep1_3 = $data_rnf3["BEP1"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_bep1_3 = $data_rnf3["BEP1_prorata"] + $montant_apivia_sakit3_pro3;
$montant_apivia_sakit3_bep2_3 = $data_rnf3["BEP2"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_bep2_3 = $data_rnf3["BEP2_prorata"] + $montant_apivia_sakit3_pro3;
$montant_apivia_sakit3_hh_3 = $data_rnf3["HH"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_hh_3 = $data_rnf3["HH_prorata"] + $montant_apivia_sakit3_pro3;
$montant_apivia_sakit3_oda_3 = $data_rnf3["ODA"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_oda_3 = $data_rnf3["ODA_prorata"] + $montant_apivia_sakit3_pro3;
////////hh+bep2
$montant_apivia_sakit3_hhbep2_3 = $data_rnf3["HH"] + $data_rnf3["BEP2"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_hhbep2_3 = $data_rnf3["HH_prorata"] + $data_rnf3["BEP2_prorata"] + $montant_apivia_sakit3_pro3;
////hh+bep1
$montant_apivia_sakit3_hhbep1_3 = $data_rnf3["HH"] + $data_rnf3["BEP1"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_hhbep1_3 = $data_rnf3["HH_prorata"] + $data_rnf3["BEP1_prorata"] + $montant_apivia_sakit3_pro3;
////hh+oda
$montant_apivia_sakit3_hhoda_3 = $data_rnf3["HH"] + $data_rnf3["ODA"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_hhoda_3 = $data_rnf3["HH_prorata"] + $data_rnf3["ODA_prorata"] + $montant_apivia_sakit3_pro3;
///////bep1+bep2
$montant_apivia_sakit3_bep1bep2_3 = $data_rnf3["BEP1"] + $data_rnf3["BEP2"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_bep1bep2_3 = $data_rnf3["BEP1_prorata"] + $data_rnf3["BEP2_prorata"] + $montant_apivia_sakit3_pro3;
/////bep1+oda
$montant_apivia_sakit3_bep1oda_3 = $data_rnf3["BEP1"] + $data_rnf3["ODA"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_bep1oda_3 = $data_rnf3["BEP1_prorata"] + $data_rnf3["ODA_prorata"] + $montant_apivia_sakit3_pro3;

////bep2+oda
$montant_apivia_sakit3_bep2oda_3 = $data_rnf3["BEP2"] + $data_rnf3["ODA"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_bep2oda_3 = $data_rnf3["BEP2_prorata"] + $data_rnf3["ODA_prorata"] + $montant_apivia_sakit3_pro3;
 ////////////////////par 3///////////////////
 ////////hh+bep1+bep2
$montant_apivia_sakit3_hhbep1bep2_3 = $data_rnf3["HH"] + $data_rnf3["BEP1"] + $data_rnf3["BEP2"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_hhbep1bep2_3 = $data_rnf3["HH_prorata"] + $data_rnf3["BEP1_prorata"] + $data_rnf3["BEP2_prorata"] + $montant_apivia_sakit3_pro3;

///////hh+bep1+oda
$montant_apivia_sakit3_hhbep1oda_3 = $data_rnf3["HH"] + $data_rnf3["BEP1"] + $data_rnf3["ODA"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_hhbep1oda_3 = $data_rnf3["HH_prorata"] + $data_rnf3["BEP1_prorata"] + $data_rnf3["ODA_prorata"] + $montant_apivia_sakit3_pro3;

/////hh+bep2+oda
$montant_apivia_sakit3_hhbep2oda_3 = $data_rnf3["HH"] + $data_rnf3["BEP2"] + $data_rnf3["ODA"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_hhbep2oda_3 = $data_rnf3["HH_prorata"] + $data_rnf3["BEP2_prorata"] + $data_rnf3["ODA_prorata"] + $montant_apivia_sakit3_pro3;

/////oda+bep1+bep2
$montant_apivia_sakit3_odabep1bep2_3 = $data_rnf3["ODA"] + $data_rnf3["BEP1"] + $data_rnf3["BEP2"] + $montant_apivia_sakit33;
$montant_apivia_sakit3_pro_odabep1bep2_3 = $data_rnf3["ODA_prorata"] + $data_rnf3["BEP1_prorata"] + $data_rnf3["BEP2_prorata"] + $montant_apivia_sakit3_pro3;

//////////////////////////////niv4////////////////////////////////
$data_rnf4 = $array["list"]["SAKIT3"]["tarifs_renforts"]["niveau_4"];
$montant_apivia_sakit3_bep1_4 = $data_rnf4["BEP1"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_bep1_4 = $data_rnf4["BEP1_prorata"] + $montant_apivia_sakit3_pro4;
$montant_apivia_sakit3_bep2_4 = $data_rnf4["BEP2"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_bep2_4 = $data_rnf4["BEP2_prorata"] + $montant_apivia_sakit3_pro4;
$montant_apivia_sakit3_hh_4 = $data_rnf4["HH"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_hh_4 = $data_rnf4["HH_prorata"] + $montant_apivia_sakit3_pro4;
$montant_apivia_sakit3_oda_4 = $data_rnf4["ODA"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_oda_4 = $data_rnf4["ODA_prorata"] + $montant_apivia_sakit3_pro4;
////////hh+bep2
$montant_apivia_sakit3_hhbep2_4 = $data_rnf4["HH"] + $data_rnf4["BEP2"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_hhbep2_4 = $data_rnf4["HH_prorata"] + $data_rnf4["BEP2_prorata"] + $montant_apivia_sakit3_pro4;
////hh+bep1
$montant_apivia_sakit3_hhbep1_4 = $data_rnf4["HH"] + $data_rnf4["BEP1"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_hhbep1_4 = $data_rnf4["HH_prorata"] + $data_rnf4["BEP1_prorata"] + $montant_apivia_sakit3_pro4;
////hh+oda
$montant_apivia_sakit3_hhoda_4 = $data_rnf4["HH"] + $data_rnf4["ODA"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_hhoda_4 = $data_rnf4["HH_prorata"] + $data_rnf4["ODA_prorata"] + $montant_apivia_sakit3_pro4;
///////bep1+bep2
$montant_apivia_sakit3_bep1bep2_4 = $data_rnf4["BEP1"] + $data_rnf4["BEP2"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_bep1bep2_4 = $data_rnf4["BEP1_prorata"] + $data_rnf4["BEP2_prorata"] + $montant_apivia_sakit3_pro4;
/////bep1+oda
$montant_apivia_sakit3_bep1oda_4 = $data_rnf4["BEP1"] + $data_rnf4["ODA"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_bep1oda_4 = $data_rnf4["BEP1_prorata"] + $data_rnf4["ODA_prorata"] + $montant_apivia_sakit3_pro4;

////bep2+oda
$montant_apivia_sakit3_bep2oda_4 = $data_rnf4["BEP2"] + $data_rnf4["ODA"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_bep2oda_4 = $data_rnf4["BEP2_prorata"] + $data_rnf4["ODA_prorata"] + $montant_apivia_sakit3_pro4;
////////////////////par 3///////////////////
 ////////hh+bep1+bep2
$montant_apivia_sakit3_hhbep1bep2_4 = $data_rnf4["HH"] + $data_rnf4["BEP1"] + $data_rnf4["BEP2"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_hhbep1bep2_4 = $data_rnf4["HH_prorata"] + $data_rnf4["BEP1_prorata"] + $data_rnf4["BEP2_prorata"] + $montant_apivia_sakit3_pro4;

///////hh+bep1+oda
$montant_apivia_sakit3_hhbep1oda_4 = $data_rnf4["HH"] + $data_rnf4["BEP1"] + $data_rnf4["ODA"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_hhbep1oda_4 = $data_rnf4["HH_prorata"] + $data_rnf4["BEP1_prorata"] + $data_rnf4["ODA_prorata"] + $montant_apivia_sakit3_pro4;

/////hh+bep2+oda
$montant_apivia_sakit3_hhbep2oda_4 = $data_rnf4["HH"] + $data_rnf4["BEP2"] + $data_rnf4["ODA"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_hhbep2oda_4 = $data_rnf4["HH_prorata"] + $data_rnf4["BEP2_prorata"] + $data_rnf4["ODA_prorata"] + $montant_apivia_sakit3_pro4;

/////oda+bep1+bep2
$montant_apivia_sakit3_odabep1bep2_4 = $data_rnf4["ODA"] + $data_rnf4["BEP1"] + $data_rnf4["BEP2"] + $montant_apivia_sakit34;
$montant_apivia_sakit3_pro_odabep1bep2_4 = $data_rnf4["ODA_prorata"] + $data_rnf4["BEP1_prorata"] + $data_rnf4["BEP2_prorata"] + $montant_apivia_sakit3_pro4;

////////////////////////////niv5/////////////////////////////////
$data_rnf5 = $array["list"]["SAKIT3"]["tarifs_renforts"]["niveau_5"];
$montant_apivia_sakit3_bep1_5 = $data_rnf5["BEP1"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_bep1_5 = $data_rnf5["BEP1_prorata"] + $montant_apivia_sakit3_pro5;
$montant_apivia_sakit3_bep2_5 = $data_rnf5["BEP2"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_bep2_5 = $data_rnf5["BEP2_prorata"] + $montant_apivia_sakit3_pro5;
$montant_apivia_sakit3_hh_5 = $data_rnf5["HH"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_hh_5 = $data_rnf5["HH_prorata"] + $montant_apivia_sakit3_pro5;
$montant_apivia_sakit3_oda_5 = $data_rnf5["ODA"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_oda_5 = $data_rnf5["ODA_prorata"] + $montant_apivia_sakit3_pro5;
////////hh+bep2
$montant_apivia_sakit3_hhbep2_5 = $data_rnf5["HH"] + $data_rnf5["BEP2"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_hhbep2_5 = $data_rnf5["HH_prorata"] + $data_rnf5["BEP2_prorata"] + $montant_apivia_sakit3_pro5;
////hh+bep1
$montant_apivia_sakit3_hhbep1_5 = $data_rnf5["HH"] + $data_rnf5["BEP1"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_hhbep1_5 = $data_rnf5["HH_prorata"] + $data_rnf5["BEP1_prorata"] + $montant_apivia_sakit3_pro5;
////hh+oda
$montant_apivia_sakit3_hhoda_5 = $data_rnf5["HH"] + $data_rnf5["ODA"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_hhoda_5 = $data_rnf5["HH_prorata"] + $data_rnf5["ODA_prorata"] + $montant_apivia_sakit3_pro5;
///////bep1+bep2
$montant_apivia_sakit3_bep1bep2_5 = $data_rnf5["BEP1"] + $data_rnf5["BEP2"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_bep1bep2_5 = $data_rnf5["BEP1_prorata"] + $data_rnf5["BEP2_prorata"] + $montant_apivia_sakit3_pro5;
/////bep1+oda
$montant_apivia_sakit3_bep1oda_5 = $data_rnf5["BEP1"] + $data_rnf5["ODA"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_bep1oda_5 = $data_rnf5["BEP1_prorata"] + $data_rnf5["ODA_prorata"] + $montant_apivia_sakit3_pro5;

////bep2+oda
$montant_apivia_sakit3_bep2oda_5 = $data_rnf5["BEP2"] + $data_rnf5["ODA"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_bep2oda_5 = $data_rnf5["BEP2_prorata"] + $data_rnf5["ODA_prorata"] + $montant_apivia_sakit3_pro5;
////////////////////par 3///////////////////
 ////////hh+bep1+bep2
$montant_apivia_sakit3_hhbep1bep2_5 = $data_rnf5["HH"] + $data_rnf5["BEP1"] + $data_rnf5["BEP2"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_hhbep1bep2_5 = $data_rnf5["HH_prorata"] + $data_rnf5["BEP1_prorata"] + $data_rnf5["BEP2_prorata"] + $montant_apivia_sakit3_pro5;

///////hh+bep1+oda
$montant_apivia_sakit3_hhbep1oda_5 = $data_rnf5["HH"] + $data_rnf5["BEP1"] + $data_rnf5["ODA"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_hhbep1oda_5 = $data_rnf5["HH_prorata"] + $data_rnf5["BEP1_prorata"] + $data_rnf5["ODA_prorata"] + $montant_apivia_sakit3_pro5;

/////hh+bep2+oda
$montant_apivia_sakit3_hhbep2oda_5 = $data_rnf5["HH"] + $data_rnf5["BEP2"] + $data_rnf5["ODA"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_hhbep2oda_5 = $data_rnf5["HH_prorata"] + $data_rnf5["BEP2_prorata"] + $data_rnf5["ODA_prorata"] + $montant_apivia_sakit3_pro5;

/////oda+bep1+bep2
$montant_apivia_sakit3_odabep1bep2_5 = $data_rnf5["ODA"] + $data_rnf5["BEP1"] + $data_rnf5["BEP2"] + $montant_apivia_sakit35;
$montant_apivia_sakit3_pro_odabep1bep2_5 = $data_rnf5["ODA_prorata"] + $data_rnf5["BEP1_prorata"] + $data_rnf5["BEP2_prorata"] + $montant_apivia_sakit3_pro5;

			for($i = 1; $i <= 5; $i++) {
			
			       $niv = $i;	
				   $prod="apivia_sakifo_pro"; 
				   $apivia_sakit3 = get_apivia($db_name, $niv, $prod);
			       foreach($apivia_sakit3 as $apiv){
                   $produit_apivia_sakit3 = 'apivia_sakifo_pro';
				   $formule_apivia_sakit3 = $apiv['niveau'];
			       $date_apivia_sakit3  = date('d/m/Y');
				   $ID_p_sakit = $apiv['id']; 
				   $PID_apivia_sakit3 = $apiv['identifiant'];	
				   $logo = $apiv['logo'] ;
				   }
				   
				   if($i==1){
				       $montant_apivia_sakit3 = $montant_apivia_sakit31;
					   /*$montant_apivia_sakit3_bep1 = $montant_apivia_sakit3_bep1_1;
                       $montant_apivia_sakit3_bep2 = $montant_apivia_sakit3_bep2_1;
                       $montant_apivia_sakit3_hh = $montant_apivia_sakit3_hh_1;
                       $montant_apivia_sakit3_oda = $montant_apivia_sakit3_oda_1;
                       $montant_apivia_sakit3_hhbep = $montant_apivia_sakit3_hhbep1;
                       $montant_apivia_sakit3_pro_hhbep = $montant_apivia_sakit3_pro_hhbep1;*/
			    
				   }elseif($i==2){
					   $montant_apivia_sakit3 = $montant_apivia_sakit32;
					   $montant_apivia_sakit3_bep1 = $montant_apivia_sakit3_bep1_2;
                       $montant_apivia_sakit3_bep2 = $montant_apivia_sakit3_bep2_2;
                       $montant_apivia_sakit3_hh = $montant_apivia_sakit3_hh_2;
                       $montant_apivia_sakit3_oda = $montant_apivia_sakit3_oda_2;
					   
					   $montant_apivia_sakit3_hhbep2 = $montant_apivia_sakit3_hhbep2_2;
					   $montant_apivia_sakit3_hhbep1 = $montant_apivia_sakit3_hhbep1_2;
					   $montant_apivia_sakit3_hhoda = $montant_apivia_sakit3_hhoda_2;
					   $montant_apivia_sakit3_bep1bep2 = $montant_apivia_sakit3_bep1bep2_2;
					   $montant_apivia_sakit3_bep1oda = $montant_apivia_sakit3_bep1oda_2;
					   $montant_apivia_sakit3_bep2oda = $montant_apivia_sakit3_bep2oda_2;
					   
					   $montant_apivia_sakit3_hhbep1bep2 = $montant_apivia_sakit3_hhbep1bep2_2;
					   $montant_apivia_sakit3_hhbep1oda = $montant_apivia_sakit3_hhbep1oda_2;
					   $montant_apivia_sakit3_hhbep2oda = $montant_apivia_sakit3_hhbep2oda_2;
					   $montant_apivia_sakit3_odabep1bep2 = $montant_apivia_sakit3_odabep1bep2_2;
                       
				   }elseif($i==3){
					   $montant_apivia_sakit3 = $montant_apivia_sakit33;
					   $montant_apivia_sakit3_bep1 = $montant_apivia_sakit3_bep1_3;
                       $montant_apivia_sakit3_bep2 = $montant_apivia_sakit3_bep2_3;
                       $montant_apivia_sakit3_hh = $montant_apivia_sakit3_hh_3;
                       $montant_apivia_sakit3_oda = $montant_apivia_sakit3_oda_3;
					  
					   $montant_apivia_sakit3_hhbep2 = $montant_apivia_sakit3_hhbep2_3;
					   $montant_apivia_sakit3_hhbep1 = $montant_apivia_sakit3_hhbep1_3;
					   $montant_apivia_sakit3_hhoda = $montant_apivia_sakit3_hhoda_3;
					   $montant_apivia_sakit3_bep1bep2 = $montant_apivia_sakit3_bep1bep2_3;
					   $montant_apivia_sakit3_bep1oda = $montant_apivia_sakit3_bep1oda_3;
					   $montant_apivia_sakit3_bep2oda = $montant_apivia_sakit3_bep2oda_3;
					   
					   $montant_apivia_sakit3_hhbep1bep2 = $montant_apivia_sakit3_hhbep1bep2_3;
					   $montant_apivia_sakit3_hhbep1oda = $montant_apivia_sakit3_hhbep1oda_3;
					   $montant_apivia_sakit3_hhbep2oda = $montant_apivia_sakit3_hhbep2oda_3;
					   $montant_apivia_sakit3_odabep1bep2 = $montant_apivia_sakit3_odabep1bep2_3;
                       
				   }elseif($i==4){
					   $montant_apivia_sakit3 = $montant_apivia_sakit34;
					   $montant_apivia_sakit3_bep1 = $montant_apivia_sakit3_bep1_4;
                       $montant_apivia_sakit3_bep2 = $montant_apivia_sakit3_bep2_4;
                       $montant_apivia_sakit3_hh = $montant_apivia_sakit3_hh_4;
                       $montant_apivia_sakit3_oda = $montant_apivia_sakit3_oda_4;
					   
					   $montant_apivia_sakit3_hhbep2 = $montant_apivia_sakit3_hhbep2_4;
					   $montant_apivia_sakit3_hhbep1 = $montant_apivia_sakit3_hhbep1_4;
					   $montant_apivia_sakit3_hhoda = $montant_apivia_sakit3_hhoda_4;
					   $montant_apivia_sakit3_bep1bep2 = $montant_apivia_sakit3_bep1bep2_4;
					   $montant_apivia_sakit3_bep1oda = $montant_apivia_sakit3_bep1oda_4;
					   $montant_apivia_sakit3_bep2oda = $montant_apivia_sakit3_bep2oda_4;
					   
					   $montant_apivia_sakit3_hhbep1bep2 = $montant_apivia_sakit3_hhbep1bep2_4;
					   $montant_apivia_sakit3_hhbep1oda = $montant_apivia_sakit3_hhbep1oda_4;
					   $montant_apivia_sakit3_hhbep2oda = $montant_apivia_sakit3_hhbep2oda_4;
					   $montant_apivia_sakit3_odabep1bep2 = $montant_apivia_sakit3_odabep1bep2_4;
                       
				   }else{
					   $montant_apivia_sakit3 = $montant_apivia_sakit35;
					   $montant_apivia_sakit3_bep1 = $montant_apivia_sakit3_bep1_5;
                       $montant_apivia_sakit3_bep2 = $montant_apivia_sakit3_bep2_5;
                       $montant_apivia_sakit3_hh = $montant_apivia_sakit3_hh_5;
                       $montant_apivia_sakit3_oda = $montant_apivia_sakit3_oda_5;
					  
					   $montant_apivia_sakit3_hhbep2 = $montant_apivia_sakit3_hhbep2_5;
					   $montant_apivia_sakit3_hhbep1 = $montant_apivia_sakit3_hhbep1_5;
					   $montant_apivia_sakit3_hhoda = $montant_apivia_sakit3_hhoda_5;
					   $montant_apivia_sakit3_bep1bep2 = $montant_apivia_sakit3_bep1bep2_5;
					   $montant_apivia_sakit3_bep1oda = $montant_apivia_sakit3_bep1oda_5;
					   $montant_apivia_sakit3_bep2oda = $montant_apivia_sakit3_bep2oda_5;
					   
					   $montant_apivia_sakit3_hhbep1bep2 = $montant_apivia_sakit3_hhbep1bep2_5;
					   $montant_apivia_sakit3_hhbep1oda = $montant_apivia_sakit3_hhbep1oda_5;
					   $montant_apivia_sakit3_hhbep2oda = $montant_apivia_sakit3_hhbep2oda_5;
					   $montant_apivia_sakit3_odabep1bep2 = $montant_apivia_sakit3_odabep1bep2_5;
                       
				   }
				   
				  
$infos_sous_apiv_sakit3 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_bep1 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_bep1.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_bep2 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_bep2.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_hh = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hh.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_oda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_oda.'-'.$PID_apivia_sakit3;

$infos_sous_apiv_sakit3_hhbep2 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhbep2.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_hhbep1 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhbep1.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_hhoda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhoda.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_bep1bep2 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_bep1bep2.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_bep1oda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_bep1oda.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_bep2oda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_bep2oda.'-'.$PID_apivia_sakit3;

$infos_sous_apiv_sakit3_hhbep1bep2 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhbep1bep2.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_hhbep1oda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhbep1oda.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_hhbep2oda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhbep2oda.'-'.$PID_apivia_sakit3;
$infos_sous_apiv_sakit3_odabep1bep2 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_odabep1bep2.'-'.$PID_apivia_sakit3;

///////////
$infos_apivia_sakit3 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_bep1 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_bep1.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_bep2 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_bep2.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_hh = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hh.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_oda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_oda.'-'.$PID_apivia_sakit3;

$infos_apivia_sakit3_hhbep2 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhbep2.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_hhbep1 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhbep1.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_hhoda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhoda.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_bep1bep2 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_bep1bep2.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_bep1oda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_bep1oda.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_bep2oda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_bep2oda.'-'.$PID_apivia_sakit3;
	
$infos_apivia_sakit3_hhbep1bep2 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhbep1bep2.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_hhbep1oda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhbep1oda.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_hhbep2oda = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_hhbep2oda.'-'.$PID_apivia_sakit3;
$infos_apivia_sakit3_odabep1bep2 = $produit_apivia_sakit3.'-'.$formule_apivia_sakit3.'-'.$date_apivia_sakit3.'-'.$montant_apivia_sakit3_odabep1bep2.'-'.$PID_apivia_sakit3;
	
					   ////////////// hospi
					            $type = "Honoraires (DPTAM)";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$hopt_apivia_sakit3 = $apiv_detail['offre'];
								$info_hopt_apivia_sakit3 = $apiv_detail['info'];
								$packs_hopt_apivia_sakit3 = $apiv_detail['packs'];
								
						      
								}
								$type = "Honoraires (hors DPTAM)";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$hopt2_apivia_sakit3 = $apiv_detail['offre'];
								$info_hopt2_apivia_sakit3 = $apiv_detail['info'];
						       }
								$type = "Frais de séjour (établ. Conv.)";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$frais_sejour_apivia_sakit3 = $apiv_detail['offre'];
								$info_frais_sejour_apivia_sakit3 = $apiv_detail['info'];
						       }
								$type = "Forfait journalier hospitalier";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$forfait_jour_apivia_sakit3 = $apiv_detail['offre'];
								$info_forfait_jour_apivia_sakit3 = $apiv_detail['info'];
								$packs_forfait_apivia_sakit3 = $apiv_detail['packs'];
						       }
								
								$type = "Chambre particulière";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$cha_apivia_sakit3 = $apiv_detail['offre'];
								$info_cha_apivia_sakit3 = $apiv_detail['info'];
								$packs_cha_apivia_sakit3 = $apiv_detail['packs'];
								}
								
								$type = "Frais d'accompagnement";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$frais_acc_apivia_sakit3 = $apiv_detail['offre'];
								$info_frais_acc_apivia_sakit3 = $apiv_detail['info'];
								$packs_frais_apivia_sakit3 = $apiv_detail['packs'];
						       }
								
								$type = "Frais de transport";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$transp_med_apivia_sakit3 = $apiv_detail['offre'];
								$info_transp_med_apivia_sakit3 = $apiv_detail['info'];
						       }
								/////////////medecins4
								
								$type = "Médecins (DPTAM)";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$med_apivia_sakit3 = $apiv_detail['offre'];
								$info_med_apivia_sakit3 = $apiv_detail['info'];
								$packs_med_apivia_sakit3 = $apiv_detail['packs'];
						       }
								
								$type = "Médecins (hors DPTAM)";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$med2_apivia_sakit3 = $apiv_detail['offre'];
								$info_med2_apivia_sakit3 = $apiv_detail['info'];
						        }
								
								$type = "Médecins (DPTAM)";		////act tech = med
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$act_med_apivia_sakit3 = $apiv_detail['offre'];
								$info_act_med_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								$type = "Honoraires paramédicaux";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$hono_para_apivia_sakit3 = $apiv_detail['offre'];
								$info_hono_para_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								$type = "Analyses";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$analyse_apivia_sakit3 = $apiv_detail['offre'];
								$info_analyse_apivia_sakit3 = $apiv_detail['info'];
						        }
								
								$type = "Matériel médicaux";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$imagerie_apivia_sakit3 = $apiv_detail['offre'];
								$info_imagerie_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								$type = "Pharmacie remboursée";	//1	
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$phar1_apivia_sakit3 = $apiv_detail['offre'];
								$info_phar1_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								$type = "Pharmacie remboursée";	//2	
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$phar2_apivia_sakit3 = $apiv_detail['offre'];
								$info_phar2_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								$type = "Pharmacie remboursée";	//3	
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$phar3_apivia_sakit3 = $apiv_detail['offre'];
								$info_phar3_apivia_sakit3 = $apiv_detail['info'];
						      }
							
								////////cure
								$type = "Cures thermales";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$cure_apivia_sakit3 = $apiv_detail['offre'];
								$info_cure_apivia_sakit3 = $apiv_detail['info'];
								$packs_cure_apivia_sakit3 = $apiv_detail['packs'];
						       }
								
								//////// dentaire
								$type = "Prothèses dentaires remboursées";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$proth_dent_apivia_sakit3 = $apiv_detail['offre'];
								$info_proth_dent_apivia_sakit3 = $apiv_detail['info'];
								$packs_dent_apivia_sakit3 = $apiv_detail['packs'];
						        }
								
								$type = "Soins et prothèses dentaire 100% Santé";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$soins_dent_apivia_sakit3 = $apiv_detail['offre'];
								$info_soins_dent_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								$type = "Soins dentaires courants";		////=inlays/onlays
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$inlays_apivia_sakit3 = $apiv_detail['offre'];
								$info_inlays_apivia_sakit3 = $apiv_detail['info'];
						        }
								
								$type = "Orthodontie remboursée";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$orthodontie_apivia_sakit3 = $apiv_detail['offre'];
								$info_orthodontie_apivia_sakit3 = $apiv_detail['info'];
								$packs_orthdontie_apivia_sakit3 = $apiv_detail['packs'];
						       }
								
								$type = "Dentaire non pris en charge par le remboursement";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$dent_nremb_apivia_sakit3 = $apiv_detail['offre'];
								$info_dent_nremb_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								$type = "Dentaire non pris en charge par le remboursement";	///=implant	
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$implant_apivia_sakit3 = $apiv_detail['offre'];
								$info_implant_apivia_sakit3 = $apiv_detail['info'];
						        }
								
								$type = "Plafond de remboursement";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$plafond1_apivia_sakit3 = $apiv_detail['offre'];
								$info_plafond1_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								///////optique
								
								$type = "Monture + 2 verres simples";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$opt_simple_apivia_sakit3 = $apiv_detail['offre'];
								$info_opt_simple_apivia_sakit3 = $apiv_detail['info'];
						        }
								
								$type = "Monture + 2 verres complexes";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$opt_comp_apivia_sakit3 = $apiv_detail['offre'];
								$info_opt_comp_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								$type = "Equipement mixte";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$opt_tres_comp_apivia_sakit3 = $apiv_detail['offre'];
								$info_opt_tres_comp_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								$type = "Equipement 100% Santé";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$eq_sante_apivia_sakit3 = $apiv_detail['offre'];
								$info_eq_sante_apivia_sakit3 = $apiv_detail['info'];
						       }
							   
								$type = "Lentilles(Par an)";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$lentille_apivia_sakit3 = $apiv_detail['offre'];
								$info_lentille_apivia_sakit3 = $apiv_detail['info'];
								$packs_lentille_apivia_sakit3 = $apiv_detail['packs'];
						       }
								
								////////aud
								$type = "Appareils auditives(Par oreille)";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$aud_apivia_sakit3 = $apiv_detail['offre'];
								$info_aud_apivia_sakit3 = $apiv_detail['info'];
								$packs_aud_apivia_sakit3 = $apiv_detail['packs'];
						       }
								
								$type = "Equipement 100% Santé";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$aud_sante_apivia_sakit3 = $apiv_detail['offre'];
								$info_aud_sante_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								$type = "Entretien-Piles-Accessoires(Par an)";	/////////accessoires	
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$accessoire_apivia_sakit3 = $apiv_detail['offre'];
								$info_accessoire_apivia_sakit3 = $apiv_detail['info'];
						       }
							   
								$type = "Entretien-Piles-Accessoires(Par an)";	/////////orthopedie	
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$orthopedie_apivia_sakit3 = $apiv_detail['offre'];
								$info_orthopedie_apivia_sakit3 = $apiv_detail['info'];
						        }
								
								$type = "Entretien-Piles-Accessoires(Par an)";		/////////grand appar
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$grand_appar_apivia_sakit3 = $apiv_detail['offre'];
								$info_grand_appar_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								$type = "Entretien-Piles-Accessoires(Par an)";	////////prothese cappillaire	
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$proth_cap_apivia_sakit3 = $apiv_detail['offre'];
								$info_proth_cap_apivia_sakit3 = $apiv_detail['info'];
						       }
								
								///////med natu/douce
								
								$type = "Médecines douces";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$BE_apivia_sakit3 = $apiv_detail['offre'];
								$info_BE_apivia_sakit3 = $apiv_detail['info'];
								$packs_BE_apivia_sakit3 = $apiv_detail['packs'];
						       }
								/////prevention
								$type = "Dépistage et prévention";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$prevention_apivia_sakit3 = $apiv_detail['offre'];
								$info_prevention_apivia_sakit3 = $apiv_detail['info'];
						       }
								///////service+
								$type = "Assistance";		
					            $apivia_sakit3_detail =get_apivia_detail($db_name, $type, $niv, $prod);
								foreach($apivia_sakit3_detail as $apiv_detail){
								$assistance_apivia_sakit3 = $apiv_detail['offre'];
								$info_assistance_apivia_sakit3 = $apiv_detail['info'];
						       }
				  // } ?>
					       <tr>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						  
						     <td style="background-color:#e3fae1; " >
							<img src= "<?php  echo $logo ;  ?>" alt="produit santé" class="img-responsive" style="display: block;margin-left: auto;margin-right: auto;width: 100%;height: 100%;">
                           
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'Apivia sakifo pro' ; ?> </span>
			 
			           <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			              Niveau <?php  echo $formule_apivia_sakit3 ;  ?></span>
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		    <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
                              
			<input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3 ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>
   <?php if(isset($array["list"]["SAKIT3"]["tarifs_renforts"]) and ($formule_apivia_sakit3 != '1')){ ?>
              <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			             <span class="apivia_sakit3" id="apivia_sakit3" style="color:red;">
						   <i class="fas fa-angle-down"></i><b>Afficher les options</b>
						   <i class="fas fa-angle-down"></i>
						 </span>			  
            <?php } ?>  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                
		                   </td>
						   
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?>
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?>
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?>
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?>
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>				
							</tr>
							
							<!------------------->
			

<!------------------------------les options----------------------------------------------->
	<!------------------------------BEP1----------------------------------------------->
		   <tr style="display:none;" class="BEP1">
		    <?php $renfort_bep1 = 'BEP1' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'BEP1' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		    <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_bep1.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
           <input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_bep1.'-'.$renfort_bep1; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_bep1 ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_bep1 ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> 
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> <span style="color:red;">
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> 
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> 
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_BE_apivia_sakit3 ; ?></span>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	
		<!------------------------------BEP2----------------------------------------------->
		   <tr style="display:none;" class="BEP2">
		    <?php $renfort_bep2 = 'BEP2' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'BEP2' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		    <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_bep2.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
           <input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_bep2.'-'.$renfort_bep2; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_bep2 ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_bep2 ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> 
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> <span style="color:red;">
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> 
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> 
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_BE_apivia_sakit3 ; ?></span>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	
<!------------------------------HH----------------------------------------------->
		   <tr style="display:none;" class="HH">
		    <?php $renfort_hh = 'HH' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'HH' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		    <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_hh.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
            <input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_hh.'-'.$renfort_hh; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_hh ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_hh ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> 
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> 
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?> 
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	
<!------------------------------ODA----------------------------------------------->
		   <tr style="display:none;" class="ODA">
		    <?php $renfort_oda = 'ODA' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'ODA' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		     <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_oda.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
            <input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_oda.'-'.$renfort_oda; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_oda ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_oda ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> 
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> 
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_dent_apivia_sakit3 ; ?></span>
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_aud_apivia_sakit3 ; ?></span>
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	
							
<!------------------------------hh+bep2----------------------------------------------->
		   <tr style="display:none;" class="hhbep2">
		    <?php $renfort_hhbep2 = 'HH BEP2' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'HH + BEP2' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		     <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_hhbep2.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
            
			<input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_hhbep2.'-'.$renfort_hhbep2; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_hhbep2 ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_hhbep2 ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> 
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> 
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?><span style="color:red;"><?php echo $packs_BE_apivia_sakit3 ; ?></span>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	
		<!------------------------------hh+bep1----------------------------------------------->
		   <tr style="display:none;" class="hhbep1">
		    <?php $renfort_hhbep1 = 'HH BEP1' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'HH + BEP1' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		     <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_hhbep1.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
             
			<input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_hhbep1.'-'.$renfort_hhbep1; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_hhbep1 ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_hhbep1 ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> 
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> 
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?><span style="color:red;"><?php echo $packs_BE_apivia_sakit3 ; ?></span>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>
		<!------------------------------hh+oda----------------------------------------------->
		   <tr style="display:none;" class="hhoda">
		   <?php $renfort_hhoda = 'HH ODA' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'HH + ODA' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		     <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_hhoda.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
              
			<input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_hhoda.'-'.$renfort_hhoda; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_hhoda ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_hhoda ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_dent_apivia_sakit3 ; ?></span>
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_aud_apivia_sakit3 ; ?></span>
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	
							<!------------------------------bep1+bep2----------------------------------------------->
		   <tr style="display:none;" class="bep1bep2">
		   <?php $renfort_bep1bep2 = 'BEP1 BEP2' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'BEP1 + BEP2' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		     <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_bep1bep2.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
            
			<input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_bep1bep2.'-'.$renfort_bep1bep2; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_bep1bep2 ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_bep1bep2 ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> 
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?>
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> 
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> 
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?><span style="color:red;"><?php echo $packs_BE_apivia_sakit3 ; ?></span>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	
							<!------------------------------bep1+oda----------------------------------------------->
		   <tr style="display:none;" class="bep1oda">
		    <?php $renfort_bep1oda = 'BEP1 ODA' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'BEP1 + ODA' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		     <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_bep1oda.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
            
			 <input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_bep1oda.'-'.$renfort_bep1oda; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_bep1oda ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_bep1oda ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> 
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> 
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_dent_apivia_sakit3 ; ?></span>
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_aud_apivia_sakit3 ; ?></span>
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?><span style="color:red;"><?php echo $packs_BE_apivia_sakit3 ; ?></span>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	
	<!------------------------------bep2oda----------------------------------------------->
		   <tr style="display:none;" class="bep2oda">
		    <?php $renfort_bep2oda = 'BEP2 ODA' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'BEP2 + ODA' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		     <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_bep2oda.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
             
       		<input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_bep2oda.'-'.$renfort_bep2oda; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_bep2oda ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_bep2oda ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> 
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> 
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_dent_apivia_sakit3 ; ?></span>
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_aud_apivia_sakit3 ; ?></span>
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?><span style="color:red;"><?php echo $packs_BE_apivia_sakit3 ; ?></span>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	
							
	<!------------------------------hhbep1bep2----------------------------------------------->
		   <tr style="display:none;" class="hhbep1bep2">
		   <?php $renfort_hhbep1bep2 = 'HH BEP1 BEP2' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'HH + BEP1 + BEP2' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		     <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_hhbep1bep2.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
             
			 <input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_hhbep1bep2.'-'.$renfort_hhbep1bep2; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_hhbep1bep2 ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_hhbep1bep2 ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> 
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> 
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?><span style="color:red;"><?php echo $packs_BE_apivia_sakit3 ; ?></span>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	
							
<!------------------------------hhbep1oda----------------------------------------------->
		   <tr style="display:none;" class="hhbep1oda">
		   <?php $renfort_hhbep1oda = 'HH BEP1 ODA' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'HH + BEP1 + ODA' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		     <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_hhbep1oda.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
            

			 <input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_hhbep1oda.'-'.$renfort_hhbep1oda; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_hhbep1oda ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_hhbep1oda ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_dent_apivia_sakit3 ; ?></span>
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_aud_apivia_sakit3 ; ?></span>
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?><span style="color:red;"><?php echo $packs_BE_apivia_sakit3 ; ?></span>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	

<!------------------------------hhbep2oda----------------------------------------------->
		   <tr style="display:none;" class="hhbep2oda">
		   <?php $renfort_hhbep2oda = 'HH BEP2 ODA' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'HH + BEP2 + ODA' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		     <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_hhbep2oda.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
             
			 <input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_hhbep2oda.'-'.$renfort_hhbep2oda; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_hhbep2oda ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_hhbep2oda ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_hopt_apivia_sakit3 ; ?></span>
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_dent_apivia_sakit3 ; ?></span>
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_aud_apivia_sakit3 ; ?></span>
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?><span style="color:red;"><?php echo $packs_BE_apivia_sakit3 ; ?></span>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>	
<!------------------------------odabep1bep2----------------------------------------------->
		   <tr style="display:none;" class="odabep1bep2">
		    <?php $renfort_odabep1bep2 = 'ODA BEP1 BEP2' ; ?>
						   <td style="display: none;"><?php  echo $montant_apivia_sakit3;  ?></td>
						   
						     <td style="background-color:#e3fae1; " >
							
						   <p class="team-member-designation">
			                <span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold;display: block;margin-left: auto;margin-right: auto;">
			                <?php  echo 'ODA + BEP1 + BEP2' ; ?> </span>
			 
			           
			                    </p>
						   
						   </td>
						   
		<td style="background-color:#d6ecd4;  ">
		
		     <p class="team-member-designation"><span class="badge badge-pill  font-size-18 " style="color:black; font-weight: bold"><?php  echo $montant_apivia_sakit3_odabep1bep2.'€';  ?> par mois</span></p>
			
			<div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
            
			<input type="checkbox" name="prd[]" value="<?php  echo $infos_apivia_sakit3_odabep1bep2.'-'.$renfort_odabep1bep2; ?>" id="prd[]" data-target="checked" title="cocher" />
			 </span>
              </div>	
            <!--<a href="souscription.php?renfort=<?php echo $renfort ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php// echo $infos ;  ?>&project=<?php //echo $id ;  ?>" ><i class="fas fa-file-signature"></i></a>-->
              <div class="avatar-xs mx-auto mb-3">
                             <span class="avatar-title rounded-circle bg-pink font-size-16">
                              <a href="souscription.php?renfort=<?php echo $renfort_odabep1bep2 ; ?>&id_prd=<?php echo $ID_p_sakit;  ?>&produit=<?php echo $infos_sous_apiv_sakit3_odabep1bep2 ;  ?>&project=<?php echo $id ;  ?>" title="souscrire"><i class="mdi mdi-pen text-white"></i></a>
                             </span>
              </div>	
			  
		   </td>
						  
							
							 <td style="background-color:#e3fae1;  ">
						
							<p  style="font-weight: bold;">Honoraires chirurgie (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Médecins (DPTAM):</p><hr>
							<p style="font-weight: bold;" >Prothèses dentaires remboursées:</p><hr>
							<p style="font-weight: bold;" >Monture + 2 verres complexes (classe B):</p><hr>
							<p style="font-weight: bold;" >Audio-prothèse classe II:</p><hr>
							<p style="font-weight: bold;" >Médecine naturelle:</p>
		                    
		                   </td>
						   
						    
		 <td style="background-color:#e3fae1;  ">
		<p style="font-weight: bold;">
		 <?php echo $hopt_apivia_sakit3; ?> 
		 <?php if($info_hopt_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_hopt_apivia_sakit3; ?>"></i>
		 <?php } ?>					
						
		</p>
		<hr>
		<p style="font-weight: bold;">
		<?php echo $med_apivia_sakit3; ?> 
		<?php if($info_med_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_med_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 
		</p>
		   <hr>
		   <p style="font-weight: bold;">
		   <?php echo $proth_dent_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_dent_apivia_sakit3 ; ?></span>
		<?php if($info_proth_dent_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_proth_dent_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  <?php echo $opt_comp_apivia_sakit3; ?>
			<?php if($info_opt_comp_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_opt_comp_apivia_sakit3; ?>"></i>
		 <?php } ?>			
		 	</p>
		  <hr>
		   <p style="font-weight: bold;">
		  
		<?php  echo $aud_apivia_sakit3; ?> <span style="color:red;"><?php echo $packs_aud_apivia_sakit3 ; ?></span>
		<?php if($info_aud_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_aud_apivia_sakit3; ?>"></i>
		 <?php } ?>	
		</p>
		   <hr>
		   <p  style="font-weight: bold;">
		   <?php echo $BE_apivia_sakit3; ?><span style="color:red;"><?php echo $packs_BE_apivia_sakit3 ; ?></span>
		<?php if($info_BE_apivia_sakit3 !=''){ ?>
		 <i class="fas fa-info-circle" title="<?php echo $info_BE_apivia_sakit3; ?>"></i>
		 <?php } ?>					
		</p>
		<p style="display:none;"><?php echo $cha_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $orthodontie_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $dent_nremb_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $opt_simple_apivia_sakit3; ?></p>
		<p style="display:none;"><?php echo $lentille_apivia_sakit3  ; ?></p>
		

		 </td>		
							
							</tr>								
<?php } ?>	
<script>
$('.apivia_sakit3').click(function(){
var bep1 = $(this).closest('tr').next();
  bep1.toggle();
var bep2 = bep1.next();
   bep2.toggle();
var bep3 = bep2.next();
   bep3.toggle();
var bep4 = bep3.next();
   bep4.toggle();
   //////
   var bep5 = bep4.next();
   bep5.toggle();
   var bep6 = bep5.next();
   bep6.toggle();
   var bep7 = bep6.next();
   bep7.toggle();
   var bep8 = bep7.next();
   bep8.toggle();
   var bep9 = bep8.next();
   bep9.toggle();
   var bep10 = bep9.next();
   bep10.toggle();
   /////////
   
   var bep11 = bep10.next();
   bep11.toggle();
   var bep12 = bep11.next();
   bep12.toggle();
   var bep13 = bep12.next();
   bep13.toggle();
   var bep14 = bep13.next();
   bep14.toggle();
   
});

</script>
