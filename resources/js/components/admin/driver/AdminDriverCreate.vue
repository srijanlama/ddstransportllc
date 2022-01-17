<template>
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
                            :options="[
                                { value: 'alabama', label: 'Alabama' },
                                { value: 'texas', label: 'Texas' },
                            ]"
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
</template>

<script>
import axios from "axios";
export default {
    name: "AdminDriverCreate",
    data() {
        return {
            form: {
                name: null,
                email: null,
                phone: null,
                state: null,
                status: null,
            },
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
                .then((res) =>{
                  window.location.href = route('admin.driver.index')
                }
                )
                .catch((err) =>
                    console.log(err.response.data.errors)
                );
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
