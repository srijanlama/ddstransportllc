<template>
  <div class="driver-form">
    <div class="bg-white shadow-sm card-body">
      <FormulateForm>
        <div class="row">
          <div class="form-group col-md-4 col-lg-4">
            <FormulateInput label="Fullname" validation="required" v-model="form.fullname" />
          </div>
          <div class="form-group col-md-4 col-lg-4">
            <FormulateInput label="Email" type="email" validation="required" v-model="form.email" />
          </div>
          <div class="form-group col-md-4 col-lg-4">
            <FormulateInput label="Phone"  validation="required" v-model="form.phone" />
          </div>
          <div class="form-group col-md-4 col-lg-4">
            <FormulateInput
              label="state"
              type="select"
              :options="[
                { value: 'Alabama', label: 'Alabama' },
                { value: 'Texas', label: 'Texas' },
              ]"
              v-model="form.state"
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
export default {
  name: "AdminDriverCreate",
  data(){
      return {
          form:{
              fullname: null,
              email: null,
              phone: null,
              state: null,
          }
      }
  }
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