<script setup>
import companies from "~/companies/companies.json";
const company = companies;
</script>

<template>
    <div class="company-container container-fluid mt-5 p-0">
            <div class="company-head">
                <h3 class="text-center">Istraži kompanije</h3>
                <p class="text-center text-muted">
                    Pogledaj koje kompanije zapošljavaju, pročitaj iskustva
                    drugih o kompanijama
                    <span class="d-block">i ostavi svoja iskustva.</span>
                </p>
            </div>
            <div class="d-flex justify-content-center">
                <div class="box-company col-lg-7 mt-3">
                    <div
                        v-for="tvrtka in companies"
                        :key="tvrtka.id"
                        class="company-list position-relative"
                        :class="{
                            'premium-kompanija': tvrtka.premium,
                            'company-list': !tvrtka.premium,
                        }"
                        data-aos="fade-right"
                    >
                        <div v-if="tvrtka.premium" class="div-premium">
                            <p class="premium">Premium</p>
                        </div>

                        <img
                            src="~/assets/images/logo.png"
                            alt=""
                            width="40px"
                        />
                        <h5 class="mt-3 head-company-title">
                            {{ tvrtka.companyName }}
                        </h5>
                        <p class="p-text-company text-muted mt-2">
                            {{ tvrtka.location }}
                        </p>
                        <p
                            v-if="tvrtka.hasOpenPosition"
                            class="p-text-company text-muted"
                        >
                            Otvorene pozicije
                        </p>
                        <p v-else class="p-text-company text-muted">
                            Bez otvorenih pozicija
                        </p>
                        <p class="p-desc-company">
                            {{ tvrtka.description }}
                        </p>

                        <div class="buttons-container">
                            <button class="position-btn">
                                Otvorene pozicije
                            </button>
                            <button class="iskustvo-btn">Iskustva(16)</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<style>


.company-head {
    background-color: #f3f5fe;
    padding: 3rem;
    height: 310px;
}

.box-company {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    justify-items: center;
}

.company-list {
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    border: 1px solid rgb(207, 207, 207);
    padding: 24px;
    width: auto;
    transition: all ease-in-out 0.2s;
    border-radius: 10px;
    height: 450px;
    position: relative;
    bottom: 9rem;
}

.premium-kompanija {
    background-color: #fffefa;
    border: 1px solid #ebb304 !important;
}

.buttons-container {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

.company-list:hover {
    border: 1px solid #0160fe;
    transform: translate(0, -5px);
    cursor: pointer;
}

.p-text-company {
    font-size: 14px;
    line-height: 0.5;
}

.position-btn {
    border-radius: 5px !important;
    padding: 10px !important;
    font-size: 13px !important;
    height: 40px;
    background-color: #0160fe;
    color: #fff;
    border: none;
}

.premium {
    background-color: #ebb304;
    color: #fff;
    padding: 5px;
    font-size: 10px;
    border-top-right-radius: 10px 10px;
}


.div-premium {
    position: absolute;
    right: 0;
    top: 0;
}

.premium-kompanija {
    background-color: #fffefa;
    border: 1px solid #ebb304 !important;
}

.iskustvo-btn {
    border-radius: 5px !important;
    padding: 5px !important;
    font-size: 13px !important;
    height: 40px;
    background-color: #fff;
    color: #000;
    border: 1px solid grey;
}

.p-desc-company {
    font-size: 16px;
    line-height: 28px;
}

@media (max-width: 768px) {

    .company-list {
        height: auto;
        padding-left: 20px;
        padding-right: 20px;
    }

    .box-company {
        display: grid !important;
        grid-template-columns: 1fr !important ;
        gap: 20px;
        padding-left: 30px;
        padding-right: 30px;
        justify-items: center;
    }

    .p-text-company {
        font-size: 12px;
        line-height: 0.5;
    }

    .p-desc-company {
        font-size: 14px;
        line-height: 28px;
    }

    .head-company-title {
        font-size: 16px;
    }

    .company-head h3{
        font-size: 20px;

    }

    .company-head p{
        font-size: 13px;
    }
}



@media (max-width: 1600px) {
    .box-company {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        padding-left: 30px;
        padding-right: 30px;
        justify-items: center;
    }
}

</style>
