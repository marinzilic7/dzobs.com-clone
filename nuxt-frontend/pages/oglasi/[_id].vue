<script setup>
import Navbar from "~/components/Navbar.vue";
import axios from "axios";
import { useRoute } from "vue-router";

const route = useRoute();
const oglasId = ref(route.params._id);
const singleOglas = ref({});
const loader = ref(true);

const getOglas = async () => {
    try {
        const response = await axios.get(
            `http://localhost:8000/api/oglas/${oglasId.value}`
        );

        singleOglas.value = response.data;
        console.log("Ovo je single oglas", singleOglas.value);
    } catch (error) {
        console.log("Greška prilikom dohvaćanja oglasa");
    } finally {
        loader.value = false;
    }
};

onMounted(() => {
    getOglas();
});
</script>

<template>
    <div
        v-if="loader"
        class="d-flex justify-content-center align-items-center"
        style="height: 100vh"
    >
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div v-else>
        <Navbar />

        <div class="main p-5">
            <div class="container">
                <div class="row">
                    <div
                        class="d-flex flex-column align-items-center flex-wrap"
                    >
                        <div class="d-flex justify-content-center">
                            <img
                                src="~/assets/images/logo.png"
                                alt=""
                                height="50px"
                                width="50px"
                            />
                        </div>

                        <h4 class="primeHead mt-3 text-center">
                            {{ singleOglas.kompanija }}
                        </h4>
                        <h2 class="mt-3 fw-bold text-center">
                            {{ singleOglas.naziv_pozicije }}
                        </h2>
                        <p class="text-center">{{ singleOglas.lokacija }}</p>
                        <div
                            class="tehno-items d-flex text-center text-muted text-decoration-underline mt-3 gap-3"
                        >
                            <p>Java</p>
                            <p>Kafka</p>
                            <p>Kubernetes</p>
                            <p>PostgreSQL</p>
                            <p>Spring</p>
                        </div>
                        <div class="bottom-items col-12 col-lg-9">
                            <div
                                class="bottom-items-pro d-flex mt-5 text-center d-flex justify-content-evenly"
                            >
                                <div class="class-0 d-flex flex-column">
                                    <p class="class-1 text-muted">Iskustvo</p>
                                    <p class="class-2">
                                        {{ singleOglas.iskustvo }}
                                    </p>
                                </div>
                                <div class="class-0 d-flex flex-column">
                                    <p class="class-two text-muted">Angažman</p>
                                    <p class="class-2">Puno radno vrijeme</p>
                                </div>
                                <div class="class-0 d-flex flex-column">
                                    <p class="class-1 text-muted">
                                        Rok prijave
                                    </p>
                                    <p class="class-2">Još 20 dana</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.main {
    background-color: #f3f5fe;
}

.primeHead {
    color: #0160fe;
}

.class-0 {
    line-height: 15px;
}
.class-1 {
    font-size: 14px;
    display: inline-flex;
    align-items: center;
}

.class-1::before {
    font-family: "bootstrap-icons"; /* Postavljamo font iz bootstrap-icons */
    content: "\F103"; /* Unicode za ikonu "check-circle" */
    color: grey;
    margin-right: 5px;
}

.class-two {
    font-size: 14px;
    display: inline-flex;
    align-items: center;
}

.class-two::before {
    font-family: "bootstrap-icons";
    content: "\F293";
    color: grey;
    margin-right: 5px;
}

.class-2 {
    font-size: 16px;
}

@media screen and (max-width: 768px) {
    .main {
        padding: 30px 0px 30px 0px !important;
    }
    .class-1 {
        font-size: 11px;
    }

    .class-two {
        font-size: 11px;
    }

    .class-2 {
        font-size: 12px !important;
    }

    .tehno-items {
        font-size: 13px;
    }

    .bottom-items-pro {
        display: flex;
        flex-wrap: wrap;
    }
}
</style>
