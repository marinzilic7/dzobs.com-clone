
<script setup>

import axios from "axios";
import { useRouter } from 'vue-router'
const email = ref("");
const password = ref("");
const router = useRouter();
const login = async () => {
    try {
        const Data = {
            email: email.value,
            password: password.value,
        };

        const response = await axios.post(
            "http://localhost:8000/api/login",
            Data
        );
           //NAKON PRIJAVE IDE NA / PAGE
           router.push('/')
        console.log(response.data.message);
        successToast(response.data.message);
        localStorage.setItem('token', response.data.token);
    } catch (error) {
        console.log(error);
        errorToast("Greška prilikom prijave");
    }
}


</script>


<template>
    <div
        class="d-flex justify-content-center flex-column align-items-center vh-100"
    >
        <h3 class="text-center mb-3">Prijava</h3>
        <form class="border p-5 rounded col-12 col-lg-4 shadow-lg" @submit.prevent="login()">
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input
                        type="email"
                        class="form-control"
                        id="floatingInputGroup1"
                        placeholder="Username"
                        autocomplete="off"
                        v-model = "email"
                    />
                    <label for="floatingInputGroup1">Email adresa</label>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input
                        type="password"
                        class="form-control"
                        id="floatingInputGroup2"
                        placeholder="Username"
                        autocomplete="off"
                        v-model = "password"
                    />
                    <label for="floatingInputGroup1">Lozinka </label>
                </div>
            </div>
            <button type="submit" class="login-btn btn btn-primary w-100">
                Prijava
            </button>
            <p class="text-center mt-3">
                Nemate račun? Registrirajte se
                <NuxtLink to="/register">ovdje</NuxtLink>
            </p>
            <p class="text-center">
                <NuxtLink class="index mt-3 text-center" to="/"
                    >Povratak na početnu stranicu</NuxtLink
                >
            </p>
        </form>
    </div>
</template>

<script>
export default {
    name: "Login",
};
</script>

<style scoped>
.login-btn {
    background-color: #0160fe;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
}
</style>
