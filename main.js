const { createApp } = Vue;


createApp({
    data(){
        return{
            title: 'ToBoList',
            apiUrl: 'server.php',
            list: []
        }
    },
    methods: {
        getApi(){
            axios.get(this.apiUrl)
                .then(res => {
                    this.list = res.data;
                })
            
        }
    },
    mounted(){
        this.getApi();
    },
}).mount('#app');
