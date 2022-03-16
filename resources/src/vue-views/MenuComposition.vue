<template>
    <div class="bg-c-white-cold">
        <div
            class="d-flex justify-content-between p-1 bg-c-silver-soft-dark text-white w-100"
        >
            <div class="d-flex align-items-center">
                <img
                    :src="src_logo"
                    alt="logo"
                    class="img-thumbnail bg-transparent p-0 mx-2 my-0 border-0 d-none d-sm-block"
                    style="max-width: 80px"
                />
                <h4 class="mx-2 my-0 p-0">Company</h4>
            </div>
            <div class="d-flex align-items-center">
                <button
                    type="button"
                    class="btn mx-2 bg-c-orange fw-bold text-white"
                >
                    COMPONI MENU
                </button>
                <i class="bi bi-asterisk p-0 mx-2 my-0"></i>
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="d-flex justify-content-center text-c-silver-ligth p-4">
                <p class="h6">Componi il menu</p>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button
                    type="button"
                    class="mx-4 border-0 bg-c-orange bg-ch-orange-hover text-white rounded-circle d-flex justify-content-center align-items-center"
                    style="width: 30px; height: 30px"
                >
                    <i
                        class="bi bi-chevron-left"
                    ></i>
                </button>
                <div
                    class="d-flex flex-column align-items-center mx-4 text-c-silver-dark"
                >
                    <p class="h4">21 Aprile, 2022</p>
                    <p class="h5">Lunedì</p>
                </div>
                <button
                    type="button"
                    class="mx-4 border-0 bg-c-orange bg-ch-orange-hover text-white rounded-circle d-flex justify-content-center align-items-center"
                    style="width: 30px; height: 30px"
                >
                    <i
                        class="bi bi-chevron-right"
                    ></i>
                </button>
            </div>
        </div>
        <div class="row mx-5">
            <div
                class="col-3 p-2"
                v-for="(typology, key) in typologies"
                :key="key"
            >
                <div class="card border-0 rounded-3 shadow bg-white">
                    <div
                        class="card-header d-flex align-items-center border-0 rounded-3 bg-white"
                    >
                        <i
                            v-if="typology.id == 1"
                            class="badge rounded-pill bg-c-green me-2"
                        ></i>
                        <i
                            v-else-if="typology.id == 2"
                            class="badge rounded-pill bg-c-red-dark me-2"
                        ></i>
                        <i
                            v-else-if="typology.id == 3"
                            class="badge rounded-pill bg-c-yellow me-2"
                        ></i>
                        <i
                            v-else-if="typology.id == 4"
                            class="badge rounded-pill bg-c-blue-light me-2"
                        ></i>
                        <i
                            v-else
                            class="badge rounded-pill bg-c-silver me-2"
                        ></i>
                        <h5 class="card-title m-0 p-0">{{ typology.name }}</h5>
                    </div>
                    <div class="card-body border-0 rounded-3 bg-white">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-orange rounded">
                                <div class="d-flex">
                                    <div class="mx-1">
                                        <p>1.</p>
                                    </div>
                                    <div class="d-flex flex-column mx-1">
                                        <p class="m-0 mb-1 p-0">Lorem Ipsion</p>
                                        <p class="m-0 p-0 fst-italic">
                                            Lorem, ipsum, dolor, sit, amet
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex">
                                    <div class="mx-1">
                                        <p>1.</p>
                                    </div>
                                    <div class="d-flex flex-column mx-1">
                                        <p class="m-0 mb-1 p-0">Lorem Ipsion</p>
                                        <p class="m-0 p-0 fst-italic">
                                            Lorem, ipsum, dolor, sit, amet
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        src_logo: {
            type: String,
            required: true,
        },
    },
    data() {
        return {
            typologies: null,
        };
    },
    methods: {
        getTipology() {
            let config = {
                method: "get",
                url: "/public/api/test/typologies",
                headers: {
                    Accept: "application/json",
                },
            };

            axios(config)
                .then((response) => {
                    this.typologies = response.data.typologies;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },
    beforeMount() {
        this.getTipology();
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
.border-orange {
    border: 1px solid #feb03a;
}
</style>
