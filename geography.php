<?php 
    $request_type = $_GET['type'];
    $geo_location = strtoupper($_GET['geo_location']);
    
    $search_base = "http://api.nytimes.com/svc/";

    if ($request_type === 'article') {
        $article_key = "071f2dcd4d4d36bc6972b9ff31dad63f:10:67107182";
        $article_search = "search/v1/article";
        $query_string = "geo_facet:[".$geo_location."]";
        $article_search_string = $search_base . $article_search . "?api-key=" . $article_key . "&query=" . urlencode($query_string) . "&format=json";
    }
    
    $request = file_get_contents($article_search_string);
    
    
    $geography_key = "2f5910b2d12a5cb04004db0cd5dd42a0:9:67107182";
    $geo_search = "semantic/v2/geocodes/query.json";
    $coordinates = "-37.7833,144.9667";
    
    $geography_search_string = $search_base . $geo_search . "?api-key=" . $geography_key . "&nearby=" . urlencode($coordinates);
    $geography_request = file_get_contents($geography_search_string);    
    
     
    
    echo $geography_request;
    
?>
