app.controller("ProductController", ['productService', function(productService){
    this.productService = productService;
    this.productService.products.getAll();
}]);