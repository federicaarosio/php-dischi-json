/* ricordarsi di inserire nel body nell'html: <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script> */
const { createApp } = Vue;

createApp({
    data() {
        return {
            //server rispetto ad index
            apiUrl: './server.php',
            discsList: [
                'Title',
                'Artist',
                'Released',
                'Img'
            ],
        }
    },
}).mount('#app');