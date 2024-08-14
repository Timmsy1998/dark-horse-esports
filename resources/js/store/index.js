import { createStore } from 'vuex'
import createPersistedState from 'vuex-persistedstate'

export default createStore({
  state: {
    uniqueKey: import.meta.env.VITE_INTERNAL_API_KEY,
    betaCode: null
  },
  mutations: {
    updateBetaCode(state, betaCode) {
      state.betaCode = betaCode
    }
  },
  actions: {},
  modules: {},
  plugins: [createPersistedState()]
})
