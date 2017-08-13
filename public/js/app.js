var app = new Vue({
    el: '#fav',
    data : {
        message : ''
    },
    props: ['favaction'],
    methods: {
        addToFavorites: function (id, type) {
            this.$http.post('/favorites/add', {id : id, type:type}).then(function(resp) {
                var action = resp.data.action;

                this.message = action === 'added' ? 'Remove from favorites' : 'Add to favorites';


                console.log(resp, action);
            }, function(err) {
                console.log('some error');
            })
        }
    }
});
