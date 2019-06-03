//cuando se le da click al boton//
$('.btn-show').on('click', function(){
    //aparecera con una aminacion//
    $('form').animate({
        top: '0px'
    });
    //mostar el shap//
    $('.shape').fadeIn();
    //desaparezaca scroll//
    $('body').css({
        overflow: 'hidden'
    })
    
})
//al darle click devolverlo//
$('.shape').on('click', function(){
    //se desaparezca//
     $('form').animate({
        top: '-400px'
    });
    //desaparezca el shape//
    $('.shape').fadeOut();
    //desaparezca el scroll//
    $('body').css({
        overflowY: 'scroll'
    })
    
})
//al darle click cargar imagen//
$('.load-image').on('click', function(){
    //al darle click//
    $('.seleted').click();
    
})


/*VISOR DE FOTOS*/

$(function() {
  $('.seleted').change(function(e) {
      addImage(e); 
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;
    
      if (!file.type.match(imageType))
       return;
  
      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }
  
     function fileOnload(e) {
      var result=e.target.result;
      $('.image-select').attr("src",result);
     }
    });












