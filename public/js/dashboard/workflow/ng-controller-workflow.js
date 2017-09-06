app.controller("WorkflowController", function($http, $scope){
    var controller = this;
    this.order = {
        customer_email: '',
        customer_first_name: '',
        customer_id: '',
        customer_last_name: '',
        customer_phone: '',
        date_claimed: '',
        date_ordered: '',
        date_ready: '',
        date_started: '',
        date_to_claim: '',
        products: [],
        updateProduct: function(productId, quantity){
            controller.order.products[productId] = quantity;
            console.log(controller.order.products);
        },
    }
    
    this.orders = {
        open: [],
        inProgress: [],
        ready: [],
        segregateOrders: function(allOrders){
            controller.orders.ready = [];                    
            controller.orders.inProgress = [];
            controller.orders.open = [];    
            
            angular.forEach(allOrders, function(order, key){
                if(order.date_claimed != "0000-00-00 00:00:00"){
                    //do nothing
                }else if(order.date_ready != "0000-00-00 00:00:00"){
                    controller.orders.ready.push(order)                    
                }else if(order.date_started != "0000-00-00 00:00:00"){
                    controller.orders.inProgress.push(order);
                }else{
                    controller.orders.open.push(order);    
                }
            });
        },
        getAll: function(){
            $http.get('/api/orders').then(function(response){
                controller.orders.segregateOrders(response.data);
            });
        },
        get: function(orderId, successFunction){
            $http.get('/api/orders/' + orderId).then(function(response){
                successFunction(response.data);
            });
        },
        create: function(order){
            order.date_ordered = new Date().toISOString().slice(0, 19).replace('T', ' ');
            $http.post('/api/orders/', order).then(function(response){
                $("#new-order-modal").modal("hide");
                controller.order = response.data;
                controller.orders.getAll();
                setTimeout(function(){
                    controller.resetOrder();
                }, 10000);
            });
        },
        update: function(order){
            $http.put('/api/orders/', order).then(function(response){
                controller.orders.getAll();
            });
        },
        delete: function(orderId){
            $http.delete('/api/orders/' + orderId).then(function(response){
                controller.orders.getAll();         
            });
        },
        updateStatus: function(orderId, statusFrom, statusTo){
            controller.orders.get(orderId, function(order){
                if(order){
                    if(statusFrom == "new" && statusTo == 'inProgress'){
                        order.date_started = new Date().toISOString().slice(0, 19).replace('T', ' ');
                        controller.orders.update(order);                               
                    }else if(statusFrom == "inProgress" && statusTo == 'new'){
                        order.date_started = '0000-00-00 00:00:00';
                        controller.orders.update(order);                               
                    }else if(statusFrom == 'inProgress' && statusTo == 'ready'){
                        order.date_ready = new Date().toISOString().slice(0, 19).replace('T', ' ');
                        controller.orders.update(order);                
                    }else if(statusFrom == "ready" && statusTo == 'inProgress'){
                        order.date_ready = '0000-00-00 00:00:00';
                        controller.orders.update(order);                                
                    }else if(statusFrom == "ready" && statusTo == 'claimed'){
                        order.date_claimed = new Date().toISOString().slice(0, 19).replace('T', ' ');
                        controller.orders.update(order);                                
                    }
                }    
            });
        },
        newToInProgress: function(orderId){
            controller.orders.updateStatus(orderId, 'new', 'inProgress');
        },
        inProgressToNew: function(orderId){
            controller.orders.updateStatus(orderId, 'inProgress', 'new');
        },
        inProgressToReady: function(orderId){
            controller.orders.updateStatus(orderId, 'inProgress', 'ready');
        },
        readyToInProgress: function(orderId){
            controller.orders.updateStatus(orderId, 'ready', 'inProgress');
        },
        readyToClaimed: function(orderId){
            controller.orders.updateStatus(orderId, 'ready', 'claimed');
        },
    }

    this.resetOrder = function(){
        $scope.$apply(function(){
            controller.order = {
                customer_email: '',
                customer_first_name: '',
                customer_id: '',
                customer_last_name: '',
                customer_phone: '',
                date_claimed: '',
                date_ordered: '',
                date_ready: '',
                date_started: '',
                date_to_claim: '',
                products: [],
            }    
        })
    }

    this.orders.getAll();
});