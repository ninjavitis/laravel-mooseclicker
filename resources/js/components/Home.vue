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
            moose:null,
          }
        },
        created() {
            axios.get(`/api/myMoose`)
            .then(res => this.moose = res.data)
            .catch(err => console.log(err));
        }
    }
</script>