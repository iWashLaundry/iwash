app.controller("ProductController", function($http, $scope){
    var controller = this;
    this.product = {
        name: '',
        price: ''
    }
    
    this.products = {
        all: [],
        getAll: function(){
            $http.get(urls.api_url + '/products').then(function(response){
                controller.products.all = response.data;
            });
        },
        create: function(product){
            $http.post(urls.api_url + '/products', product).then(function(response){
                controller.products.getAll();
            });
        },
        update: function(product){
            $http.put(urls.api_url + '/products', product).then(function(response){
                controller.products.getAll();
            });
        },
        delete: function(productId){
            $http.delete(urls.api_url + '/products/' + productId).then(function(response){
                controller.products.getAll();
            });
        },

    }

    this.products.getAll();
});