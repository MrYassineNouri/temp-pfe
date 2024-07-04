<?php

$effect_date = '01/04/2024';
$codepostale = '77000';
$datenais_comp = '23/01/1968';
if ($regimeb=='Salarié'){ $regime='SS' ;}
if ($regimeb=='tns'){ $regime='TNS' ; } 
if ($regimeb=='Alsace-Moselle'){  $regime= 'ALSMO';} 
if ($regimeb=='Exploitant agricole'){$regime= 'MSA';  }
if ($regimeb=='Salarié agricole'){ $regime= 'SALARIEAGRICOLE';} 
if ($regimeb=='Retraité TNS'){ $regime='TNS' ;}  
if ($regimeb=='Retraité salarié'){ $regime='SS' ;}  
if ($regimeb=='Retraité Alsace-Moselle'){ $regime= 'ALSMO'; } 
if ($regimeb=='Fonction publique'){ $regime='SS' ; }  
if ($regimeb=='Etudiant'){ $regime='SS' ; } 
          
/*$data = [
    'cle' => 'e2abf0d09d114c07d71116d0080f63c4',
    'format' => 'json',
    // 'formules' => [*],
    // 'renforts' => [*],
    'dateEffet' => $effect_date,
    'codePostal' => $codepostale,
    'beneficiaires' => [
        [
		
		////////assur principal
            'dateDeNaissance' => $datenais_comp,
            'typeBeneficiaire' => 'PRINCIPAL',
            'regimeSocial' => 'AS',
            'regime' => 'AM'
        ],
		////conjoint if conj existe
       [
		    'dateDeNaissance' => 01/01/1995,
            'typeBeneficiaire' => 'CONJOINT',
            'typeAutreBeneficiaire' => 'ETUDIANT',
            'regimeSocial' => 'AS',
            'regime' => 'GE'
        ],
		/////child if child existe
        [
		
            'dateDeNaissance' => 01/02/2011,
            'typeBeneficiaire' => 'AUTRE',
            'typeAutreBeneficiaire' => 'ETUDIANT',
            'regimeSocial' => 'AS',
            'regime' => 'GE'
        ],
        [
            'dateDeNaissance' => 01/02/2012,
            'typeBeneficiaire' => 'AUTRE',
            'regimeSocial' => 'AS',
            'regime' => 'AM'
        ],
        [
            'dateDeNaissance' =>01/01/1995,
            'typeBeneficiaire' => 'AUTRE',
            'regimeSocial' => 'AS',
            'regime' => 'AM'
        ]
    ]

];*/
$data = [
    'cle' => 'e2abf0d09d114c07d71116d0080f63c4',
    'format' => 'json',
    'action' => 'tarification',
    // 'produits' => 'VITAMM3',
     // 'renforts' => [*],
    'codePostal' => 86000,
    'beneficiaires' => [
        [
            'typeBeneficiaire' => 'PRINCIPAL',
            'dateDeNaissance' => '01/02/1990',
            'regime' => 'GE',
            'regimeSocial' => 'AS'
        ]
    ]
];

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://extranet-recette.apivia-courtage.fr/ws/rest/sante/individuelle/',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => http_build_query($data),
]);

$resp = curl_exec($curl);
 // echo $resp;
curl_close($curl);
$array = json_decode($resp, true);
  // print_r( $array);


////////vitamin
if(isset($array["list"]["VITAMM3"])) { 
include 'vitamm3.php';
}
if(isset($array["list"]["VITAMT3"])) { 	
include 'vitamt3.php';		
}	

if(isset($array["list"]["VITAMH3"])) { 	
include 'vitamh3.php';		
}


//////////sakifo
if(isset($array["list"]["SAKIM3"])) { 
include 'sakim3.php';
}
if(isset($array["list"]["SAKIT3"])) { 	
include 'sakit3.php';		
}	

if(isset($array["list"]["SAKIH3"])) { 	
include 'sakih3.php';		
}