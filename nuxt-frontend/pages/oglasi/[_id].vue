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
                            class="tehno-items text-muted text-decoration-underline mt-3"
                        >
                            <p>Java</p>
                            <p>Kafka</p>
                            <p>Kubernetes</p>
                            <p>PostgreSQL</p>
                            <p>Spring</p>
                            <p>Kubernetes</p>
                            <p>PostgreSQL</p>
                            <p>Java</p>
                            <p>Kafka</p>
                            <p>Spring</p>
                        </div>
                        <div class="">
                            <div class="bottom-items">
                                <div class="class-0">
                                    <p class="class-1 text-muted">Iskustvo</p>
                                    <p class="class-2">
                                        {{ singleOglas.iskustvo }}
                                    </p>
                                </div>
                                <div class="class-0">
                                    <p class="class-two text-muted">Angažman</p>
                                    <p class="class-2">Puno radno vrijeme</p>
                                </div>
                                <div class="class-0">
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
        <div class="container mt-5">
            <div class="row col-lg-8 mx-auto">
                <div class="d-flex flex-column align-items-center flex-wrap">
                    <div class="">
                        <h4>O kompaniji</h4>
                        <p class="company-disc mt-3">
                            At Wunder Mobility we're all about shaping the
                            future of mobility. As the leading B2B SaaS company,
                            our platform is the driving force behind the
                            mobility transformation. Our tech platform enables
                            vehicle sharing operators to grow, manage and scale
                            their vehicle fleets. 14 million rides. 30 million
                            daily API calls. 50,000 vehicles. We're talking
                            high-availability, low-latency, and a microservices
                            architecture that's constantly evolving. That's the
                            scale you'll be working with as you help us
                            revolutionize mobility with Wunder Mobility! We're
                            not just building software; we're powering the
                            future of transportation.
                        </p>
                        <h4 class="mt-5">Opis posla</h4>
                        <p class="company-disc mt-3">
                            Our platform is growing, and we're constantly
                            pushing the boundaries of scalability and
                            performance. We're transitioning to microservices,
                            optimizing for peak demand (imagine the surge during
                            a major football game!), and ensuring our system
                            remains rock-solid 24/7. As a Backend Engineer,
                            you'll be a crucial part of our team, diving into
                            the world of microservices and helping us build a
                            reliable software that never sleeps. You'll design,
                            develop, and maintain the backbone of our platform
                            using Java, Spring Boot, Kafka and more. Please
                            note: This is an on-site position based in Banja
                            Luka!
                        </p>
                        <h4 class="mt-5">Kvalifikacije</h4>
                        <p class="company-disc mt-3">
                            What you bring to the tabl Java expertise: You're a
                            Java pro with hands-on experience in Spring Boot.
                            API mastery: You can design and implement REST APIs
                            that are both robust and elegant. Database
                            knowledge: You're comfortable working with
                            relational databases like PostgreSQL. Cloud-native
                            experience: You understand microservices and have
                            worked with technologies like Kafka and Kubernetes.
                            A passion for learning: You're eager to explore new
                            technologies and contribute to our evolving tech
                            stack.
                        </p>
                        <h4 class="mt-5">Dodatne informacije</h4>
                        <div class="company-disc mt-3">
                            <li class="mt-3 ms-3">
                                The list of all perks can be found here. But,
                                here are the benefits Our People are most proud
                                of:
                            </li>
                            <li class="mt-3 ms-3">
                                Work-life balance is part of Klika culture.
                                Klika employees are professionals who work hard,
                                and hard work deserves rest, which is why in
                                addition to 20 days of paid annual leave, we all
                                go on a collective annual leave of 5 days.
                            </li>
                            <li class="mt-3 ms-3">
                                Klika Service Awards - your knowledge and
                                experience grow with age. KSA is an opportunity
                                to say Thank you and in addition to that comes
                                new responsibilities, benefits (eg. additional
                                days off, summer working hours), and of course
                                the Klika merch package.
                            </li>
                            <li class="mt-3 ms-3">
                                Learning opportunities are a daily occurrence at
                                Klika. We cover many interesting topics through
                                our Open Port Session. If 1-on-1 learning suits
                                you, Klika Heroes is the option for you. Our
                                senior colleagues are willing to share knowledge
                                in new technologies and best practices. You will
                                learn tips and useful techniques for general
                                well-being, mental and physical health through
                                our 360 professional and Soft skills workshops.
                            </li>
                            <li class="mt-3 ms-3">
                                Klika Leadership Academy - Do you want to
                                advance in the leadership role? Great! Klika
                                Leadership Academy offers you the opportunity to
                                equip yourself with new skills through months of
                                serious training that will make your leadership
                                job easier and make your team members satisfied
                                and productive.
                            </li>
                            <li class="mt-3 ms-3">
                                Giving back to the community is very important
                                to us (#giveback). You have the initiative to
                                help an association or contribute to the
                                community in some way - gather a team, we will
                                support you and reward you with a day off.
                            </li>
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

.bottom-items {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 10rem;
    margin-top: 3rem;
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

.tehno-items {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}

.tehno-items {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 5px 30px;
    justify-items: center;
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

.bottom-items {
    flex-grow: 20px !important;
}

.class-2 {
    font-size: 16px;
}

.company-disc {
    line-height: 2;
}

@media screen and (max-width: 768px) {
    .main {
        padding: 30px 0px 30px 0px !important;
    }
    .class-1 {
        font-size: 13px;
    }

    .class-two {
        font-size: 13px;
    }

    .class-2 {
        font-size: 13px !important;
    }

    .tehno-items {
        font-size: 13px;
    }

    .bottom-items {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .tehno-items {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        text-align: center;
        gap: 0px 30px;
    }

    .company-disc,
    .company-disc p {
        font-size: 14px;
        text-align: justify;
    }
}
</style>
