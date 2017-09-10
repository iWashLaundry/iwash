app.service('itemService', ['iwashhttp', function(iwashhttp){
    var itemService = this;
    this.item = {
        name: '',
    }
    
    this.items = {
        all: [],
        getAll: function(){
            iwashhttp.get(urls.api_url + '/items', function(response){
                itemService.items.all = response.data;
            });
        },
        create: function(item){
            iwashhttp.post(urls.api_url + '/items', item, function(response){
                itemService.items.getAll();
            });
        },
        update: function(item){
            iwashhttp.put(urls.api_url + '/items', item, function(response){
                itemService.items.getAll();
            });
        },
        delete: function(itemId){
            iwashhttp.delete(urls.api_url + '/items/' + itemId, function(response){
                itemService.items.getAll();
            });
        }
    }  
}]);