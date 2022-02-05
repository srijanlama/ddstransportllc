<template>
  <div>
    <form-wizard>
      <tab-content :selected="true" title="">
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                name="name"
                id="name"
                class="form-control"
                required
                data-error="Please enter your name"
                placeholder="Your Name"
                v-model="formData.name"
                :class="hasError('name') ? 'is-invalid' : ''"
              />
              <div class="error" v-if="!$v.formData.name.required">
                Please provide a valid name.
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <input
                type="email"
                name="email"
                id="email"
                class="form-control"
                required
                data-error="Please enter your email"
                placeholder="Your Email"
                v-model="formData.email"
              />
            </div>
          </div>
        </div>
      </tab-content>
      <tab-content title="">
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                name="phone"
                id="phone"
                required
                data-error="Please enter your number"
                class="form-control"
                placeholder="Your Phone"
                v-model="formData.phone"
              />
            </div>
          </div>

          <div class="col-lg-6 col-sm-6"></div>
        </div>
      </tab-content>
      <tab-content title="">
        <p>Or an image .. or any thing</p>
      </tab-content>
    </form-wizard>
  </div>
</template>

<script>
import "vue-step-wizard/dist/vue-step-wizard.css";
import { ValidationHelper } from "vue-step-wizard";
import { required } from "vuelidate/lib/validators";
export default {
  name: "StepWizardForm",
  mixins: [ValidationHelper],

  data() {
    return {
      formData: {
        name: "",
        email: "",
        phone: "",
      },
      validationRules: [{ name: { required } }],
    };
  },
};
</script>

<style lang="scss">
div.step-header {
  display: none !important;
}
</style>