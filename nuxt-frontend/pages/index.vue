<script setup>
import Navbar from "~/components/Navbar.vue";
import Heading from "~/components/Heading.vue";
import axios from "axios";
import { errorToast } from "~/utils/toast";

const oglasi = ref([]);
const showSpinner = ref(true);

const dohvatiOglase = async () => {
    try {
        const response = await axios.get(
            "http://localhost:8000/api/dohvatiOglase"
        );
        console.log(response.data);
        oglasi.value = response.data;
    } catch (error) {
        console.log("Greška prilikom dohvaćanja oglasa");
        errorToast("Greška prilikom dohvaćanja oglasa");
    } finally{
        showSpinner.value = false;
    }
};

onBeforeMount(() => {
    dohvatiOglase();
});
</script>

<template>
    <div v-if="showSpinner" class="position-absolute top-50 start-50 z-3 ">
        <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div v-else>
        <div>
            <Navbar />
        </div>
        <div>
            <Heading />
        </div>
        <div class="container d-flex justify-content-center">
            <div
                class="items col-lg-10 col-12 search-items d-flex align-items-center border justify-content-center p-4"
            >
                <select class="form-select" aria-label="Default select example">
                    <option selected>Lokacija</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Iskustvo</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Ključna riječ, Npr. React</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <button class="btn btn-primary">Pretraži</button>
            </div>
        </div>


        <div
            class="container d-flex flex-column gap-4 align-items-center justify-content-center"
        >
            <div class="col-lg-10 col-12">
                <h3 class="text-start">Oglasi</h3>
            </div>
            <div
                v-for="oglas in oglasi"
                :key="oglas.id"
                class="row main-item gap-4 p-4 col-lg-10 col-12"
            >

                <div class="d-flex flex-wrap">
                    <div
                        class="d-flex align-items-center gap-4 col-12 col-md-5 col-lg-7 col-sm-12"
                    >
                        <img
                            class="img-fluid"
                            src="~/assets/images/logo.png"
                            alt="logo"
                            srcset=""
                            height="50px"
                            width="50px"
                        />
                        <div>
                            <h5 class="naslov">Backend developer</h5>
                            <p class="naslov text-muted">Wunder Mobility</p>
                        </div>
                    </div>
                    <div
                        class="oglas-items d-flex gap-5 col-12 col-md-7 col-lg-5"
                    >
                        <div>
                            <p id="first-child">Lokacija</p>
                            <p id="second-child">Banja Luka</p>
                        </div>
                        <div>
                            <p id="first-child">Iskustvo</p>
                            <p id="second-child">Senior</p>
                        </div>
                        <div>
                            <p id="first-child">Rok prijave</p>
                            <p id="second-child">još 27 dana</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
select.form-select {
    margin: 1rem;
    border-radius: 20px;
    padding: 15px;
}

.btn {
    border-radius: 20px;
    padding: 15px;
}

.search-items {
    position: relative;
    top: -80px;
    background-color: #ffffff;
    border-radius: 10px;
}

.main-item {
    border-radius: 20px;
    border: 1px solid #a0a0a0;
    transition: all ease-in-out 0.2s;
}

.main-item:hover {
    border: 1px solid #0160fe;
    transform: translate(0, -5px);
    cursor: pointer;
}

#first-child {
    font-size: 14px;
    color: #a0a0a0;
}

#second-child {
    font-size: 16px;
    font-weight: 500;
}

@media (max-width: 768px) {
    .search-items {
        width: 100% !important;
        flex-direction: column;
        align-items: center;
    }

    .btn {
        width: 100%;
    }

    .oglas-items {
        display: flex;
        justify-content: space-evenly;
    }

    #first-child {
        font-size: 12px;
    }
    #second-child {
        font-size: 13px;
    }

    .naslov {
        font-size: 14px;
    }

    .img-fluid {
        width: 30px;
        height: 30px;
    }
}
</style>
