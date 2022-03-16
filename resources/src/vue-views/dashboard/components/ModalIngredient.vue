<template>
    <div
        class="modal fade"
        id="ingredienti-list"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="ingredienti-list-label"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex border-0">
                    <div class="d-flex justify-content-center w-100">
                        <h5 class="modal-title text-c-silver-dark" id="ingredienti-list-label">
                            Lista Ingredienti
                        </h5>
                    </div>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body border-0">
                    <Ingredient
                        v-for="(ingredient, key) in ingredients"
                        :key="key"
                        :ingredient="ingredient"
                    />
                    <Addingredient />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Ingredient from "@/vue-views/dashboard/components/Ingredient";
import Addingredient from "@/vue-views/dashboard/components/AddIngredient";

export default {
    components: {
        Ingredient,
        Addingredient,
    },
    data() {
        return {
            ingredients: null,
        };
    },
    methods: {
        getIngredients() {
            let config = {
                method: "get",
                url: "/api/test/ingredients",
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
        this.getIngredients();
    },
};
</script>
