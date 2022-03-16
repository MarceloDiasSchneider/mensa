<template>
    <table class="w-100" style="min-width: 650px">
        <thead class="bg-white">
            <tr>
                <th
                    scope="col"
                    class="p-2 rounded-start"
                    :class="
                        false ? 'text-c-blue-bright' : 'text-c-silver-ligth'
                    "
                >
                    ID <i class="bi bi-chevron-down"></i>
                </th>
                <th
                    scope="col"
                    class="p-2"
                    :class="true ? 'text-c-blue-bright' : 'text-c-silver-ligth'"
                >
                    Nome <i class="bi bi-chevron-up"></i>
                </th>
                <th
                    scope="col"
                    class="p-2"
                    :class="
                        false ? 'text-c-blue-bright' : 'text-c-silver-ligth'
                    "
                >
                    Lista Ingrediente
                    <i class="bi bi-chevron-down"></i>
                </th>
                <th
                    scope="col"
                    class="p-2"
                    :class="
                        false ? 'text-c-blue-bright' : 'text-c-silver-ligth'
                    "
                >
                    Tipologia <i class="bi bi-chevron-down"></i>
                </th>
                <th
                    scope="col"
                    class="p-2 rounded-end"
                    :class="
                        false ? 'text-c-blue-bright' : 'text-c-silver-ligth'
                    "
                >
                    Intolletanze
                    <i class="bi bi-chevron-down"></i>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white border-0">
            <tr v-for="(dishe, key) in dishes" :key="key">
                <td
                    class="p-2"
                    :class="
                        false ? 'text-c-blue-bright' : 'text-c-silver-high-dark'
                    "
                >
                    {{ dishe.id }}
                </td>
                <td
                    class="p-2"
                    :class="
                        true ? 'text-c-blue-bright' : 'text-c-silver-high-dark'
                    "
                >
                    {{ dishe.name }}
                </td>
                <td
                    class="d-flex p-2"
                    :class="
                        false ? 'text-c-blue-bright' : 'text-c-silver-high-dark'
                    "
                >
                    <div
                        v-for="(ingredient, key) in dishe.ingredients"
                        :key="key"
                    >
                        <span class="me-1" :class="key > 3 ? 'd-none' : ''"
                            >{{ ingredient.name }},</span
                        >
                        <span class="me-1" v-if="key == 5">...</span>
                    </div>
                </td>
                <td
                    class="p-2"
                    :class="
                        false ? 'text-c-blue-bright' : 'text-c-silver-high-dark'
                    "
                >
                    <div class="d-flex align-items-center">
                        <i
                            v-if="dishe.typology.id == 1"
                            class="badge rounded-pill bg-c-green me-2"
                        ></i>
                        <i
                            v-else-if="dishe.typology.id == 2"
                            class="badge rounded-pill bg-c-red-dark me-2"
                        ></i>
                        <i
                            v-else-if="dishe.typology.id == 3"
                            class="badge rounded-pill bg-c-yellow me-2"
                        ></i>
                        <i
                            v-else-if="dishe.typology.id == 4"
                            class="badge rounded-pill bg-c-blue-light me-2"
                        ></i>
                        <i
                            v-else
                            class="badge rounded-pill bg-c-silver me-2"
                        ></i>
                        {{ dishe.typology.name }}
                    </div>
                </td>
                <td
                    class="p-2"
                    :class="
                        false ? 'text-c-blue-bright' : 'text-c-silver-high-dark'
                    "
                >
                    {{ dishe.intolerance.name }}
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    data() {
        return {
            dishes: null,
        };
    },
    methods: {
        getDishes() {
            let config = {
                method: "get",
                url: "/api/test/dishes",
                headers: {
                    Accept: "application/json",
                },
            };

            axios(config)
                .then((response) => {
                    this.dishes = response.data.dishes;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },
    beforeMount() {
        this.getDishes();
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