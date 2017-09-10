app.controller("ItemController", ['itemService', function(itemService){
    this.itemService = itemService;
    this.itemService.items.getAll();
}]);