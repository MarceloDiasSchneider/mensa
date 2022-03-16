<template>
    <form
        class="list-group m-2"
        v-for="(ingredient, key) in ingredients_to_add"
        :key="key"
        @submit.prevent="ingredientCreate(ingredients_to_add[key])"
    >
        <div class="list-group-item d-flex p-0 w-100">
            <div class="input-group w-100">
                <input
                    type="text"
                    class="form-control bg-transparent border-0"
                    :id="'dishes_name' + key"
                    name="dishes_name"
                    placeholder="Nuovo ingrediente"
                    v-model="ingredients_to_add[key]"
                />
                <button
                    type="submit"
                    class="input-group-text bg-transparent border-0"
                >
                    <i class="bi bi-file-earmark-check m-0 p-0 h5 text-c-silver-ligth"></i>
                </button>
            </div>
        </div>
    </form>
    <button
        type="button"
        class="btn text-c-blue-ligth-bright bg-c-silver-blue bg-ch-silver-blue-hover mt-3 w-100"
        @click="addIngredients()"
    >
        <i class="bi bi-plus-lg"></i>
    </button>
</template>

<script>
export default {
    data() {
        return {
            ingredients_to_add: [],
        };
    },
    methods: {
        addIngredients() {
            this.ingredients_to_add.push("");
        },
        ingredientCreate(ingredient_name) {
            console.log("Create " + ingredient_name);
        },
    },
};
</script>
