
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


$(".quintityID").on("change",function(){
    var addedQuantity = $(this).val()-$(this).data('val');
    $(this).data('val', $(this).val());

    if($(this).val() <= 0){
        $("#pr-"+ $(this).data("id")).remove();
        $.ajax({
            method: 'POST', // Type of response and matches what we said in the route
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, 
            url: '/shoppingcart/destroy', // This is the url we gave in the route
            data: {
                'id' : $(this).data('id'), 
                'quantity' : addedQuantity,
                'productTtl' : $(this).data('productTtl')
            }
        }).done(function(data){
           window.location = window.location;
        });
    }

    $.ajax({
        method: 'POST', // Type of response and matches what we said in the route
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, 
        url: '/shoppingcart/update', // This is the url we gave in the route
        data: {
            'id' : $(this).data('id'), 
            'quantity' : addedQuantity,
            'productTtl' : $(this).data('productTtl')
        }
    }).done(function(data){
       window.location = window.location;
    });
}
);
