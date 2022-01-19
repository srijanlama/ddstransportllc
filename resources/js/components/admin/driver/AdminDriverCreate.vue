<template>
    <div>
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white shadow-sm py-2 mb-3 px-3">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item">
                        <a :href="route('admin.driver.index')">Driver</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        create
                    </li>
                </ol>
            </nav>
        </div>
        <div class="driver-form">
            <div class="bg-white shadow-sm card-body">
                <FormulateForm @submit="submitHandler">
                    <div class="row">
                        <div class="form-group col-md-4 col-lg-4">
                            <FormulateInput
                                label="Fullname"
                                validation="required"
                                v-model="form.name"
                            />
                        </div>
                        <div class="form-group col-md-4 col-lg-4">
                            <FormulateInput
                                label="Email"
                                type="email"
                                validation="required"
                                v-model="form.email"
                            />
                        </div>
                        <div class="form-group col-md-4 col-lg-4">
                            <FormulateInput
                                label="Phone"
                                validation="required"
                                v-model="form.phone"
                            />
                        </div>
                        <div class="form-group col-md-4 col-lg-4">
                            <FormulateInput
                                label="state"
                                type="select"
                                :options="options"
                                v-model="form.state"
                            />
                        </div>
                        <div class="form-group col-md-4 col-lg-4">
                            <FormulateInput
                                label="status"
                                type="select"
                                :options="[
                                    { value: 1, label: 'Active' },
                                    { value: 0, label: 'Inactive' },
                                ]"
                                v-model="form.status"
                            />
                        </div>
                        <div class="for-group col-md-12 col-lg-12">
                            <FormulateInput type="submit" label="save" />
                        </div>
                    </div>
                </FormulateForm>
            </div>
        </div>
        <div>
              <FlashMessage></FlashMessage>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    name: "AdminDriverCreate",
    props: {
        states: {
            type: Array,
            default() {
                return {};
            },
        },
    },
    created() {
        this.options = this.states.map((state) => {
            return {
                label: state.name,
                value: state.name,
            };
        });
    },
    data() {
        return {
            form: {
                name: null,
                email: null,
                phone: null,
                state: null,
                status: null,
            },
            options: null,
        };
    },
    methods: {
        submitHandler() {
            let form_data = new FormData();
            for (var key in this.form) {
                form_data.append(key, this.form[key]);
            }
            axios
                .post(route("api.admin.driver.store"), form_data)
                .then((res) => {
                    this.flashMessage.show({
                        status: "success",
                        title: "Success",
                        message: res.data.message,
                        time: 3000,
                    });
                    return
                    window.location.href = route("admin.driver.index");
                })
                .catch((err) =>{
                     this.flashMessage.show({
                        status: "error",
                        message: 'email already taken',
                        time: 3000,
                    });
                });
        },
    },
};
</script>

<style lang="scss">
div.search-container {
    min-width: 35%;
}
.formulate-input-element {
    width: 100% !important;
}
.driver-form .form-group {
    margin-bottom: 1rem;
}
</style>
