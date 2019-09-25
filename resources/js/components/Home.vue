<template>
  <div>
    <h1>Click the moose.</h1>
    <div>
      {{moose}}
      <b-card
        img-src="https://picsum.photos/600/300/?image=25"
        img-alt="Image"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2"
      >
        <b-card-text>
          {{moose.name}}
        </b-card-text>
      </b-card>
    </div>



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