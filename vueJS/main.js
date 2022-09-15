var app = new Vue ({
    el: '#app',
    data: {
      myData: 'Hello Vue!'
    },

    created: function() {

        axios.get('http://localhost/php-ajax-dischi/vueJS/newData.php')
        .then(response => {
            console.log(response)
            this.myData = response.data
        })
    },

    methods: {

        myNewFunction(ok){

            console.log('we')
        }
    }

  })