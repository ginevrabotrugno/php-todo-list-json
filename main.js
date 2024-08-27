const { createApp } = Vue;


createApp({
    data(){
        return{
            title: 'ToBoList',
            apiUrl: 'server.php',
            list: [],
            newTask: {
                taskName: '',
                description: ''
            }
        }
    },
    methods: {
        getApi(){
            axios.get(this.apiUrl)
                .then(res => {
                    this.list = res.data;
                })
        },
        addTask(){
            
            // const data = {
            //     taskName: this.newTask.taskName,
            //     description: this.newTask.description
            // };
            
            // axios.post(this.apiUrl, data, {
            //     headers: {'Content-Type': 'multipart/form-data'}
            // }).then(res => {
            //     this.list = res.data;
            // })

            const data = new FormData();
            data.append('taskName', this.newTask.taskName);
            data.append('description', this.newTask.description);

            axios.post(this.apiUrl, data)
                .then(res => {
                    this.list = res.data;
                })

            
            
        }
    },
    mounted(){
        this.getApi();
    },
}).mount('#app');
