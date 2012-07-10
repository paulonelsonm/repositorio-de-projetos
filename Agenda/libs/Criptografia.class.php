<?php
//header("Content-Type: text/html; charset=ISO-8859-1", true);
class Criptografia{
/***************************
  Funcao para Encripta dados
 *
 * @param:
 * - string
 *@autor
 *Bruno Santos
 *
 *@criado
 *25/07/2011
 *
 * @return:
 * - msgEncriptada
****************************/    
    public function encripta($dados){
	$msgRetorno = "";
	$l;
	$i;
	$j=0;
	$ch;
	$cout =   mb_strlen($dados);          
	$ch = "assbdFbdpdPdpfPdAAdpeoseslsQQEcDDldiVVkadiedkdkLLnm";
    
	for ($i=0;$i<$cout; $i++){
		$j++;
          
		  
  
		$l=(ord(substr($dados,$i, 1))+(ord(substr($ch,$j, 1))));
	                
                if ($j==50){
                      $j=1;
                   }
                if ($l>255){
                     $l-=256;
                    }
                    $msgRetorno.=($this->modificaCaracter($l));
	}
	return $msgRetorno;
    }
    
/***************************
  Funcao para retira os acentos 
 *
 * @param:
 * - string
 *@autor
 *Bruno Santos
 *
 *@criado
 *20/07/2011
 *
 * @return:
 * - String sem os caracteres
****************************/
private function modificaCaracter($string){
$listaSubstituicao 	= array('a1','a2','a3','a4','a5','a6','a7','a8','a9','b1','b2','b3','b4','b5',
                                    'b6','b7','b8','b9','c1','c2','c3','c4','c5','c6','c7','c8','c9',
                                    'd1','d2','d3','d4','d5','d6','d7','d8','d9','e1','e2','e3','e4',
                                    'e5','e6','e7','e8','e9','f1','f2','f3','f4','f5','f6','f7','f8',
                                    'f9','g1','g2','g3','g4','g5','g6','g7','g8','g9','h1','h2','h3',
                                    'h4','h5','h6','h7','h8','h9','i1','i2','i3','i4','i5','i6','i7',
                                    'i8','i9','j1','j2','j3','j4','j5','j6','j7','j8','j9','k1','k2',
                                    'k3','k4','k5','k6','k7','k8','k9','l1','l2','l3','l4','l5','l6',
                                    'l7','l8','l9','m1','m2','m3','m4','m5','m6','m7','m8','m9','n1',
                                    'n2','n3','n4','n5','n6','n7','n8','n9','o1','o2','o3','o4','o5',
                                    'o6','o7','o8','o9','p1','p2','p3','p4','p5','p6','p7','p8','p9',
                                    'q1','q2','q3','q4','q5','q6','q7','q8','q9','r1','r2','r3','r4',
                                    'r5','r6','r7','r8','r9','s1','s2','s3','s4','s5','s6','s7','s8',
                                    's9','t1','t2','t3','t4','t5','t6','t7','t8','t9','u1','u2','u3',
                                    'u4','u5','u6','u7','u8','u9','v1','v2','v3','v4','v5','v6','v7',
                                    'v8','v9','w1','w2','w3','w4','w5','w6','w7','w8','w9','y1','y2',
                                    'y3','y4','y5','y6','y7','y8','y9','ab','ac','ad','ae','af','ag',
                                    'ah','ai','aj','al','am','an','ao','ap','aq','ar','as','at','au',
                                    'av','ax','az','ba','bb','bc','bd','be','bf','bg','bh','bi','bj',
                                    'bl','bm','bn','bo','bp','bq','bu','bv');
									
									
									
                                  
                                    
     for ($i=0;$i<255;$i++){
            if( $string == $i){
			    return $listaSubstituicao[$i];
            }
		
	}
} 
    
  /***************************
  FUNCAO MODIFICAR A CRIPTOGRAFIA

 *
 * @param:
 * - valor
 *@autor
 *Bruno Santos
 *
 *@criado
 *27/07/2010
 *
 * @return:
 * - valorDescriptografia
****************************/

private function verificaValor($valor){
    
    $arrayCaracter       = array('a1','a2','a3','a4','a5','a6','a7','a8','a9','b1','b2','b3','b4','b5',
                                    'b6','b7','b8','b9','c1','c2','c3','c4','c5','c6','c7','c8','c9',
                                    'd1','d2','d3','d4','d5','d6','d7','d8','d9','e1','e2','e3','e4',
                                    'e5','e6','e7','e8','e9','f1','f2','f3','f4','f5','f6','f7','f8',
                                    'f9','g1','g2','g3','g4','g5','g6','g7','g8','g9','h1','h2','h3',
                                    'h4','h5','h6','h7','h8','h9','i1','i2','i3','i4','i5','i6','i7',
                                    'i8','i9','j1','j2','j3','j4','j5','j6','j7','j8','j9','k1','k2',
                                    'k3','k4','k5','k6','k7','k8','k9','l1','l2','l3','l4','l5','l6',
                                    'l7','l8','l9','m1','m2','m3','m4','m5','m6','m7','m8','m9','n1',
                                    'n2','n3','n4','n5','n6','n7','n8','n9','o1','o2','o3','o4','o5',
                                    'o6','o7','o8','o9','p1','p2','p3','p4','p5','p6','p7','p8','p9',
                                    'q1','q2','q3','q4','q5','q6','q7','q8','q9','r1','r2','r3','r4',
                                    'r5','r6','r7','r8','r9','s1','s2','s3','s4','s5','s6','s7','s8',
                                    's9','t1','t2','t3','t4','t5','t6','t7','t8','t9','u1','u2','u3',
                                    'u4','u5','u6','u7','u8','u9','v1','v2','v3','v4','v5','v6','v7',
                                    'v8','v9','w1','w2','w3','w4','w5','w6','w7','w8','w9','y1','y2',
                                    'y3','y4','y5','y6','y7','y8','y9','ab','ac','ad','ae','af','ag',
                                    'ah','ai','aj','al','am','an','ao','ap','aq','ar','as','at','au',
                                    'av','ax','az','ba','bb','bc','bd','be','bf','bg','bh','bi','bj',
                                    'bl','bm','bn','bo','bp','bq','bu','bv');
    
    
    for($i=0;$i<255;$i++){
       if($arrayCaracter[$i] == $valor ){
          return    $i; 
       } 
    }
    
    
}  
    /***************************
  FUNCAO Retira acentos

 *
 * @param:
 * - string
 *@autor
 *Bruno Santos
 *
 *@criado
 *27/07/2010
 *
 * @return:
 * - retorna a string Descriptografada
****************************/

public function descripta($dados){ 
       $msgDescripta ="";
       $j = 0;
       $k = 0;
       $l = 0;
       $ch = "assbdFbdpdPdpfPdAAdpeoseslsQQEcDDldiVVkadiedkdkLLnm";		
       $cout =   strlen($dados);       
	   
	   
	for ($i=0; $i<$cout;$i++){
		$j++;
                              
                if($this->verificaValor(substr($dados,$k, 2))!= ""){
                    $l=($this->verificaValor(substr($dados,$k, 2)) - (ord(substr($ch, $j))));
                
        if ($j==50){
			$j=1;
		}
		if ($l<0){
			$l+=256;
		}
                
                    $k=$k+2;    
                
                
		$msgDescripta.=($this->sunsTValor($l));
            }

	}	
         return $msgDescripta;
		 
    }

    /***************************
  FUNCAO Retira acentos

 *
 * @param:
 * - valor
 *@autor
 *Bruno Santos
 *
 *@criado
 *27/07/2010
 *
 * @return:
 * - verificar o valor na Tabela ASC
****************************/
private function sunsTValor($valor){
    
    $arrayCaracter       = Array('33','35','36','37','38','40','41','42','43','45','46','47','48','49','50','51',
                                 '52','53','54','55','56','57','58','59','61','63','64','65','66','67','68','69',
                                 '70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85',
                                 '86','87','88','89','90','91','93','95','97','98','99','100','101','102','103',
                                 '104','105','106','107','108','109','110','111','112','113','114','115','116',
                                 '117','118','119','120','121','122','123','124','125','126','176','192','193',
                                 '194','195','196','197','199','200','201','202','203','204','205','206','207',
                                 '208','209','210','211','212','213','214','215','217','218','219','220','221',
                                 '224','225','226','227','228','229','230','231','232','233','234','235','236',
                                 '237','238','239','241','242','243','244','245','246','247','249','250','251',
                                 '252','253','255');
    
    
    $arraySubstitui    =  Array('!','#','$','%','&','(',')','*','+','-','.','/','0','1','2','3',
                                '4','5','6','7','8','9',':',';','=','?','@','A','B','C','D','E',
                                'F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U',
                                'V','W','X','Y','Z','[',']','_','a','b','c','d','e','f','g','h',
                                'i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x',
                                'y','z','{','|','}','~','°','À','Á','Â','Ã','Ä','Å','Ç','È','É',
                                'Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','×','Ù','Ú',
                                'Û','Ü','Ý','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì',
                                'í','î','ï','ñ','ò','ó','ô','õ','ö','÷','ù','ú','û','ü','ý','ÿ');
    

    
    for($i=0;$i<count($arrayCaracter);$i++){
       if($arrayCaracter[$i] == $valor ){
           return $arraySubstitui[$i]; 
       } 
    }
   }
    
}
?>
