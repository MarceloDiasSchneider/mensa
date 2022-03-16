<template>
    <div
        class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 shadow-lg min-vh-100 sticky-top"
    >
        <a href="/" class="d-flex justify-content-center my-3 mx-auto">
            <img
                :src="src_logo"
                alt="logo"
                class="img-thumbnail bg-transparent p-0 m-0 border-0 d-none d-sm-block"
                style="max-width: 100px"
            />
            <img
                :src="src_logo"
                alt="logo"
                class="img-thumbnail bg-transparent p-0 m-0 border-0 d-block d-sm-none"
                style="max-width: 35px"
            />
        </a>
        <ul
            class="nav nav-pills flex-column mb-auto mb-0 align-items-center align-items-sm-start w-100"
        >
            <li class="nav-item py-2 w-100">
                <a
                    :href="sidebar_links.calendar"
                    class="nav-link align-middle px-0"
                    :class="
                        active_sidebar == 'calendar'
                            ? 'bg-white bg-ch-white-hover text-c-blue-dark'
                            : 'bg-ch-blue-light-purple-hover text-white'
                    "
                    v-if="sidebar_links"
                >
                    <i class="bi bi-calendar mx-2 h5"></i>
                    <span class="mx-2 d-none d-sm-inline">Calendario</span>
                </a>
            </li>
            <li class="nav-item py-2 w-100">
                <a
                    :href="sidebar_links.dishes"
                    class="nav-link align-middle px-0"
                    :class="
                        active_sidebar == 'dishes'
                            ? 'bg-white bg-ch-white-hover text-c-blue-dark'
                            : 'bg-ch-blue-light-purple-hover text-white'
                    "
                    v-if="sidebar_links"
                >
                    <i class="bi bi-cloud-fog mx-2 h5"></i>
                    <span class="mx-2 d-none d-sm-inline ms-2">Piatti</span>
                </a>
            </li>
        </ul>
        <hr />
        <ul
            class="nav nav-pills flex-column mb-0 align-items-center align-items-sm-start w-100"
        >
            <li class="nav-item py-2 w-100">
                <a
                    href="#"
                    class="nav-link align-middle px-0 bg-ch-blue-light-purple-hover text-white"
                >
                    <i class="bi bi-box-arrow-right mx-2 h5"></i>
                    <span class="ms-1 d-none d-sm-inline ms-2">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        src_logo: {
            type: String,
            required: true,
        },
        active_sidebar: {
            type: String,
            required: true,
        },
    },
    data() {
        return {
            sidebar_links: null,
        };
    },
    methods: {
        getSidebarLinks() {
            let config = {
                method: "post",
                url: "/api/test/sidebar-links",
                headers: {
                    Accept: "application/json",
                },
            };

            axios(config)
                .then((response) => {
                    this.sidebar_links = response.data.sidebarLinks;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },
    beforeMount() {
        this.getSidebarLinks();
    },
};
</script>
