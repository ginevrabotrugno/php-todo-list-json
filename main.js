const { createApp } = Vue;

createApp({
    data(){
        return{
            title: 'ToBoList'
        }
    },
    methods: {

    },
    mounted(){
        console.log('MOUNTED');
    },
}).mount('#app');
