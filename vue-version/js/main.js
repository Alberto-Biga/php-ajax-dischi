var app = new Vue({
    el: '#app',
    data: {
        dischi:[]    
    },
    created(){
        axios.get( 'http://localhost/php-boolean/php-ajax-dischi/vue-version/api/dischi.php' )
        .then( (res)=>{
            // console.log(res.data);
            this.dischi = res.data;
        } )
    }
})