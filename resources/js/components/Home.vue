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
            moose:null,
          }
        },
        created() {
            axios.get('/api/moose/1')
            .then(res => {this.moose = res.data});
        }
    }
</script>