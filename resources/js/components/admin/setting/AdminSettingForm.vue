<template>
    <div>
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white shadow-sm py-2 mb-3 px-3">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Settings
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
                                label="Address"
                                v-model="form.address"
                            />
                        </div>
                        <div class="form-group col-md-4 col-lg-4">
                            <FormulateInput
                                label="Facebook link"
                                v-model="form.facebook"
                            />
                        </div>
                        <div class="form-group col-md-4 col-lg-4">
                            <FormulateInput
                                label="instagram link"
                                v-model="form.instagram"
                            />
                        </div>
                        <div class="form-group col-md-4 col-lg-4">
                            <FormulateInput
                                label="twitter link"
                                v-model="form.twitter"
                            />
                        </div>
                        <div class="form-group col-md-4 col-lg-4">
                            <FormulateInput
                                label="linkedin link"
                                v-model="form.linkedin"
                            />
                            <input type="hidden" v-model="settingId" />
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
    name: "AdminSettingForm",
    props: {
        setting: {
            type: Object,
            default() {
                return null;
            },
        },
    },
    created() {
        if (this.setting) {
            this.settingId = this.setting.id;
            this.form = Object.assign({}, this.setting);
        }
    },
    data() {
        return {
            form: {
                email: null,
                address: null,
                phone: null,
                facebook: null,
                instagram: null,
                twitter: null,
                linkedin: null,
            },
            settingId: null,
        };
    },
    methods: {
        submitHandler() {
            let form_data = new FormData();
            for (var key in this.form) {
                form_data.append(key, this.form[key]);
            }
            form_data.append("settingId", this.settingId);
            // for (var pair of form_data.entries()) {
            //     console.log(pair[0] + ", " + pair[1]);
            // }
            // return;
            axios
                .post(route("api.admin.setting.action"), form_data)
                .then((res) => {
                    this.flashMessage.show({
                        status: "success",
                        message: res.data.message,
                        time: 3000,
                    });
                    window.location.href = route("admin.setting.form");
                })
                .catch();
        },
    },
};
</script>

<style lang="scss" scoped></style>
