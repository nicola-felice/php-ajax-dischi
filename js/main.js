var app = new Vue({
  el: '#app',
  data: {
    albumsList: null,
    genresList: null,
    genreSelected: "",
    queries: {},
  },
  watch: {
    genreSelected(val) {
      this.queries.genre = val;
      this.getAlbumData();
    }
  },
  methods: {
    async getAlbumData() {
      let res = await axios.get('http://localhost/esercizi_php/php-ajax-dischi/api/index.php', {
        params: this.queries
      });
      this.albumsList = res.data;
    },
    async getGenresList() {
      let res = await axios.get('http://localhost/esercizi_php/php-ajax-dischi/api/index.php', {
        params: {
          genresList: 1,
        }
      });
      this.genresList = res.data;
    }
  },
  created() {
    this.getAlbumData();
    this.getGenresList();
  }
})