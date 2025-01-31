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
                <div
                    class="premium-oglas rounded ps-3 pe-3 pt-4 pb-2 col-12 col-lg-8 mt-4"
                >
                    <div class="oglas-items-1">
                        <h5>Premium oglas u boji</h5>
                        <div class="d-flex justify-content-between">
                            <p>
                                Prvi u redu prikazivanja.
                                <span class="fw-bold">3 x veća vidljivost</span>
                                u odnosu na standardni oglas.
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
                                Prvi u redu prikazivanja.
                                <span class="fw-bold">2 x veća vidljivost</span>
                                u odnosu na standardni oglas.
                            </p>
                            <p class="fw-bold">200 KM</p>
                        </div>
                        <p>Pogledaj primjer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FORMA ZA DODAVANJE OGLASA  -->
    <div class="container mt-lg-5">
        <div class="row">
            <div class="d-flex flex-column align-items-center">
                <div class="col-12 col-lg-8">
                    <h5 class="mt-4 mt-lg-1">Sadržaj oglasa</h5>
                    <form class="col-12 mt-lg-5 mt-3">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"
                                >Naziv pozicije</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                            />
                        </div>
                        <label for="flexCheckDefault" class="form-label mt-3"
                            >Iskustvo</label
                        >
                        <div class="d-flex gap-3">
                            <div v-for="(item, index) in array" :key="index">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="flexCheckDefault"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="flexCheckDefault"
                                    >
                                        {{ item }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mt-4">
                            <label for="exampleInputEmail1" class="form-label"
                                >Kompanija</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="exampleInputEmail2"
                                aria-describedby="emailHelp"
                            />
                        </div>
                        <div class="mb-3 mt-4">
                            <label for="exampleInputEmail1" class="form-label"
                                >Lokacija</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="exampleInputEmail3"
                                aria-describedby="emailHelp"
                            />
                        </div>
                        <div class="mb-3 mt-4">
                            <label for="floatingTextarea" class="form-label"
                                >Opis pozicije</label
                            >
                            <textarea
                                class="form-control"
                                id="floatingTextarea"
                                rows="4"
                                cols="50"
                            ></textarea>
                        </div>
                        <div class="mb-3 mt-4">
                            <label for="exampleInputEmail4" class="form-label"
                                >Link ili email za prijavu kandidata</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="exampleInputEmail4"
                                aria-describedby="emailHelp"
                            />
                        </div>
                        <h5 class="mt-4 mt-lg-5">Kontakt osoba</h5>
                        <div class="mb-3 mt-4">
                            <label for="exampleInputEmail6" class="form-label"
                                >Ime</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="exampleInputEmail6"
                                aria-describedby="emailHelp"
                            />
                        </div>
                        <div class="mb-3 mt-4">
                            <label for="exampleInputEmail7" class="form-label"
                                >Email</label
                            >
                            <input
                                type="email"
                                class="form-control"
                                id="exampleInputEmail7"
                                aria-describedby="emailHelp"
                            />
                        </div>
                        <div class="add-oglas d-flex justify-content-center mt-3 mb-4">
                            <button class="btn btn-primary p-3">
                                Pošalji oglas
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="warning">
            <p class="text-center">
                Nakon prijema oglasa, naš tim će pregledati sadržaj i poslati
                vam predračun u roku od 12h.
            </p>
            <p class="text-center">
                Po pismenoj potvrdi predračuna, oglas se objavljuje odmah.
            </p>
            <p class="text-center">
                Uplate su moguće u BAM ili EUR. Ukoliko imate pitanja,
                kontaktirajte nas na
                <span class="text-primary">info@dzobs.com</span>
            </p>
        </div>
    </div>
</template>

<script setup>
import Navbar from "~/components/Navbar.vue";
import Recenzije from "~/components/Recenzije.vue";
const array = ["Junior", "Mid", "Senior"];
</script>

<style scoped>
.container-fluid {
    background-color: #f3f5fe;
    padding: 7rem;
}

.oglas-description {
    line-height: 10px;
}

.premium-oglas {
    border: 1px solid #0160fe;
}

.oglas-items-1 {
    line-height: 1;
    color: #0160fe;
}

.oglas-items-1 h5 {
    font-weight: 700;
}

.oglas-items-2 {
    line-height: 1;
    color: grey;
}

.oglas-items-2 h5 {
    font-weight: 700;
}

.warning {
    line-height: 10px;
    font-size: 14px;
}

@media screen and (max-width: 900px) {
    .oglas-description {
        line-height: 1.6;
        width: 100%;
    }
    .container-fluid {
        padding: 3rem;
    }

    .oglas-items-1 h5 {
        font-size: 18px;
    }

    .oglas-items-1 p:first-child {
        font-size: 14px;
        width: 30ch;
    }

    .oglas-items-2 h5 {
        font-size: 18px;
    }

    .oglas-items-2 p:first-child {
        font-size: 14px;
        width: 30ch;
    }

    .warning{
        font-size: 12px;
        line-height: normal;
    }

    .add-oglas button{
        font-size: 13px ;
        padding: 5px 10px !important ;
    }


}
</style>
