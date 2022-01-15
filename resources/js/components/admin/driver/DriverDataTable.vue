<template>
  <div>
    <div class="bg-white shadow-sm card-body">
      <FormulateForm>
        <div class="d-flex align-items-center">
          <div class="form-group search-container">
            <FormulateInput type="text" />
          </div>
          <div class="form-group mx-1">
            <FormulateInput type="submit" label="search" />
          </div>
        </div>
      </FormulateForm>
    </div>
    <div class="bg-white shadow-sm card-body my-1">
        <div class="d-flex justify-content-between align-items-center my-1">
            <h5>Driver List</h5>
            <a :href="route('admin.driver.create')" class="btn btn-primary btn-sm">Create Driver</a>
        </div>
      <div>
        <vuetable
          ref="vuetable"
          api-url="https://vuetable.ratiw.net/api/users"
          :fields="['name', 'nickname', 'email', 'gender']"
          data-path=""
          pagination-path=""
        ></vuetable>
      </div>
    </div>
  </div>
</template>

<script>
import Vuetable from "vuetable-2";
export default {
  name: "DriverDataTable",
  components: {
    Vuetable,
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
</style>