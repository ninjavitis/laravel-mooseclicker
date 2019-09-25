<template>
  <div>
    <h1>Click the moose.</h1>
    <div>
      <b-card
        :title='moose.name'
        :img-src="moose.image"
        img-alt="Image"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2"
      >
        <b-card-text>
          Clicks: {{moose.clicks}}
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