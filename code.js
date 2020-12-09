$(function () {

    $("#btnDescargar").click(function () {

         //var image = document.getElementById("draw-canvas").toDataURL("image/png");

         //image = image.replace('data:image/png;base64,', '');
        //var image= 
          //console.log(images);
          //alert("hola");
         // var idCanvas="draw-canvas";
         // imagen.value=document.getElementById(idCanvas).toDataURL('image/png');
         var contenido =$("#draw-image").attr("src") 
         console.log(contenido)
         // var parametros = 'imagen=' + contenido; 
          console.log(parametros);
         alert("!")
         $.ajax({
              type: 'POST',
              url: 'code.php',
              data: parametros,
            success: function (msg) {
                 alert(msg);
                 alert('Image saved successfully !');

            }

       });

    });

});
