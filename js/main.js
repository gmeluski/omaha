function hi_omaha(geography_data) {

    for (var key in geography_data) {
        if (geography_data.hasOwnProperty(key)) {
            var latitude = geography_data[key].geocode.latitude;
            var longitude = geography_data[key].geocode.longitude;
            
        }
    }

}
