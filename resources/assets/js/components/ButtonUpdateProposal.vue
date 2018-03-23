<template>
  <button @click="update(url)" type="button" class="btn btn-sm btn-success">Update</button>
</template>

<script>
export default {
  props: ['url'],
  methods: {
    update(link){
      window.location = link;
    }
  },
}
</script>
