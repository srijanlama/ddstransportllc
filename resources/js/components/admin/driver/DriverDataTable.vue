<template>
    <div>
        <div>
            <nav aria-label="breadcrumb" class="">
                <ol class="breadcrumb bg-white shadow-sm py-2 mb-3 px-3">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a :href="route('admin.driver.index')">Driver</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Data
                    </li>
                </ol>
            </nav>
        </div>
        <div class="bg-white shadow-sm card-body">
            <FormulateForm @submit="doSearch">
                <div class="row">
                    <div class="form-group col-md-4">
                        <FormulateInput type="text" v-model="form.search" />
                    </div>
                    <div class="form-group col-md-4">
                        <FormulateInput type="submit" label="search" />
                    </div>
                </div>
            </FormulateForm>
        </div>
        <div class="bg-white shadow-sm card-body my-1">
            <div class="d-flex justify-content-between align-items-center my-1">
                <h5>Driver List</h5>
                <a
                    :href="route('admin.driver.create')"
                    class="btn btn-primary btn-sm"
                    >Create Driver</a
                >
            </div>
            <div>
                <vuetable
                    ref="vuetable"
                    :api-mode="true"
                    :api-url="route('api.admin.driver.all')"
                    :data="data"
                    :fields="fields"
                    :append-params="params"
                    @vuetable:pagination-data="onPaginationData"
                >
                    <div slot="status" slot-scope="props">
                        <span
                            class="badge bg-success"
                            v-if="props.rowData.status"
                            >Active</span
                        >
                        <span class="badge bg-danger" v-else>Inactive</span>
                    </div>
                    <div slot="actions" slot-scope="props">
                        <div class="actions">
                            <div
                                class="btn-group"
                                role="group"
                                aria-label="Basic example"
                            >
                                <a
                                    type="button"
                                    :href="
                                        route('admin.driver.edit', {
                                            id: props.rowData.id,
                                        })
                                    "
                                    class="btn btn-sm btn-default"
                                    ><i class="fa fa-edit"
                                /></a>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-default"
                                    @click="
                                        onActionClicked('view', props.rowData)
                                    "
                                >
                                    <i class="fa fa-eye" />
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-default"
                                    @click="
                                        onActionClicked('delete', props.rowData)
                                    "
                                >
                                    <i class="fa fa-trash" />
                                </button>
                            </div>
                        </div>
                    </div>
                </vuetable>
                <div class="d-flex justify-content-between">
                    <vuetable-pagination-info
                        ref="paginationInfo"
                        info-template="Displaying {from} to {to} of {total} items"
                        class=""
                    ></vuetable-pagination-info>
                    <vuetable-pagination
                        ref="pagination"
                        :css="css.pagination"
                        @vuetable-pagination:change-page="onChangePage"
                        class=""
                    >
                    </vuetable-pagination>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Vuetable from "vuetable-2";
import VuetablePagination from "vuetable-2/src/components/VuetablePagination";
import VuetablePaginationInfo from "vuetable-2/src/components/VuetablePaginationInfo";
import css from "../datatable/PaginationStyle.js";
export default {
    name: "DriverDataTable",
    components: {
        Vuetable,
        VuetablePagination,
        VuetablePaginationInfo,
    },
    data() {
        return {
            fields: [
                {
                    name: "id",
                    title: "#id",
                    sortField: "id",
                },
                {
                    name: "name",
                    title: "Fullname",
                    sortField: "name",
                },
                {
                    name: "email",
                    title: "Email",
                    sortField: "email",
                },
                {
                    name: "phone",
                    title: "Phone",
                    sortField: "phone",
                },
                {
                    name: "state",
                    title: "State",
                    sortField: "state",
                },
                {
                    name: "status",
                    title: "Status",
                    sortField: "status",
                },
                {
                    name: "actions",
                },
            ],
            data: [],
            form: {
                search: null,
            },
            params: null,
            ...css,
        };
    },
    methods: {
        onPaginationData(paginationData) {
            this.$refs.pagination.setPaginationData(paginationData);
        },
        onChangePage(page) {
            this.$refs.vuetable.changePage(page);
        },
        doSearch() {
            this.params = {
                search: this.form.search,
            };
            Vue.nextTick(() => this.$refs.vuetable.refresh());
        },
        onActionClicked(action, data) {
            // console.log(route("admin.product.edit", { id: data.id }));
        },
    },
};
</script>

<style lang="scss"></style>
