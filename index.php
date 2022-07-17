<?php

/* Melhorias
- Montar um objeto com siglas e intervalos
- montar um loop com esse objeto
- rodar tudo de uma vez pode fazer o algoritmo parar, então dividir em intervalos pode ser uma boa
- implementar um paralelismo para baixar siglas/pastas diferentes ao msm tempo
*/

// $inicio = 1; 
$inicio = 0; //CRI 6577  //DOU 4988  //HA1 0000   //VI2 0003   //VIV 8300  //HAN 0000
// $fim = 2000;
$fim = 948; //CRI 8551   //DOU 6167  //HA1 0999  //VI2 1965   //VIV 9083  //HAN 0948

$pasta = "fotos";
$obstaculo_lista = ["BRU", "CA1", "CRI", "DOU", "HA1", "VI2", "VIV", "HAN"];

$obstaculo = $obstaculo_lista[7];

	// foreach ($obstaculo_lista as $obstaculo) {
		// var_dump($obstaculo);

	// die;
		for($i = $inicio; $i <= $fim; $i++){
				$file_name = str_pad($i , 4 , '0' , STR_PAD_LEFT);

				$url = 'https://b320e0848c241189.cdn.gocache.net/upload/fotosevento/37303/' . $obstaculo .'_' . $file_name. '.jpg';
				// $path = "./" . $obstaculo . "/" . $i . ".jpg";
				$path = "./" . $pasta . "/" . $obstaculo . "/" . $file_name . ".jpg";

				if(!file_get_contents($url))
					continue;

				var_dump("<br/>");
				var_dump("<br/>");
				var_dump($url);
				var_dump($path);

				file_put_contents($path, file_get_contents($url));
		}

	// }

?>
