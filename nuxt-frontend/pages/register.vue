<template>
    <div
        class="d-flex justify-content-center flex-column align-items-center vh-100"
    >
        <h3 class="text-center mb-3">Registracija</h3>
        <form class="border p-5 rounded col-12 col-lg-4 shadow-lg">
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control"
                        id="floatingInputGroup1"
                        placeholder="Username"
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
