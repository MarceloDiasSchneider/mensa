<template>
    <div
        class="modal fade"
        id="modal-menu"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="modal-menu-label"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div
                    class="modal-header d-flex justify-content-center border-0"
                >
                    <h5 class="modal-title" id="modal-menu-label">
                        Crea nuovo menu
                    </h5>
                    <!-- <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button> -->
                </div>
                <div class="modal-body border-0">
                    <form>
                        <div class="p-2">
                            <div class="form-group">
                                <label for="menu_name" class="form-label">
                                    Nome menu
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="menu_name"
                                    aria-describedby="menuName"
                                    placeholder="Pasta"
                                />
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="d-flex align-items-center mb-2">
                                <span
                                    class="badge rounded-pill bg-success"
                                ></span>
                                <p class="h5 my-0 mx-2">Primi</p>
                            </div>
                            <div class="list-group">
                                <button
                                    v-for="(dishes, key) in preset_dishes"
                                    :key="key"
                                    type="button"
                                    class="list-group-item list-group-item-action d-flex"
                                >
                                    <p class="m-0">{{ key + 1 }}.</p>
                                    <p class="m-0 ms-4">{{ dishes }}</p>
                                </button>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="badge rounded-pill bg-danger"
                                ></span>
                                <p class="h5 my-0 mx-2">Secondi</p>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="badge rounded-pill bg-warning"
                                ></span>
                                <p class="h5 my-0 mx-2">Contorni</p>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="d-flex align-items-center">
                                <span
                                    class="badge rounded-pill bg-primary"
                                ></span>
                                <p class="h5 my-0 mx-2">Dolci</p>
                            </div>
                        </div>
                        <div
                            class="modal-footer d-flex justify-content-center border-0"
                        >
                            <button
                                type="button"
                                class="btn btn-danger w-25"
                                data-bs-dismiss="modal"
                            >
                                CANCELLA
                            </button>
                            <button type="submit" class="btn btn-success w-25">
                                CONFIRMA
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            preset_dishes: [
                "Loren ipson",
                "Loren ipson Dolor",
                "Loren ipson Sit",
                "Loren ipson Ament",
                "Loren ipson Quick",
            ],
            form_fields: {
                dishes_name: null,
                dishes_selected: [],
            },
        };
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
