<template>
    <div class="container-fluid">
        <h2 class="text-center heading">
            Najveća baza IT poslova i firmi u
            <span class="line-break text-center"> Bosni i Hercegovini</span>
        </h2>
        <p class="text-center description mt-4">
            Trenutno akitvno <span class="desc_num">244</span> poslova i
            <span class="desc_num">491 </span>recenzija u okviru
            <span class="desc_num">489</span> kompanija. Poslovi za
            <span class="line-break text-center">
                developere, dizajnere, QA, marketing, menadžment koji se dnevno
                dodaju i osjvežavaju.
            </span>
        </p>
    </div>
</template>

<style scoped>
.container-fluid {
    background-color: #f3f5fe;
    padding: 7rem;
}
.heading {
    line-height: 3rem;
}

.desc_num {
    color: #0160fe;
    font-weight: bold;
    text-decoration: underline;
}

.description {
    color: #9596a5;
}
.line-break {
    display: block;
}

@media screen and (max-width: 900px) {
    .container-fluid {
        padding: 2rem;
        height: 350px ;
    }
    .heading {
        line-height: 2rem;
        font-size: 22px;
    }

    .description {
        line-height: 1.6;
        width: 100%;
        font-size: 14px;
    }

    .line-break {
        display: inline;
    }
}
</style>
