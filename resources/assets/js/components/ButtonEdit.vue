<template>
  <button @click="edit(url)" type="button" class="btn btn-sm btn-warning">Edit</button>
</template>

<script>
export default {
  props: ['url'],
  methods: {
    edit(link){
      window.location = link;
    }
  },
}
</script>
