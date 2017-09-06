app.controller("InventoryController", function($http, $scope){
    var controller = this;
    this.product = {
        name: '',
        price: ''
    }
    
    this.products = {
        all: [],
        getAll: function(){
            $http.get('/api/products').then(function(response){
                controller.products.all = response.data;
            });
        },
        create: function(product){
            $http.post('/api/products/', product).then(function(response){
                controller.products.getAll();
            });
        },
        update: function(product){
            $http.put('/api/products/', product).then(function(response){
                controller.products.getAll();
            });
        },
        delete: function(productId){
            $http.delete('/api/products/' + productId).then(function(response){
                controller.products.getAll();
            });
        },

    }

    this.products.getAll();
});