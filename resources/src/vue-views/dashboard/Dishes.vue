<template>
    <!-- section header -->
    <div class="d-flex d-flex justify-content-between mb-2">
        <div class="d-flex flex-column">
            <p class="h2 text-c-silver-dark fw-bold">LISTA PIATTI</p>
            <p class="h5 text-c-silver-ligth">
                Visualizza la lista dei piatti registrati
            </p>
        </div>
        <div class="d-flex flex-column">
            <button
                class="d-flex btn bg-white"
                data-bs-toggle="modal"
                data-bs-target="#ingredienti-list"
            >
                <div class="d-flex align-items-center me-2">
                    <i
                        class="bi bi-apple text-c-silver-dark"
                        style="font-size: 2rem"
                    ></i>
                </div>
                <div class="d-flex flex-column">
                    <p class="m-0 text-c-silver-dark">Visualiza</p>
                    <p class="m-0 h4 text-c-silver-dark">Lista ingredienti</p>
                </div>
            </button>
        </div>
    </div>
    <!-- section content -->
    <section class="row">
        <!-- col full -->
        <div class="col-12 my-2">
            <div class="card bg-transparent border-0">
                <!-- header control -->
                <div
                    class="card-header d-flex justify-content-between bg-transparent border-0 p-0"
                >
                    <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination m-0 p-0">
                            <li class="page-item">
                                <a
                                    class="page-link bg-transparent border-0"
                                    href="#"
                                    aria-label="Previous"
                                >
                                    <span aria-hidden="true">
                                        <i
                                            class="bi bi-chevron-left text-c-blue-bright"
                                        ></i>
                                    </span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a
                                    href="#"
                                    class="page-link border-0 rounded"
                                    :class="
                                        true
                                            ? 'bg-c-blue-bright text-white'
                                            : 'bg-transparent text-c-silver-ligth'
                                    "
                                >
                                    1
                                </a>
                            </li>
                            <li class="page-item">
                                <a
                                    class="page-link border-0 rounded"
                                    :class="
                                        false
                                            ? 'bg-c-blue-bright text-white'
                                            : 'bg-transparent text-c-silver-ligth'
                                    "
                                    href="#"
                                    >2</a
                                >
                            </li>
                            <li class="page-item">
                                <a
                                    class="page-link border-0 rounded"
                                    :class="
                                        false
                                            ? 'bg-c-blue-bright text-white'
                                            : 'bg-transparent text-c-silver-ligth'
                                    "
                                    href="#"
                                    >3</a
                                >
                            </li>
                            <li class="page-item">
                                <a
                                    class="page-link bg-transparent border-0"
                                    href="#"
                                    aria-label="Next"
                                >
                                    <span aria-hidden="true">
                                        <i
                                            class="bi bi-chevron-right text-c-blue-bright"
                                        ></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="d-flex">
                        <!-- Search -->
                        <form @submit.prevent="">
                            <div class="input-group">
                                <button
                                    type="submit"
                                    class="input-group-text border-0"
                                    id="search-dishes"
                                >
                                    <i class="bi bi-search"></i>
                                </button>
                                <input
                                    type="text"
                                    class="form-control bg-transparent border-0"
                                    placeholder="Ricerca piatto..."
                                    aria-label="Input seache dishes"
                                    aria-describedby="search-dishes"
                                />
                            </div>
                        </form>
                        <!-- Add Button -->
                        <button
                            type="button"
                            class="btn bg-c-blue-bright text-white mb-3 ms-2"
                            data-bs-toggle="modal"
                            data-bs-target="#modal-dishes"
                        >
                            <i class="bi bi-plus-lg"></i>
                            AGGIUNGI PIATTO
                        </button>
                    </div>
                </div>
                <div class="card-body bg-transparent p-0">
                    <TableDishes />
                </div>
            </div>
        </div>
    </section>
    <ModalIngredient />
    <ModalCreateDishes />
</template>

<script>
import TableDishes from "@/vue-views/dashboard/components/TableDishes";
import ModalIngredient from "@/vue-views/dashboard/components/ModalIngredient";
import ModalCreateDishes from "@/vue-views/dashboard/components/ModalCreateDishes";

export default {
    components: {
        TableDishes,
        ModalIngredient,
        ModalCreateDishes,
    },
};
</script>
