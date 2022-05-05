const app = new Vue({
    el: "#app",
    data: {
        arrayDisc: [],
    },
    mounted() {
        axios.get("http://localhost/php-ajax-dischi/Milestone%202/php/data.php").then(response => {
            this.arrayDisc = response.data;
        })
    }
})