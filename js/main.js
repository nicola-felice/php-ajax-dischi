var app = new Vue({
  el: '#app',
  data: {
    albumsList: null,
  },
  methods: {
    async getAlbumData() {
      let res = await axios.get('http://localhost/esercizi_php/php-ajax-dischi/api/index.php');
      this.albumsList = res.data;
    }
  },
  created() {
    this.getAlbumData();
  }
})