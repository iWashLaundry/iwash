app.controller("WorkflowController", ['orderService', function(orderService){
    this.orderService = orderService;
    this.orderService.orders.getAll();
}]);