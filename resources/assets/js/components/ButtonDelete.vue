<template>
  <button @click="hapus(url)" class="btn btn-sm btn-danger">Hapus</button>
</template>

<script>
export default {
  props: ['url'],
  methods: {
    hapus(link){
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
    },
  },
}
</script>
