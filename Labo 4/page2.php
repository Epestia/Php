<html>

<head>
	 <title> Page 2</title>
	<!--  
		<script src="js/script1.js">  </script> 	 
		script de la page2
	-->
	
    <link rel="stylesheet" type="text/css" href="CSS/stylepage2.css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>	
	<script src="jquery-3.7.1.min.js"></script>
			

</head>

<body>

	<?php

		$prenom = $_POST["prenom"]; // récupération des valeurs encodés de la page1
		$nom = $_POST["nom"];
		$n = $_POST["nombre"];

		echo 'Bienvenue ',$nom,' ',$prenom ;
	
		if ($n>3){  // afficher les lettres alphabétiques selon le nombre entré

			$lettre='a'; 
			echo "<br>";
			echo " le nombre :" .$n."<br>";
			for( $i=0;$i<$n;$i++){
				
				echo $lettre++ . " ";
			
			}			
		}
		else { // sinon afficher maximun 3 images 
				
			?>
			
			<p id="numero"></p>

			<div class="imageContainer" id="container"  > </div>  <!-- conteneur du tableau d'image'-->

			<script>
				
				// le js est inclus içi car , il doit être exécuté après que le tableau soit chargé

				let num = "<?php echo $n; ?>"; // num reçoit le numéro d'entrer venant du PHP

				document.getElementById("numero").innerHTML = "Le nombre est : " + num;

				let ImgA = ['img/1.jpg', 'img/2.jpg', 'img/3.jpg','img/4.jpg', 'img/5.jpg', 'img/6.jpg','img/7.jpg','img/8.jpg']; // tableau d'image
				let ind=2; 	  // indice pour parcourrir le tableau
				//let ImgAr = ["img/1.jpg", "img/2.jpg", "img/3.jpg","img/4.jpg", "img/5.jpg", "im/6.jpg"]; // créer un tableau d'images

				 for(let i=0 ; i<num ; i++) {
					
					let image = document.createElement("img");    // construire un élément de type image
					
					image.src = ImgA[i];							// affecter le tableau d'image à l'élément image
					
					container.appendChild(image);					// ajouter l'élément image au container (qui est div)
					
				 }

								
				 // let j=0;

				$(document).ready(function() {        
	
					$('.imageContainer img').click(function() {//selectionner tous les images de la classe ImageCOntainer et attacher une fonction click
		
						ind= ++ind % ImgA.length;
						$(this).attr('src', ImgA[ind]); // changer la source par l'image du tableau ImgA
						//j++;
						//alert(" indexe : " + ind + " nombre de fois : " + j);	

					});
	 
				});			

			</script>

		<?php
		}
				
	?>

</body>

</html>