app.service('orderService', ['iwashhttp', function(iwashhttp) {
  var orderService = this;
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
    updateProduct: function(productId, quantity) {
      orderService.order.products[productId] = quantity;
    },
    resetOrder: function() {
      orderService.order = {
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
    }
  }

  this.orders = {
    open: [],
    inProgress: [],
    ready: [],
    segregateOrders: function(allOrders) {
      orderService.orders.ready = [];
      orderService.orders.inProgress = [];
      orderService.orders.open = [];

      angular.forEach(allOrders, function(order, key) {
        if (order.date_claimed != "0000-00-00 00:00:00") {
          //do nothing
        } else if (order.date_ready != "0000-00-00 00:00:00") {
          orderService.orders.ready.push(order)
        } else if (order.date_started != "0000-00-00 00:00:00") {
          orderService.orders.inProgress.push(order);
        } else {
          orderService.orders.open.push(order);
        }
      });
    },
    getAll: function() {
      iwashhttp.get(urls.api_url + '/orders', function(response) {
        orderService.orders.segregateOrders(response.data);
      });
    },
    get: function(orderId, successFunction) {
      iwashhttp.get(urls.api_url + '/orders/' + orderId, function(response) {
        successFunction(response.data);
      });
    },
    create: function(order) {
      order.date_ordered = new Date().toISOString().slice(0, 19).replace('T', ' ');
      iwashhttp.post(urls.api_url + '/orders', order, function(response) {
        $("#new-order-modal").modal("hide");
        orderService.order = response.data;
        orderService.orders.getAll();
        setTimeout(function() {
          orderService.order.resetOrder();
        }, 10000);
      });
    },
    update: function(order) {
      iwashhttp.put(urls.api_url + '/orders', order, function(response) {
        orderService.orders.getAll();
      });
    },
    delete: function(orderId) {
      iwashhttp.delete(urls.api_url + '/orders/' + orderId, function(response) {
        orderService.orders.getAll();
      });
    },
    updateStatus: function(orderId, statusFrom, statusTo) {
      orderService.orders.get(orderId, function(order) {
        if (order) {
          if (statusFrom == "new" && statusTo == 'inProgress') {
            order.date_started = new Date().toISOString().slice(0, 19).replace('T', ' ');
            orderService.orders.update(order);
          } else if (statusFrom == "inProgress" && statusTo == 'new') {
            order.date_started = '0000-00-00 00:00:00';
            orderService.orders.update(order);
          } else if (statusFrom == 'inProgress' && statusTo == 'ready') {
            order.date_ready = new Date().toISOString().slice(0, 19).replace('T', ' ');
            orderService.orders.update(order);
          } else if (statusFrom == "ready" && statusTo == 'inProgress') {
            order.date_ready = '0000-00-00 00:00:00';
            orderService.orders.update(order);
          } else if (statusFrom == "ready" && statusTo == 'claimed') {
            order.date_claimed = new Date().toISOString().slice(0, 19).replace('T', ' ');
            orderService.orders.update(order);
          }
        }
      });
    },
    newToInProgress: function(orderId) {
      orderService.orders.updateStatus(orderId, 'new', 'inProgress');
    },
    inProgressToNew: function(orderId) {
      orderService.orders.updateStatus(orderId, 'inProgress', 'new');
    },
    inProgressToReady: function(orderId) {
      orderService.orders.updateStatus(orderId, 'inProgress', 'ready');
    },
    readyToInProgress: function(orderId) {
      orderService.orders.updateStatus(orderId, 'ready', 'inProgress');
    },
    readyToClaimed: function(orderId) {
      orderService.orders.updateStatus(orderId, 'ready', 'claimed');
    },
  }
}]);