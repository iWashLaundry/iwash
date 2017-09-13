app.service('unitService', ['iwashhttp', function(iwashhttp){
    var unitService = this;
    this.unit = {
        name: '',
        symbol: ''
    }
    
    this.units = {
        all: [],
        getAll: function(){
            iwashhttp.get(urls.api_url + '/units', function(response){
                unitService.units.all = response.data;
            });
        },
        create: function(unit){
            iwashhttp.post(urls.api_url + '/units', unit, function(response){
                unitService.units.getAll();
            });
        },
        update: function(unit){
            iwashhttp.put(urls.api_url + '/units', unit, function(response){
                unitService.units.getAll();
            });
        },
        delete: function(unitId){
            iwashhttp.delete(urls.api_url + '/units/' + unitId, function(response){
                unitService.units.getAll();
            });
        }
    }  
}]);