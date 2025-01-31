<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-light pt-4 pb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"
                    ><img
                        src="~/assets/images/logo.png"
                        alt="logo"
                        height="50"
                        width="50"
                /></a>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul
                        class="navbar-nav me-auto ms-auto d-flex gap-lg-4 gap-md-0 gap-0 mb-2 mb-lg-0"
                    >
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                >Početna</a
                            >
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Poslovi
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Another action</a
                                    >
                                </li>
                                <li><hr class="dropdown-divider" /></li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Something else here</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Kompanije
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Another action</a
                                    >
                                </li>
                                <li><hr class="dropdown-divider" /></li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Something else here</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                >Kontakt</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                >Blog</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                >Meetups</a
                            >
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <NuxtLink
                                class="nav-link active add_oglas text-light text-center me-3"
                                to="/oglas"
                                >Objavi oglas</NuxtLink
                            >
                        </li>
                        <li class="nav-item">
                            <NuxtLink
                                class="nav-link active mt-3 mt-lg-0 login me-3 text-center"
                                to="/login"
                                >Prijava</NuxtLink
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<style scoped>
.add_oglas {
    background-color: #0160fe;
    border-radius: 20px;
    font-size: 14px;
    padding: 10px;
}

.login {
    border: 1px solid #0160fe;
    border-radius: 20px;
    padding: 10px;
    font-size: 14px;
    color: #0160fe !important;
}

.add_oglas:hover {
    background-color: #0147fe;
    color: white !important;
}

.login:hover {
    background-color: #0160fe;
    color: white !important;
}
</style>
