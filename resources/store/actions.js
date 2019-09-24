let actions = {
  fetchPosts({commit}) {
      axios.get('/api/mooses')
          .then(res => {
              commit('FETCH_MOOSES', res.data)
          }).catch(err => {
          console.log(err)
      })
  },
}

export default actions