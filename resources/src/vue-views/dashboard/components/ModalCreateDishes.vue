<template>
    <div
        class="modal fade"
        id="modal-dishes"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="modal-dishes-label"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div
                    class="modal-header d-flex justify-content-center border-0"
                >
                    <h5
                        class="modal-title text-c-silver-dark"
                        id="modal-dishes-label"
                    >
                        Crea nuovo piatto
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
                                <label
                                    for="dishes_name"
                                    class="form-label text-c-silver-dark"
                                >
                                    Nome Piatto
                                </label>
                                <input
                                    type="text"
                                    class="form-control text-c-silver-dark"
                                    id="dishes_name"
                                    aria-describedby="dishesName"
                                    placeholder="Pasta alle vongole"
                                />
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="form-group">
                                <label
                                    for="typology"
                                    class="form-label text-c-silver-dark"
                                >
                                    Tipologia
                                </label>
                                <select
                                    id="typology"
                                    class="form-select text-c-silver-dark"
                                    aria-label="Select typology"
                                >
                                    <option
                                        v-for="(typology, key) in typologies"
                                        :key="key"
                                        :value="typology.id"
                                    >
                                        {{ typology.name }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="form-group">
                                <label
                                    for="intolerances"
                                    class="form-label text-c-silver-dark"
                                >
                                    Intolletanze
                                </label>
                                <select
                                    id="intolerances"
                                    class="form-select text-c-silver-dark"
                                    aria-label="Select intolerance"
                                >
                                    <option
                                        v-for="(
                                            intolerance, key
                                        ) in intolerances"
                                        :key="key"
                                        :value="intolerance.id"
                                    >
                                        {{ intolerance.name }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="form-group">
                                <label
                                    for="ingredients"
                                    class="form-label text-c-silver-dark"
                                >
                                    Lista Ingredienti
                                </label>
                                <div class="list-group">
                                    <div
                                        class="list-group-item list-group-item-action d-flex text-c-silver-dark"
                                        v-for="(ingredient, key) in ingredients"
                                        :key="key"
                                    >
                                        <p
                                            class="m-0 me-3 text-c-blue-ligth-bright"
                                        >
                                            {{ key + 1 }}.
                                        </p>
                                        <input
                                            type="checkbox"
                                            :value="ingredient.id"
                                            :id="'ingredient' + ingredient.id"
                                            v-show="false"
                                            v-model="
                                                form.ingredients[ingredient.id]
                                            "
                                        />
                                        <label
                                            class="form-check-label"
                                            :for="'ingredient' + ingredient.id"
                                        >
                                            {{ ingredient.name }}
                                        </label>
                                    </div>
                                </div>
                                <!-- <input
                                    type="checkbox"
                                    :value="ingredient.id"
                                    :id="'ingredient' + ingredient.id"
                                />
                                <label
                                    class="form-check-label"
                                    :for="'ingredient' + ingredient.id"
                                >
                                    {{ ingredient.name }}
                                </label> -->
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
            typologies: null,
            intolerances: null,
            ingredients: null,
            form: {
                ingredients: [],
            },
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
        getIntolerances() {
            let config = {
                method: "get",
                url: "/public/api/test/intolerances",
                headers: {
                    Accept: "application/json",
                },
            };

            axios(config)
                .then((response) => {
                    this.intolerances = response.data.intolerances;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        getIngredients() {
            let config = {
                method: "get",
                url: "/public/api/test/ingredients",
                headers: {
                    Accept: "application/json",
                },
            };

            axios(config)
                .then((response) => {
                    this.ingredients = response.data.ingredients;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },
    beforeMount() {
        this.getTipology();
        this.getIntolerances();
        this.getIngredients();
    },
};
</script>
