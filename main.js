const {
    createApp
} = Vue

createApp({
    data() {
        return {
            title: 'albums',
            albums: [
                {
                    image: "",
                    album: "Dark Side of the Moon",
                    location: "Abbey Road Studios",
                    band: "Pink Floyd",
                    year: 1973
                },
                {
                    image: "",
                    album: "Abbey Road",
                    location: "Abbey Road Studios",
                    band: "The Beatles",
                    year: 1969
                },
                {
                    image: "",
                    album: "Back in Black",
                    location: "Compass Point Studios",
                    band: "AC/DC",
                    year: 1980
                },
                {
                    image: "",
                    album: "Thriller",
                    location: "Westlake Recording Studios",
                    band: "Michael Jackson",
                    year: 1982
                },
                {
                    image: "",
                    album: "Rumours",
                    location: "Record Plant",
                    band: "Fleetwood Mac",
                    year: 1977
                },
                {
                    image: "",
                    album: "Led Zeppelin IV",
                    location: "Headley Grange",
                    band: "Led Zeppelin",
                    year: 1971
                },
                {
                    image: "",
                    album: "The Wall",
                    location: "Super Bear Studios",
                    band: "Pink Floyd",
                    year: 1979
                },
                {
                    image: "",
                    album: "Hotel California",
                    location: "Criteria Studios",
                    band: "Eagles",
                    year: 1976
                }
            ]
        }
    }
}).mount('#app')