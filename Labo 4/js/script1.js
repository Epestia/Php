// JavaScript de la page 2

let ImgA = ['img/1.jpg', 'img/2.jpg', 'img/3.jpg','img/4.jpg', 'img/5.jpg', 'img/6.jpg','img/7.jpg','img/8.jpg']; // tableau d'image
let ind=2; 	  // indice ind pour parcourrir le tableau

function ChangerImg(){

	ind= ++ind % ImgA.length; //modulo 8 = la taille du tableau d'image pour retourner au début s'il atteingnait la limite maximale
	//let j=1;
	
	$(document).ready(function() {        
		
		$('.imageContainer img').click(function() {//selectionner tous les images de la classe ImageCOntainer et attacher une fonction click
			
			$(this).attr('src', ImgA[ind]); // changer la source par l'image du tableau ImgA
			//j++;
			//alert(" indexe : " + ind + " nombre de fois : " + j);	

		});
	
		 
	});			
}