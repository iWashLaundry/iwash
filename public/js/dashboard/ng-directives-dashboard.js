app.directive("outsideClick", ['$document','$parse', function( $document, $parse ){
    return {
        link: function( $scope, $element, $attributes ){
            var scopeExpression = $attributes.outsideClick;
            var onDocumentClick = function(event){
                var isChild = $element.find(event.target).length > 0;

                if(!isChild) {
                    console.log('triggered');
                    $scope.$apply(scopeExpression);
                }
            };

            $document.bind("click", onDocumentClick);
            $element.on('$destroy', function() {
                $document.off("click", onDocumentClick);
            });
        }
    }
}]);