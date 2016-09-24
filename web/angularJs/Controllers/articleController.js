/**
 * Controller associate to articles
 */
app.controller('articleController', function($scope,$http) {

    /**
     *
     * @type {Array}
     * @return json of articles
     */
    $scope.articles = [

    ];

    /**
     * Using this function to return all articles from datatabe
     */
    var getAllArticles = function(){

        $http.post(Routing.generate('getAllArticle'))
             .success(function(response){

                 /**
                  * Using this to test if the array data is equal to object response
                  */
                 if($scope.articles.length < response.nombre) {

                    for (var i = $scope.articles.length; i < (response.nombre); i++) {

                        $scope.articles.push({

                            id: response.articles[i].idArticle,
                            titreArticle: response.articles[i].titreArticle,
                            descriptionArticle: response.articles[i].descriptionArticle,
                            imageArticle: response.articles[i].imageArticle,
                            dateArticle: response.articles[i].dateArticle

                        });

                    }

                }else if($scope.articles.length > response.nombre){

                    for(var i=$scope.articles.length;i<(response.nombre);i++){

                        $scope.articles.push({

                            id: response.articles[i].idArticle,
                            titreArticle: response.articles[i].titreArticle,
                            descriptionArticle: response.articles[i].descriptionArticle,
                            imageArticle: response.articles[i].imageArticle,
                            dateArticle: response.articles[i].dateArticle

                        });

                    }
                }

            });

    };

    /**
     * call the last function each 1 second to test id another article exists
     */
    getAllArticles();
    setInterval(getAllArticles,1000);

});


app.controller('detailsArticleController', function($scope,$http) {

    /**
     * Using this function to Comment to Article with "id" => ArticleId
     */
    $scope.addComment = function(){

        /**
         * recup Id Article and text to add to entity Comment
         * @type {Element}
         */
        var ArticleId = document.getElementById("recupId");
        var textComment = document.getElementById("texteComment");

        $http.post(Routing.generate('addComment'),
                {
                    ArticleId : ArticleId,
                    textComment : textComment
                }
            )
            .success(function(response) {
                console.log(response);
            })
            .error(function(response){
                console.log(response);
            });
    };

});