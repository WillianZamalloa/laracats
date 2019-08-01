
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    created() {
        this.getBreeds();
    },
    data: {
        breeds: [],
        newName: '',
        errors: [],
        fillbreed: {'id': '', 'name': ''}
    },
    methods: {
        getBreeds: function(){
            var urlBreeds = 'breed';
            axios.get(urlBreeds).then(response => {
                this.breeds = response.data;
            });
        },
        editBreed: function(breed){
            this.fillbreed.id   = breed.id;
			this.fillbreed.name = breed.name;
			$('#modal-edit').modal('show');
        },
        updateBreed: function(id) {
			var url = 'breed/' + id;
			axios.put(url, this.fillbreed).then(response => {
				this.getBreeds();
				this.fillbreed = {'id': '', 'name': ''};
				this.errors	  = [];
				$('#modal-edit').modal('hide');
			}).catch(error => {
				this.errors = 'Corrija para poder editar'
			});
		},
        deleteBreed: function(breed){
            var url = 'breed/' + breed.id;
            axios.delete(url ).then(response => {
                this.getBreeds();
            });
        },
        createBreed: function(){
            var url = 'breed';
            axios.post(url, {
                name: this.newName
            }).then(response => {
                this.getBreeds();
                this.newName = '';
                $('#modal-create').modal('hide');
            }).catch( error => {
                this.errors = error.response.data;
            });
        }
    }
});
