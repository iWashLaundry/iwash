app.controller("UnitController", ['unitService', function(unitService){
    this.unitService = unitService;
    this.unitService.units.getAll();
}]);