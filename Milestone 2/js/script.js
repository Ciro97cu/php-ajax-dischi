const app = new Vue({
    el: "#app",
    data: {
        arrayDisc: [],
        arrayGenre: [],
        valueGenre: "All",
    },
    methods: {
        displayGenre: function (e) {
            this.valueGenre = e.target.value;
        }
    },
    mounted() {
        axios.get("http://localhost/php-ajax-dischi/Milestone%202/php/data.php").then(response => {
            this.arrayDisc = response.data;

            this.arrayDisc.filter((item) => {
                if (!this.arrayGenre.includes(item.genre)) {
                    this.arrayGenre.push(item.genre);
                }
            });
            this.arrayGenre.unshift("All");
        })
    },
    computed: {
        displaybyfilters: function () {
            if (this.valueGenre === "All") {
                return this.arrayDisc
            }
            return this.arrayDisc.filter((item) => item.genre === this.valueGenre);
        },
    },
})