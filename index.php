<!DOCTYPE html>
<html>
<head>



<script> 
 var slideIndex = 0;
  
	 $i=0 ;

function Slider_Start() {
  

 var Banners = ["","BANNER01.png","BANNER02.png","BANNER03.png","BANNER04.png","BANNER05.png","BANNER06.png","SON"];
 
 
 
var Links = ["","http://www.hurriyet.com.tr","http://www.google.com","http://www.amazon.com","http://www.hurriyet.com.tr","http://www.google.com","http://www.amazon.com","SON"];
 

  $i++;
   document.getElementById('Slider_Img').src =Banners[$i];
   document.getElementById('Slider_Link').href =Links[$i];
   if(Banners[$i]=="SON"){
       
    
     document.getElementById('Slider_Img').src =Banners[1];
     document.getElementById('Slider_Link').href =Links[1];
       $i=1;
   }

   setTimeout(Slider_Start, 3000);
   $slide_sayisi = count(Banners);
  
   
}


 function Body_Onloader(){
         
         /*
         
         Sayfa İlk Yüklendiğinde Çalıştırılması Gereken Komutlar Bu Bölümde Bulunur. 
         */
         
         setTimeout(Slider_Start, 1000);
         
     }

</script>
</head>

<?php
 
  
 
  
  
  echo "
  
  
<h1> Simple Caurosel Slider </h1>

<body onload='Body_Onloader();' >
  
  
  


  
  <a href ='' id='Slider_Link'><img id='Slider_Img' src='BANNER06.png' width='100%' height='515'>   </img></a>
  
 
  </body>
</html>
  
  
  ";
  
  
		

?>

