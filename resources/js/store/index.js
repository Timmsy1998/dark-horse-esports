import { createStore } from 'vuex'

export default createStore({
  state: {
    uniqueKey: import.meta.env.VITE_INTERNAL_API_KEY
  },
  mutations: {},
  actions: {},
  modules: {}
})
