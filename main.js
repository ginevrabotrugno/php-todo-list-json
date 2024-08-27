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
            if (this.newTask.taskName.length < 3 | this.newTask.description.length < 3) {
                alert('Il titolo e la descrizione devono avere almeno 3 caratteri')
            } else {
                const data = new FormData();
                data.append('taskName', this.newTask.taskName);
                data.append('description', this.newTask.description);
    
                axios.post(this.apiUrl, data)
                    .then(res => {
                        this.list = res.data;
                    })
    
                this.newTask.taskName = '';
                this.newTask.description = '';
            }
        },
        toggleDone(index){
            const data = new FormData();
            data.append('indexToToggle', index);
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
