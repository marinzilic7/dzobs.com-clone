<script setup>
import Navbar from "~/components/Navbar.vue";
import Heading from "~/components/Heading.vue";
import Company from "~/components/Company.vue";
import axios from "axios";
import { errorToast } from "~/utils/toast";
import { useRouter } from "vue-router";
import companies from "~/companies/companies.json";

const router = useRouter();
const oglasi = ref([]);
const showSpinner = ref(true);
const user = ref();
const company = companies;

const dohvatiOglase = async () => {
    showSpinner.value = true;
    try {
        const response = await axios.get(
            "http://localhost:8000/api/dohvatiOglase"
        );
        console.log(response.data);
        oglasi.value = response.data;
    } catch (error) {
        console.log("Greška prilikom dohvaćanja oglasa");
        errorToast("Greška prilikom dohvaćanja oglasa");
    } finally {
        showSpinner.value = false;
    }
};

const getUserData = async () => {
    showSpinner.value = true;
    try {
        const response = await axios.get("http://localhost:8000/api/getUser", {
            headers: {
                Authorization: `Bearer ${localStorage.getItem("token")}`,
            },
        });
        user.value = response.data;
        console.log("Ovo je korisnik", user.value);
    } catch (error) {
        errorToast("Greška prilikom dohvaćanja korisnika");
        console.log("Greška prilikom dohvaćanja korisnika");
    } finally {
        showSpinner.value = false;
    }
};

const logout = async () => {
    try {
        await axios.post(
            "http://localhost:8000/api/logout",
            {},
            {
                headers: {
                    Authorization: `Bearer ${localStorage.getItem("token")}`,
                },
            }
        );
        localStorage.removeItem("token");
        router.push("/login");
    } catch (error) {
        errorToast("Greška prilikom odjave");
    }
};

onBeforeMount(() => {
    dohvatiOglase();
    getUserData();
});
</script>

<template>
    <div v-if="showSpinner" class="position-absolute top-50 start-50 z-3">
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

            <NuxtLink
                data-aos="fade-right"
                v-for="oglas in oglasi"
                :key="oglas.id"
                class="row main-item gap-4 p-4 col-lg-10 col-12 text-decoration-none text-dark"
                :class="{
                    'premium-oglas': oglas.tip_oglasa === 'Premium',
                    'standard-oglas': oglas.tip_oglasa === 'Standard',
                    '': oglas.featured === 'Običan',
                }"
                :to="`/oglasi/${oglas.id}`"
            >
                <div class="d-flex flex-wrap">
                    <div
                        v-if="oglas.tip_oglasa === 'Premium'"
                        class="tip_oglasa"
                    >
                        <p>{{ oglas.tip_oglasa }}</p>
                    </div>
                    <div v-if="oglas.lokacija === 'Remote'" class="remote">
                        <p>remote</p>
                    </div>
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
                            <h5 class="naslov">{{ oglas.naziv_pozicije }}</h5>
                            <p class="naslov text-muted">
                                {{ oglas.kompanija }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="oglas-items d-flex gap-5 col-12 col-md-7 col-lg-5"
                    >
                        <div>
                            <p id="first-child">Lokacija</p>
                            <p id="second-child">{{ oglas.lokacija }}</p>
                        </div>
                        <div>
                            <p id="first-child">Iskustvo</p>
                            <p id="second-child">{{ oglas.iskustvo }}</p>
                        </div>
                        <div>
                            <p id="first-child">Rok prijave</p>
                            <p id="second-child">još 27 dana</p>
                        </div>
                    </div>
                </div>
            </NuxtLink>
        </div>
        <Company />
        <Contact />
    </div>
    <!-- <div class="d-flex justify-content-center">
        <button class="btn btn-danger mt-5" @click="logout()">Odjava</button>
    </div> -->
</template>

<style scoped>
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

.tip_oglasa {
    position: absolute;
    right: 0;
    top: 0;
    font-size: 10px;
}

.tip_oglasa p {
    background-color: #ebb304;
    color: #fff;
    padding: 5px;
    border-top-right-radius: 20px 20px;
}

.premium-oglas {
    background-color: #feefc1;
}

.standard-oglas {
    background-color: #fffefa;
    border: 1px solid #feefc1 !important;
}

.remote {
    position: absolute;
    left: -10px;
    top: -10px;
    font-size: 10px;
}

.remote p {
    background-color: #333333;
    opacity: 0.8;
    color: #fff;
    padding: 5px;
    border-radius: 20px;
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

    .company-list {
        height: auto;
        padding-left: 20px;
        padding-right: 20px;
    }
}
</style>
