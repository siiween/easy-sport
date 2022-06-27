'use scrict'

window.addEventListener('load', function(){
    var index = 0;

    var listaimg = ["assets/images/fondo2.jpg", "assets/images/fondo3.jpg", "assets/images/fondo4.jpg", "assets/images/fondo5.jpg", "assets/images/fondo6.jpg"];
    
    $(function() {
        
        setInterval(changeImage, 8000);
  
    });

    function changeImage() {
        
        $('body').css("background-image", 'url(' + listaimg[index] + ')');
        //$('body').css("transition", 'background-image 3s');

        
                            
        index++;
                    
        if(index == 5)
            index = 0;

    }

});