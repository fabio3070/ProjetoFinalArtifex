$(document).ready(function()
{
    // botao de preview imagem
    var imgPreviewbtn = document.getElementById('post_img');
    // Prewview da imagem do post
    var imgPreview = document.getElementById('imgpreview');
    //caixa com border
    var borderPreview = document.getElementById('home_post_example_border');

    //FUNCAO PARA ABRIR A IMAGEM PREVIEW NO POST
    imgPreviewbtn.onclick = function()
    {
        if(imgPreview.style.display=="none")
        {
            imgPreview.style.display="flex";
            borderPreview.style.border="1px solid #ccc";
            borderPreview.style.margin="10px";

        }
        else
        {
            imgPreview.style.display="none";
        }
    }



});