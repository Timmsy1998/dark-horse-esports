<template>
    <div class="container text-center">
        <i class="fas fa-exclamation-triangle fa-5x mt-5"></i>
        <h1 class="mt-4">Maintenance Mode</h1>
        <p class="lead">Our website is currently undergoing scheduled maintenance. We should be back shortly. Thank you
            for your patience.</p>
        <div class="input-group mb-3 mt-3">
            <input type="text" class="form-control" placeholder="Enter Beta Code" v-model="betaCode">
            <button class="btn btn-secondary" type="button" @click="updateBetaCode">
                <i class="fas fa-key"></i> Submit
            </button>
        </div>
        <button class="btn btn-primary mt-3" @click="refreshPage">
            <i class="fas fa-redo"></i> Refresh Page
        </button>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { useStore } from 'vuex'
import { useRouter } from 'vue-router'

const store = useStore()
const router = useRouter()
const betaCode = ref('')

const updateBetaCode = () => {
    store.commit('updateBetaCode', betaCode.value)
    if (store.state.betaCode === import.meta.env.VITE_BETA_CODE) {
        router.push('/home')
    }
}

const refreshPage = () => {
    location.reload()
}
</script>

<style scoped>
.container {
    max-width: 600px;
    margin: auto;
}
</style>