<script setup>
import { errorToast } from "~/utils/toast";
import { successToast } from "~/utils/toast";
import axios from "axios";

const firstName = ref("");
const lastName = ref("");
const email = ref("");
const password = ref("");


const register = async () => {
    try {
        const Data = {
            firstName: firstName.value,
            lastName: lastName.value,
            email: email.value,
            password: password.value,
        };

        const response = await axios.post(
            "http://localhost:8000/api/register",
            Data
        );

        console.log(response.data.message);
        successToast(response.data.message);
    } catch (error) {
        console.log(error);
        errorToast("Greška prilikom registracije");
    }
};


</script>

<template>
    <div
        class="d-flex justify-content-center flex-column align-items-center vh-100"
    >
        <h3 class="text-center mb-3">Registracija</h3>
        <form
            class="border p-5 rounded col-12 col-lg-4 shadow-lg"
            @submit.prevent="register()"
        >
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control"
                        id="floatingInputGroup1"
                        placeholder="Username"
                        v-model="firstName"
                    />
                    <label for="floatingInputGroup1">Ime</label>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control"
                        id="floatingInputGroup2"
                        placeholder="Username"
                        v-model="lastName"
                    />
                    <label for="floatingInputGroup1">Prezime</label>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input
                        type="email"
                        class="form-control"
                        id="floatingInputGroup3"
                        placeholder="Username"
                        autocomplete="off"
                        v-model="email"
                    />
                    <label for="floatingInputGroup1">Email adresa</label>
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input
                        type="password"
                        class="form-control"
                        id="floatingInputGroup4"
                        placeholder="Username"
                        autocomplete="off"
                        v-model="password"
                    />
                    <label for="floatingInputGroup1">Lozinka </label>
                </div>
            </div>
            <button type="submit" class="reg-btn btn btn-primary w-100">
                Registracija
            </button>
            <p class="text-center mt-3">
                Imate račun? Prijavite se <NuxtLink to="/login">ovdje</NuxtLink>
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
    name: "Register",
};
</script>

<style scoped>
.reg-btn {
    background-color: #0160fe;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
}
</style>
