<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <router-link :to="{ name: 'welcome' }" class="navbar-brand"
            >LARAVEL PASSPORT + VUE</router-link
        >
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <router-link :to="{ name: 'user-register' }" class="nav-link" href=""
                        >REGISTER</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link :to="{ name: 'user-login' }" class="nav-link" href="#"
                        >LOGIN</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link :to="{ name: 'staff-login' }" class="nav-link" href="#"
                        >STAFF LOGIN</router-link
                    >
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {};
</script>

<style></style>
