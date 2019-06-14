import swal from 'sweetalert';

Vue.component('logout', require('./../components/ButtonLogout.vue'));
Vue.component('form-pemohon', require('./../components/FormPemohon.vue'));
Vue.component('form-instansi', require('./../components/FormInstansi.vue'));
Vue.component('form-proposal', require('./../components/FormProposal.vue'));
Vue.component('field-daerah', require('./../components/FieldDaerah.vue'));
Vue.component('field-daerahkeckel', require('./../components/FieldDaerahKecKel.vue'));
Vue.component('button-delete', require('./../components/ButtonDelete.vue'));
Vue.component('button-edit', require('./../components/ButtonEdit.vue'));
Vue.component('button-info', require('./../components/ButtonInfo.vue'));
Vue.component('button-header', require('./../components/ButtonHeader.vue'));
Vue.component('field-daerah-provkota', require('./../components/FieldDaerah-ProvKota.vue'));
Vue.component('button-updateproposal', require('./../components/ButtonUpdateProposal.vue'));

var vm = new Vue({
  el: '#app',
  data: {
    showform: 'Pemohon',
  },
});

window.notif = function (tipe, judul, pesan){
  swal({
    title: judul,
    text: pesan,
    icon: tipe,
    button: "OK",
  });
}

global.vm = vm;

$(document).ready(function() {
  $('#table_id').DataTable();
});
$('#table_id').DataTable({
  language: {
    processing: "Sedang memproses...",
    search: "Cari Data&nbsp&nbsp;:&nbsp",
    lengthMenu: "Tampilkan _MENU_ data",
    info: "(&nbsp Menampilkan _START_ sampai _END_, dari _TOTAL_ data &nbsp)",
    infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
    infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
    infoPostFix: "",
    zeroRecords: "Tidak ditemukan data yang sesuai",
    paginate: {
      previous: "Sebelumnya&nbsp",
      next: "&nbspSelanjutnya",
    }
  },
  rowReorder: {
  selector: 'td:nth-child(2)'
  },
  responsive: true
});
