<template>
  <div>
    <h1>I am the walrus.</h1>
    {{moose}}
  </div>
</template>

<script>
    export default {
        data(){
          return{
            current_moose:1,
            moose:null,
          }
        },
        created() {
            axios.get(`/api/moose/${this.current_moose}`)
            .then(res => {this.moose = res.data});
        }
    }
</script>