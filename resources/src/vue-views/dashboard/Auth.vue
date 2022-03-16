<template>
    <nav class="navbar navbar-light bg-primary p-3">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img
                    src="/docs/5.0/assets/brand/bootstrap-logo.svg"
                    alt=""
                    width="30"
                    height="24"
                    class="d-inline-block align-text-top"
                />
                Bootstrap
            </a>
        </div>
    </nav>
    <section class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 p-4">
                <div class="card">
                    <div
                        class="card-header h3 text-muted d-flex align-items-center flex-column p-2"
                    >
                        <p>Esegui il Login</p>
                        <p>Nella piattaforma</p>
                    </div>
                    <div class="card-body">
                        <div class="m-2">
                            <!-- login -->
                            <form
                                @submit.prevent="authenticate($event)"
                                class="mb-4"
                                v-show="login.show"
                            >
                                <div class="form-group">
                                    <label for="email" class="mt-2"
                                        >Email</label
                                    >
                                    <input
                                        type="email"
                                        class="form-control my-2"
                                        id="email"
                                        aria-describedby="emailHelp"
                                        placeholder="Inserisci la tua email"
                                        v-model="email"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mt-2"
                                        >Password</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control my-2"
                                        id="password"
                                        placeholder="Password"
                                        v-model="password"
                                    />
                                </div>
                                <small
                                    id="loginHelp"
                                    class="form-text text-danger my-2"
                                >
                                    {{ login.message }}
                                </small>
                                <div class="row mt-4 mx-0">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-block"
                                    >
                                        Login
                                    </button>
                                </div>
                            </form>
                            <!-- recovery -->
                            <form
                                @submit.prevent="recoveryAccount()"
                                class="mb-4"
                                v-show="recovery.show"
                            >
                                <div class="form-group">
                                    <label for="email" class="mt-2">
                                        Email
                                    </label>
                                    <input
                                        type="email"
                                        class="form-control my-2"
                                        id="email"
                                        aria-describedby="emailHelp"
                                        placeholder="Inserisci la tua email"
                                        v-model="email"
                                    />
                                </div>
                                <small
                                    id="recoveryHelp"
                                    class="form-text text-danger my-2"
                                >
                                    {{ recovery.message }}
                                </small>
                                <div class="row mt-4 mx-0">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-block"
                                    >
                                        Ricevere un'e-mail
                                    </button>
                                </div>
                            </form>
                            <!-- sigin -->
                            <form
                                @submit.prevent="createAccount($event)"
                                class="mb-4"
                                v-show="sigin.show"
                            >
                                <div class="form-group">
                                    <label for="name" class="mt-2">Nome</label>
                                    <input
                                        type="name"
                                        class="form-control my-2"
                                        id="name"
                                        aria-describedby="nameHelp"
                                        placeholder="Inserisci il tuo email"
                                        v-model="name"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="email" class="mt-2"
                                        >Email</label
                                    >
                                    <input
                                        type="email"
                                        class="form-control my-2"
                                        id="email"
                                        aria-describedby="emailHelp"
                                        placeholder="Inserisci la tua email"
                                        v-model="email"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mt-2"
                                        >Password</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control my-2"
                                        id="password"
                                        placeholder="Password"
                                        v-model="password"
                                    />
                                </div>
                                <small
                                    id="siginHelp"
                                    class="form-text text-danger my-2"
                                >
                                    {{ sigin.message }}
                                </small>
                                <div class="row mt-4 mx-0">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-block"
                                    >
                                        Effetua la registrazione
                                    </button>
                                </div>
                            </form>
                            <!-- divider -->
                            <div class="dropdown-divider"></div>
                            <!-- buttons -->
                            <div class="row mt-4 mx-0">
                                <button
                                    @click="switchForm('login')"
                                    v-show="!login.show"
                                    type="submit"
                                    class="btn btn-block border border-primary text-primary my-2"
                                >
                                    Login
                                </button>
                                <button
                                    @click="switchForm('recovery')"
                                    v-show="!recovery.show"
                                    type="submit"
                                    class="btn btn-block border border-primary text-primary my-2"
                                >
                                    Recupera la password
                                </button>
                                <button
                                    @click="switchForm('sigin')"
                                    v-show="!sigin.show"
                                    type="submit"
                                    class="btn btn-block border border-primary text-primary my-2"
                                >
                                    Effetua la registrazione
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            email: null,
            password: null,
            name: null,
            login: {
                show: true,
                message: null,
            },
            recovery: {
                show: false,
                message: null,
            },
            sigin: {
                show: false,
                message: null,
            },
        };
    },
    methods: {
        switchForm(form) {
            switch (form) {
                case "login":
                    this.login.show = true;
                    this.recovery.show = false;
                    this.sigin.show = false;
                    break;
                case "recovery":
                    this.login.show = false;
                    this.recovery.show = true;
                    this.sigin.show = false;
                    break;
                case "sigin":
                    this.login.show = false;
                    this.recovery.show = false;
                    this.sigin.show = true;
                    break;
            }
        },
        authenticate(e) {
            let data = new FormData();
            data.append("email", this.email);
            data.append("password", this.password);

            let config = {
                method: "post",
                url: "/api/test/login",
                headers: {
                    Accept: "application/json",
                },
                data: data,
            };

            axios(config)
                .then((response) => {
                    const token = response.data.auth.token;
                    const d = new Date();
                    // exp = hours
                    const exp = 6;
                    d.setTime(d.getTime() + exp * 60 * 60 * 1000);
                    let expires = "expires=" + d.toUTCString();
                    document.cookie =
                        "token=" + token + ";" + expires + ";path=/";
                    // submit form
                    e.target.submit();
                })
                .then(() => {})
                .catch((error) => {
                    this.login.message = error.response.data.auth.error;
                });
        },
        recoveryAccount() {
            let data = new FormData();
            data.append("email", this.email);

            let config = {
                method: "post",
                url: "/api/test/recovery",
                headers: {
                    Accept: "application/json",
                },
                data: data,
            };

            axios(config)
                .then((response) => {
                    this.recovery.message = response.data.recovery.message;
                })
                .then(() => {})
                .catch((error) => {
                    this.recovery.message = error.response.data.recovery.error;
                });
        },
        createAccount(e) {
            let data = new FormData();
            data.append("name", this.name);
            data.append("email", this.email);
            data.append("password", this.password);

            let config = {
                method: "post",
                url: "/api/test/sigin",
                headers: {
                    Accept: "application/json",
                },
                data: data,
            };

            axios(config)
                .then((response) => {
                    this.sigin.message = response.data.sigin.message;
                    e.target.submit();
                })
                .then(() => {})
                .catch((error) => {
                    this.sigin.message = error.response.data.sigin.error;
                });
        },
    },
};
</script>

<style scoped>
.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>
