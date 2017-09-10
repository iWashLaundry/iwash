app.service('customerService', ['iwashhttp', function(iwashhttp){
    var customerService = this;
    this.customer = {
        first_name: '',
        last_name: '',
        email: '',
        phone: '',
    }
    
    this.customers = {
        all: [],
        getAll: function(){
            iwashhttp.get(urls.api_url + '/customers', function(response){
                customerService.customers.all = response.data;
            });
        },
        create: function(customer){
            iwashhttp.post(urls.api_url + '/customers', customer, function(response){
                customerService.customers.getAll();
                $('#new-customer-modal').modal('hide');
            });
        },
        update: function(customer){
            iwashhttp.put(urls.api_url + '/customers', customer, function(response){
                customerService.customers.getAll();
            });
        },
        delete: function(customerId){
            iwashhttp.delete(urls.api_url + '/customers/' + customerId, function(response){
                customerService.customers.getAll();
            });
        }
    }  
}]);