const { createApp } = Vue;

createApp({
    data() {
        return {
            //path di server.php rispetto ad index
            apiUrl: './server.php',
            discs: [
                // 'Title',
                // 'Artist',
                // 'Released',
                // 'Img'
            ],

        }
    },
    
    methods: {
        getDiscs() {
            //il metodo deve far arrivare dati tramite richiesta axios
            axios.get(this.apiUrl)
            .then((response) => {
                this.discs = response.data;
                console.log(response.data);
            });
        }
    },

    created() {
        this.getDiscs();
    }

}).mount('#app');