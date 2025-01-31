<template>
    <Navbar />
    <div
        class="container-fluid d-flex flex-column align-items-center justify-content-center"
    >
        <h1 class="heading">Objavi oglas</h1>

        <div class="row text-center">
            <div class="col-12">
                <p class="description col-12 mt-lg-5 mt-4 text-muted">
                    Dzobs.com posjećuje
                    <span class="text-muted fw-bold"
                        >preko 10.000 IT profesionalaca</span
                    >
                    iz BiH svaki mjesec.
                </p>
                <p class="text-muted">
                    Objavite premium oglas i privucite pažnju top kandidata.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 d-flex justify-content-center">
                <div
                    class="items d-flex ps-5 pe-5 pt-3 pb-3 align-items-center rounded gap-3"
                >
                    <div>
                        <img
                            src="~/assets/images/logo.png"
                            alt="slika"
                            height="50px"
                            width="50px"
                        />
                    </div>
                    <div class="job-rece mt-3">
                        <p class="fw-bold">
                            "Za 3 dana smo dobili preko 40 prijava za Senior PHP
                            poziciju.Prezadovoljni smo rezultatom. "
                        </p>
                        <span class="fw-bold">Iva, HR Manager @Bay42</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-4 d-flex justify-content-center">
                <div
                    class="items-2 d-flex ps-5 pe-5 pt-3 pb-3 align-items-center rounded gap-3"
                >
                    <div>
                        <img
                            src="~/assets/images/logo.png"
                            alt="slika"
                            height="50px"
                            width="50px"
                        />
                    </div>
                    <div class="job-rece mt-3">
                        <p class="fw-bold">
                            "Tražili smo PM poziciju i Dzobs je dao daleko bolje
                            rezultate u odnosu na LinkedIn. "
                        </p>
                        <span class="fw-bold">Peter, CTO @ Sparwk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import Navbar from "~/components/Navbar.vue";
</script>

<style scoped>
.container-fluid {
    background-color: #f3f5fe;
    padding: 7rem;
}

.oglas-description {
    line-height: 10px;
}

@media screen and (max-width: 900px) {
    .oglas-description {
        line-height: 1.6;
        width: 100%;
    }
    .container-fluid {
        padding: 3rem;
    }
}

.items {
    background-color: #f0fdf4;
    border: 1px solid #bbf7d0;
}

.items-2 {
    background-color: #eff6ff;
    border: 1px solid #bfdbfe;
}

.job-rece p {
    max-width: 60ch;
    font-size: 18px;
}

.job-rece span {
    font-size: 14px;
    color: #9596a5;
}

@media screen and (max-width: 900px) {
    .job-rece p {
        font-size: 14px;
    }
    .job-rece span {
        font-size: 12px;
    }
}
</style>
