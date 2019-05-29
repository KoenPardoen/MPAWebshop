function quantity(){
    console.log($this);


    // $.ajax({
    //     method: 'POST', // Type of response and matches what we said in the route
    //     url: '/customer/ajaxupdate', // This is the url we gave in the route
    //     data: {'quentityItem' : quantityItem}, // a JSON object to send back
    //     success: function(response){ // What to do if we succeed
    //         console.log(response); 
    //     },
    //     error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
    //         console.log(JSON.stringify(jqXHR));
    //         console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    //     }
    // });
}
