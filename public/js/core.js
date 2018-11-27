let core = {
    baseURI: "http://localhost/Forum/socialirt/public/",
    request: function (url, callback, callbackError, data, allways) {
        let request = $.ajax({
            url: url,
            method: "GET",
            data: data,
            dataType: "html"
        });
        request.done(function (msg) {
            if (typeof callback === "undefined") {
                return 0
            } else {
                return callback(msg);
            }
        });
        request.error(function (jqXHR, textStatus) {
            if (typeof callbackError === "undefined") {
                return 0
            } else {
                return callbackError(textStatus);
            }
        });
        request.always(function () {
            if (typeof allways === "undefined") {
                return 0
            } else {
                return allways();
            }
        })
    }
};
/*

Example::
NB : 'divContainer' is a random dom container...

core.request(core.baseURI + "post/all", function (result) {
    divContainer.innerHTML = result // an example of insertion
}, function (error) {
    divContainer.innerHTML = "check internet connection"
});

*/
