<template>
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

<style scoped>

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
