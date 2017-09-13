app.service('iwashhttp', function($http) {
  var iwashhttp = this;

  iwashhttp.openModal = function() {
    if (!$('#loading-modal').hasClass('show')) {
      $('#loading-modal').modal('show');
    }
  }

  iwashhttp.closeModal = function() {
    if ($('#loading-modal').hasClass('show')) {
      $('#loading-modal').modal('hide');
    }
  }

  iwashhttp.callHttp = function(method, url, callback, data) {
    iwashhttp.openModal();
    if (method == 'get') {
      $http.get(url).then(function(response) {
          callback(response);
          iwashhttp.closeModal();
        },
        function() {
          iwashhttp.closeModal();
        });
    } else if (method == 'post') {
      $http.post(url, data).then(function(response) {
          callback(response);
          iwashhttp.closeModal();
        },
        function() {
          iwashhttp.closeModal();
        });
    } else if (method == 'put') {
      $http.put(url, data).then(function(response) {
          callback(response);
          iwashhttp.closeModal();
        },
        function() {
          iwashhttp.closeModal();
        });
    } else if (method == 'delete') {
      var remove = confirm("Are you sure you want to delete this?");
      if(remove){
        $http.delete(url).then(function(response) {
            callback(response);
            iwashhttp.closeModal();
        },
        function() {
          iwashhttp.closeModal();
        });
      }else{
        iwashhttp.closeModal();
      }
    } else {
      iwashhttp.closeModal();
    }
  }

  iwashhttp.get = function(url, callback) {
    iwashhttp.callHttp('get', url, callback);
  }

  iwashhttp.post = function(url, data, callback) {
    iwashhttp.callHttp('post', url, callback, data);
  }

  iwashhttp.put = function(url, data, callback) {
    iwashhttp.callHttp('put', url, callback, data);
  }

  iwashhttp.delete = function(url, callback) {
    iwashhttp.callHttp('delete', url, callback);
  }

});