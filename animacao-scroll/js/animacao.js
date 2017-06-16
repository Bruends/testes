  $(window).on('scroll', function(){
     var scroll_pos = $(window).scrollTop();
      
      //faz a animação fade para cada item 
      //com a classe anime
      $('.anime').each(function(){
          var iten_pos = $(this).offset().top - 450;
          
          if(scroll_pos > iten_pos){
             $(this).addClass('anime-init');
          }
      })
  })