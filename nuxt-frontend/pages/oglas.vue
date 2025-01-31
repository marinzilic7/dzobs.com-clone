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

    <Recenzije />

    <!-- Tipovi oglasa -->

    <div class="container mt-lg-5">
        <div class="row">
            <div class="d-flex flex-column align-items-center mt-5">
                <div class="col-12 col-lg-8">
                    <h3>Odaberite tip oglasa</h3>
                </div>
                <div class="premium-oglas  rounded ps-3 pe-3 pt-4 pb-2 col-12 col-lg-8 mt-4">
                    <div class="oglas-items-1">
                        <h5>Premium oglas u boji</h5>
                        <div class="d-flex justify-content-between">
                            <p>
                                Prvi u redu prikazivanja. <span class="fw-bold">3 x veća vidljivost</span> u
                                odnosu na standardni oglas.
                            </p>
                            <p class="fw-bold">300 KM</p>
                        </div>
                        <p>Pogledaj primjer</p>
                    </div>
                </div>
                <div class="border ps-3 pe-3 pt-4 pb-2 col-12 col-lg-8 mt-4">
                    <div class="oglas-items-2">
                        <h5 class="text-muted">Premium oglas</h5>
                        <div class="d-flex justify-content-between">
                            <p>
                                Prvi u redu prikazivanja. <span class="fw-bold">2 x veća vidljivost</span> u
                                odnosu na standardni oglas.
                            </p>
                            <p class="fw-bold">200 KM</p>
                        </div>
                        <p>Pogledaj primjer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script setup>
import Navbar from "~/components/Navbar.vue";
import Recenzije from "~/components/Recenzije.vue";
</script>

<style scoped>
.container-fluid {
    background-color: #f3f5fe;
    padding: 7rem;
}

.oglas-description {
    line-height: 10px;
}

.premium-oglas{
    border:1px solid #0160fe;
}

.oglas-items-1{
    line-height: 1;
    color:#0160fe;
}

.oglas-items-1 h5{
    font-weight: 700;
}

.oglas-items-2{
    line-height: 1;
    color:grey;
}

.oglas-items-2 h5{
    font-weight: 700;
}



@media screen and (max-width: 900px) {
    .oglas-description {
        line-height: 1.6;
        width: 100%;
    }
    .container-fluid {
        padding: 3rem;
    }

    .oglas-items-1 h5{
        font-size: 18px;
    }

    .oglas-items-1 p:first-child{
        font-size: 14px;
        width: 30ch;

    }

    .oglas-items-2 h5{
        font-size: 18px;
    }

    .oglas-items-2 p:first-child{
        font-size: 14px;
        width: 30ch;

    }


}

</style>
