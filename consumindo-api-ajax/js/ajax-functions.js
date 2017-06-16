$(function(){
    var name   = $("#nome");
    var image  = $("#image");
    
    $("#btn-search").on("click", function(){
        $.get('https://randomuser.me/api/?inc=name,picture', function(data, status){
            console.log(status);     
            
            if(status == "success"){
                var src = data["results"][0]["picture"]["large"];
            
                image.attr("src", src)
            
                name.text(data["results"][0]["name"]["first"]);
            
            } else {
                alert("Erro !");
                
            }
            
            
            
        }); 
    });
    
})