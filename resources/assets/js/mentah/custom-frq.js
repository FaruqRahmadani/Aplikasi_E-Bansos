import swal from 'sweetalert';

Vue.component('logout', require('./../components/ButtonLogout.vue'));
Vue.component('form-pemohon', require('./../components/FormPemohon.vue'));
Vue.component('form-instansi', require('./../components/FormInstansi.vue'));
Vue.component('form-proposal', require('./../components/FormProposal.vue'));

var vm = new Vue({
  el: '#app',
  data: {
    showform: 'Pemohon',
  },
});

global.vm = vm;
