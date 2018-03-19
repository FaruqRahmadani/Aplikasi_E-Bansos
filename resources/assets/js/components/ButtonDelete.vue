<template>
  <button @click="hapus(url, jumlah)" class="btn btn-sm btn-danger">Hapus</button>
</template>

<script>
export default {
  props: ['url', 'jumlah'],
  methods: {
    hapus(link,jumlah){
      if (jumlah == 0) {
        swal({
          title   : "Hapus",
          text    : "Yakin Ingin Hapus Data?",
          icon    : "warning",
          buttons : [
            "Batal",
            "Hapus",
          ],
        })
        .then((hapus) => {
          if (hapus) {
            swal({
              title  : "Berhasil",
              text   : "Data Akan dihapus",
              icon   : "success",
              timer  : 2500,
            });
            window.location = link;
          } else {
            swal({
              title  : "Batal",
              text   : "Data Batal dihapus",
              icon   : "info",
              timer  : 2500,
            })
          }
        });
      }else{
        swal({
          title   : "Hapus",
          text    : "Data tidak bisa dihapus karena ada data relasi",
          icon    : "warning",
          buttons : "OK",
        })
      }
    },
  },
}
</script>
