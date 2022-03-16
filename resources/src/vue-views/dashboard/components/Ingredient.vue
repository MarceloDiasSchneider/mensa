<template>
    <form @submit.prevent=""  class="list-group m-2">
        <div class="list-group-item d-flex p-0 w-100">
            <div class="input-group w-100">
                <div class="input-group-text bg-transparent text-c-blue-ligth-bright border-0">
                    {{ ingredient.id }}.
                </div>
                <input
                    type="text"
                    class="form-control bg-transparent border-0"
                    placeholder="Pasta"
                    aria-label="Input ingredient"
                    :value="ingredient.name"
                    :disabled="!edit_ingredient"
                />
                <button
                    type="submit"
                    class="input-group-text bg-transparent border-0"
                    :id="ingredient.name + ingredient.id"
                    @click="ingredientUpdate(ingredient.id)"
                    v-if="edit_ingredient"
                >
                    <i class="bi bi-file-earmark-check m-0 p-0 h5 text-c-silver-ligth"></i>
                </button>
                <button
                    type="submit"
                    class="input-group-text bg-transparent border-0"
                    :id="ingredient.name + ingredient.id"
                    @click="ingredientDelete(ingredient.id)"
                    v-if="!edit_ingredient"
                >
                    <i class="bi bi-trash m-0 p-0 h5 text-c-silver-ligth"></i>
                </button>
                <button
                    type="submit"
                    class="input-group-text bg-transparent border-0"
                    :id="ingredient.name + ingredient.id"
                    @click="edit_ingredient = !edit_ingredient"
                    v-if="!edit_ingredient"
                >
                    <i class="bi bi-pencil m-0 p-0 h5 text-c-silver-ligth"></i>
                </button>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    props: {
        ingredient: {
            type: Object,
            require: true,
        },
        key: {
            type: Number,
            require: true,
        },
    },
    data() {
        return {
            edit_ingredient: false,
        };
    },
    methods: {
        ingredientUpdate(id) {
            this.edit_ingredient = false;
            console.log("update id " + id);
        },
        ingredientDelete(id) {
            console.log("delete id " + id);
        },
    },
};
</script>
