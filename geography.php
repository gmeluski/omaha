<?php 
    $request_type = $_GET['type'];
    $geo_location = strtoupper($_GET['geo_location']);

    if ($request_type === 'article') {
        $article_key = "071f2dcd4d4d36bc6972b9ff31dad63f:10:67107182";
        $search_base = "http://api.nytimes.com/svc/";
        $geo_search = "semantic/v2/geocodes";
        $article_search = "search/v1/article";
        $query_string = "geo_facet:[".$geo_location."]";
        $article_search_string = $search_base . $article_search . "?api-key=" . $article_key . "&query=" . urlencode($query_string) . "&format=json";
    }
    
    $request = file_get_contents($article_search_string);
    echo $request;
    
?>
