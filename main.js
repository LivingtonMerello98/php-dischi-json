const {
    createApp
} = Vue

createApp({
    data() {
        return {
            title: 'albums',
            url: "http://localhost/php-dischi-json/server.php",
            albums: [],
        }
    },
    methods: {
        getAlbums() {
            axios.get(this.url).then((response) => {
                this.albums = response.data
            });
        },
    },
    created() {
        this.getAlbums();
    }
}).mount('#app')