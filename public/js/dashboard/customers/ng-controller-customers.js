app.controller("CustomerController", ['customerService', function(customerService){
    this.customerService = customerService;
    this.customerService.customers.getAll();
}]);