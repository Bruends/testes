(function(){
//instanciando novo module
var app = new angular.module('store', []);

//novo controller
app.controller('StoreController', function(){
    this.products = gems;
    
});
    
//controller painel
app.controller('PanelController', function(){
    this.tab = 1;
    
    this.setTab = function(actualTab){
        this.tab = actualTab;        
    }
    
    this.isSelected = function(tabToCheck){
        return (this.tab === tabToCheck);
    }
});

//objeto js com infos do produto
var gems = [
    {
        name: 'Dodwcahedron',
        price: 2.95,
        description: '. . .',
        canBuy: false, 
        img: "imgs/gem1.png",
    },
    
    {
        name: 'Dodwcahedron',
        price: 2.95,
        description: '. . .',
        canBuy: true, 
        img: "imgs/gem2.jpg"
    }
    
]

})();

