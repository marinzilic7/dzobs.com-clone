<script setup>
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();

const boostrapLoader = ref(true);

const getAdmin = async () => {
    try {
        const response = await axios.get("http://localhost:8000/api/admin", {
            headers: {
                Authorization: `Bearer ${localStorage.getItem("token")}`,
            },
        });
        console.log("Ovo je admin", response.data);
        boostrapLoader.value = false;
    } catch (error) {
        console.log(error);
        return router.push("/login");
    }
};

onMounted(() => {
    getAdmin();
});
</script>

<template>
    <div
        v-if="boostrapLoader"
        class="d-flex justify-content-center align-items-center"
        style="height: 100vh"
    >
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div v-else>
        <h1 class="text-center">Ovo je admin stranica</h1>
    </div>

</template>
