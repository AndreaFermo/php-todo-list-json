const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
        }
    },
    methods: {
        getList() {
            axios.get('server.php').then(response => {
                this.todoList = response.data;
            })
        }
    },
    mounted() {
        this.getList();
    }
}).mount('#app')