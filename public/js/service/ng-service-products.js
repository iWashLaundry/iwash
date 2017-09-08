app.service('productService', ['iwashhttp', function(iwashhttp){
    var productService = this;
    this.product = {
        name: '',
        price: ''
    }
    
    this.products = {
        all: [],
        getAll: function(){
            iwashhttp.get(urls.api_url + '/products', function(response){
                productService.products.all = response.data;
            });
        },
        create: function(product){
            iwashhttp.post(urls.api_url + '/products', product, function(response){
                productService.products.getAll();
            });
        },
        update: function(product){
            iwashhttp.put(urls.api_url + '/products', product, function(response){
                productService.products.getAll();
            });
        },
        delete: function(productId){
            iwashhttp.delete(urls.api_url + '/products/' + productId, function(response){
                productService.products.getAll();
            });
        },
    }  
}]);