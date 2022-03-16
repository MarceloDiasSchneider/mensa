<template>
    <!-- section header -->
    <div class="d-flex d-flex justify-content-between mb-2">
        <div class="d-flex flex-column">
            <p class="h2 text-c-silver-dark fw-bold">
                GESTIONE MENU E CALENDARIO
            </p>
            <p class="h5 text-c-silver-ligth">
                Visualizza la lista dei piatti registrati
            </p>
        </div>
        <div class="d-flex flex-column">
            <div class="d-flex">
                <div class="d-flex flex-column align-items-center">
                    <p class="h5 m-0 text-c-silver-dark fw-bold">{{ date }}</p>
                    <p class="h2 text-c-blue-bright m-0">{{ hour }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- section content -->
    <section class="row">
        <!-- col left -->
        <div class="col-xl-4 my-2">
            <div class="card bg-transparent border-0">
                <div
                    class="card-header d-flex justify-content-start align-items-center text-white bg-c-blue-light-purple shadow rounded mb-1"
                >
                    <p class="m-0">Menu preconfigurati</p>
                </div>
                <div class="card-body bg-white shadow rounded mt-1">
                    <div class="list-group">
                        <div
                            v-for="(dishes, key) in preset_dishes"
                            :key="key"
                            class="list-group-item list-group-item-action d-flex text-c-silver-dark"
                        >
                            <p class="m-0">{{ key + 1 }}.</p>
                            <p class="m-0 ms-4">{{ dishes }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- col rigth -->
        <div class="col-xl-8 my-2">
            <div class="card bg-transparent border-0">
                <div
                    class="card-header d-flex justify-content-between align-items-center text-white bg-c-blue-light-purple shadow rounded mb-1"
                >
                    <p class="m-0">Calendario Settimanale</p>
                    <div class="d-flex">
                        <i class="bi bi-chevron-left"></i>
                        <p class="my-0 mx-2">Questa Settimana</p>
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </div>
                <div class="card-body bg-white rounded shadow mt-1">
                    <div>
                        <!-- date header -->
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <p class="h4 p-2 m-0 text-c-silver-dark">
                                    21 Aprile
                                </p>
                                <p class="p-2 m-0 text-c-silver-light">
                                    Lunedì
                                </p>
                                <i
                                    class="bi bi-caret-down-fill py-2 text-c-silver-ligth"
                                ></i>
                                <i
                                    class="bi bi-caret-up-fill py-2 text-c-silver-ligth"
                                ></i>
                            </div>
                            <button
                                type="button"
                                class="btn btn-transparent d-flex flex-row align-items-center text-primary"
                            >
                                <i
                                    class="bi bi-pencil py-2 text-c-blue-bright"
                                ></i>
                                <p class="p-2 m-0 text-c-blue-bright">
                                    MODIFICA MENU
                                </p>
                            </button>
                        </div>
                        <!-- date with dishes -->
                        <div class="row">
                            <div class="col-3">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="badge rounded-pill bg-c-green"
                                    ></span>
                                    <p class="h5 my-0 mx-2 text-c-silver-dark">
                                        Primi
                                    </p>
                                </div>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="badge rounded-pill bg-c-red-dark"
                                    ></span>
                                    <p class="h5 my-0 mx-2 text-c-silver-dark">
                                        Secondi
                                    </p>
                                </div>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="badge rounded-pill bg-c-yellow"
                                    ></span>
                                    <p class="h5 my-0 mx-2 text-c-silver-dark">
                                        Contorni
                                    </p>
                                </div>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="badge rounded-pill bg-c-blue-light"
                                    ></span>
                                    <p class="h5 my-0 mx-2 text-c-silver-dark">
                                        Dolci
                                    </p>
                                </div>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- duplicated date header -->
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <p class="h4 p-2 m-0">22 Aprile</p>
                                <p class="p-2 m-0">Martedì</p>
                                <i class="bi bi-caret-down-fill py-2"></i>
                                <i class="bi bi-caret-up-fill py-2"></i>
                            </div>
                            <button
                                type="button"
                                class="btn btn-transparent align-items-center text-primary"
                                :class="false ? 'd-flex flex-row' : 'd-none'"
                            >
                                <i class="bi bi-pencil py-2"></i>
                                <p class="p-2 m-0">MODIFICA MENU</p>
                            </button>
                        </div>
                        <!-- date dishes empty - buttons -->
                        <div class="row">
                            <div class="d-flex">
                                <div class="w-50 h-50 mx-2">
                                    <button
                                        type="button"
                                        class="btn text-c-blue-ligth-bright bg-c-silver-blue p-3 w-100"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-menu"
                                    >
                                        <i class="bi bi-plus-lg mx-2 h2"></i>
                                        <p>Creare un nuovo Menu</p>
                                    </button>
                                </div>
                                <div class="w-50 h-50 mx-2">
                                    <button
                                        type="button"
                                        class="btn text-c-blue-ligth-bright bg-c-silver-blue p-3 w-100"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-menu"
                                    >
                                        <i class="bi bi-cloud-fog mx-2 h2"></i>
                                        <p>Seleziona Menu Preconfigurato</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <ModalCreateMenu />
</template>

<script>
import ModalCreateMenu from "@/vue-views/dashboard/components/ModalCreateMenu";

export default {
    components: {
        ModalCreateMenu,
    },
    data() {
        return {
            get_date: new Date(),
            preset_dishes: [
                "Loren ipson",
                "Loren ipson Dolor",
                "Loren ipson Sit",
                "Loren ipson Ament",
                "Loren ipson Quick",
            ],
        };
    },
    computed: {
        date() {
            const options = { year: "numeric", month: "long", day: "numeric" };
            return `${this.get_date.toLocaleDateString("it-IT", options)} `;
        },
        hour() {
            return `${this.get_date.getHours()}:${this.get_date.getMinutes()}`;
        },
    },
};
</script>

<style scoped>
.badge {
    display: block;
    border-radius: 50%;
    width: 15px;
    height: 15px;
}
</style>
