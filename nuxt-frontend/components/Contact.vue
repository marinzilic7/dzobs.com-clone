<template>
    <div class="contact">
        <div
            class="d-flex flex-column align-items-center justify-content-center"
        >
            <h1 class="mt-3">Top IT poslovi u tvom inboxu</h1>
            <p class="mt-3 text-muted text-center">
                Pretplati se na Dzobs.com newsletter i jednom sedmično ti
                šaljemo najnovije poslove za odabranu poziciju.
            </p>
            <div
                class="dodaj-kontakt d-flex gap-5 justify-content-between mt-3 col-12 col-md-12 col-sm-12 col-lg-5 align-items-center"
            >
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pozicija</option>
                    <option value="">Frontend developer</option>
                    <option value="">Backend developer</option>
                    <option value="">Fullstack developer</option>
                    <option value="">Mobile developer</option>
                    <option value="">DevOps</option>
                    <option value="">QA</option>
                    <option value="">UI/UX</option>
                    <option value="">Project manager</option>
                    <option value="">Product manager</option>
                    <option value="">Data scientist</option>
                    <option value="">Data analyst</option>
                    <option value="">IT support</option>
                    <option value="">IT sales</option>
                    <option value="">IT marketing</option>
                    <option value="">IT HR</option>
                </select>

                <div class="input-group mb-3">
                    <input
                        type="text"
                        class="upisi-me form-control"
                        placeholder="Recipient's username"
                        aria-label="Recipient's username"
                        aria-describedby="button-addon2"
                    />
                    <button
                        class="upisi-btn btn btn-primary text-light"
                        type="button"
                        id="button-addon2"
                    >
                        Upiši me
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.contact {
    background-color: #f5f5f5;
    padding: 50px;
}

.upisi-btn,
.upisi-me {
    margin-top: 10px;
    height: 50px;
    font-size: 14px;
}

select.form-select{

    height: 50px;
    font-size: 14px;
    }

@media screen and (max-width: 768px) {
    .contact {
        margin:0 !important;
    }
    .upisi-btn,
    .upisi-me {
        margin-top: 10px;
        height: 40px;
        font-size: 12px;
    }

    .contact h1 {
        font-size: 20px;
    }
    .contact p {
        font-size: 12px;
    }

    select option {
        font-size: 13px;
    }

    select.form-select{
        height: 40px;
        font-size: 13px;
        margin-bottom: 5px;
    }

    .dodaj-kontakt {
        display: grid !important;
        grid-template-columns: 1fr;
        gap: 0px !important;

    }


}
</style>
