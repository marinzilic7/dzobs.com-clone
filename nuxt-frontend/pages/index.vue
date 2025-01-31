<template>
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
</template>

<script setup>
import Navbar from "~/components/Navbar.vue";
import Heading from "~/components/Heading.vue";
</script>

<script>

export default {
    components: {
        Navbar,
        Heading,
    },
    name: 'Index'
};

</script>

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

@media (max-width: 768px) {
    .search-items {
        width: 100% !important;
        flex-direction: column;
        align-items: center;
    }

    .btn {
        width: 100%;
    }
}
</style>
