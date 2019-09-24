<template>
  <div>
    <h1>Click the moose.</h1>
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
            axios.get(`/api/user`)
            .then(res => {this.moose = res.data});
        }
    }
</script>