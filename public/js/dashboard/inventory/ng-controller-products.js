app.controller("ProductController", function($http, $scope, iwashhttp){
    var controller = this;
    this.product = {
        name: '',
        price: ''
    }
    
    this.products = {
        all: [],
        getAll: function(){
            iwashhttp.get(urls.api_url + '/products', function(response){
                controller.products.all = response.data;
            });
        },
        create: function(product){
            iwashhttp.post(urls.api_url + '/products', product, function(response){
                controller.products.getAll();
            });
        },
        update: function(product){
            iwashhttp.put(urls.api_url + '/products', product, function(response){
                controller.products.getAll();
            });
        },
        delete: function(productId){
            iwashhttp.delete(urls.api_url + '/products/' + productId, function(response){
                controller.products.getAll();
            });
        },

    }

    this.products.getAll();
});