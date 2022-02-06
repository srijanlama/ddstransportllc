<template>
  <div>
    {{ form }}
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white shadow-sm py-2 mb-3 px-3">
          <li class="breadcrumb-item">
            <a :href="route('admin.dashboard')">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
            <a :href="route('admin.driver.index')">Driver</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">create</li>
        </ol>
      </nav>
    </div>
    <FormulateForm @submit="submitHandler">
      <div class="driver-form">
        <div class="bg-white shadow-sm card-body">
          <div>
            <b-tabs content-class="mt-3">
              <b-tab title="Basic Info" active>
                <div class="row">
                  <div class="form-group col-md-4 col-lg-4">
                    <FormulateInput
                      label="First Name"
                      validation="required"
                      v-model="form.first_name"
                    />
                  </div>
                  <div class="form-group col-md-4 col-lg-4">
                    <FormulateInput
                      label="Middle Name"
                      v-model="form.middle_name"
                    />
                  </div>
                  <div class="form-group col-md-4 col-lg-4">
                    <FormulateInput
                      label="Last Name"
                      validation="required"
                      v-model="form.last_name"
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
                      label="Date Of Application"
                      type="date"
                      validation="required"
                      v-model="form.date_of_application"
                    />
                  </div>
                  <div class="form-group col-md-4 col-lg-4">
                    <FormulateInput
                      label="Are you eligible to work in USA ?"
                      type="select"
                      validation="required"
                      :options="[
                        { value: 1, label: 'YES' },
                        { value: 0, label: 'NO' },
                      ]"
                      v-model="form.working_in_us"
                    />
                  </div>
                  <div class="form-group col-md-4 col-lg-4">
                    <FormulateInput
                      label="Date of Birth"
                      type="date"
                      validation="required"
                      v-model="form.dob"
                    />
                  </div>
                  <div class="form-group col-md-4 col-lg-4">
                    <FormulateInput
                      label="Age"
                      type="number"
                      v-model="form.age"
                    />
                  </div>
                  <div class="form-group col-md-4 col-lg-4">
                    <FormulateInput
                      label="Reference Person"
                      v-model="form.reference_person"
                    />
                  </div>
                  <div class="form-group col-md-4 col-lg-4">
                    <FormulateInput
                      label="Expected Salary"
                      type="number"
                      v-model="form.expected_salary"
                    />
                  </div>
                  <div class="form-group col-md-4 col-lg-4">
                    <FormulateInput
                      label="Have you tested Alcohol & Drug Test ?"
                      type="select"
                      :options="[
                        { value: 1, label: 'YES' },
                        { value: 0, label: 'NO' },
                      ]"
                      v-model="form.pre_drug_test"
                    />
                  </div>
                  <div class="form-group col-md-4 col-lg-4">
                    <FormulateInput
                      label="Have you been served to Jail Term ?"
                      type="select"
                      :options="[
                        { value: 1, label: 'YES' },
                        { value: 0, label: 'NO' },
                      ]"
                      v-model="form.jail_term"
                    />
                  </div>
                </div>
              </b-tab>
              <b-tab title="Employment History">
                <div class="row">
                  <FormulateInput
                    type="group"
                    :repeatable="true"
                    v-model="form.employment_history"
                    element-class="form-array"
                  >
                    <div class="row">
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="name"
                          name="name"
                          validation="required"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="organization"
                          name="organization"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput label="address" name="address" />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput label="city" name="city" />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="state"
                          type="select"
                          :options="options"
                          name="state"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput label="zip" name="zip" />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput label="phone" name="phone" />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput label="position" name="position" />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="started on"
                          type="date"
                          name="start_on"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="ended on"
                          type="date"
                          name="end_on"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="Salary"
                          type="number"
                          name="salary"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="Reason For Leaving"
                          type="textarea"
                          name="reason_for_leaving"
                        />
                      </div>
                    </div>
                  </FormulateInput>
                </div>
              </b-tab>
              <b-tab title="Accident History">
                <div class="row">
                  <FormulateInput
                    type="group"
                    :repeatable="true"
                    v-model="form.accident_history"
                    element-class="form-array"
                  >
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <FormulateInput
                          label="Accident Date"
                          type="date"
                          name="accident_date"
                        />
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <FormulateInput
                          label="Nature of Accident"
                          type="textarea"
                          name="nature_of_accident"
                        />
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <FormulateInput
                          label="Fatalites"
                          type="textarea"
                          name="fatalities"
                        />
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <FormulateInput
                          label="Injuries"
                          type="textarea"
                          name="injuries"
                        />
                      </div>
                    </div>
                  </FormulateInput>
                </div>
              </b-tab>
              <b-tab title="Experience History">
                <div class="row">
                  <FormulateInput
                    type="group"
                    :repeatable="true"
                    v-model="form.experience_history"
                    element-class="form-array"
                  >
                    <div class="row">
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="Class of Equipment"
                          name="class_of_equipment"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="Equipment Type"
                          name="equipment_type"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          type="date"
                          label="Started On"
                          name="start_on"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="Ended On"
                          type="date"
                          name="end_on"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="Total Drive (Miles)"
                          type="number"
                          name="total_drive"
                        />
                      </div>
                    </div>
                  </FormulateInput>
                </div>
              </b-tab>
              <b-tab title="Education History">
                <div class="row">
                  <FormulateInput
                    type="group"
                    :repeatable="true"
                    v-model="form.education_history"
                    element-class="form-array"
                  >
                    <div class="row">
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput label="Name" name="name" />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="Organization"
                          name="organization"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput label="Address" name="address" />
                      </div>
                    </div>
                  </FormulateInput>
                </div>
              </b-tab>
              <b-tab title="License History">
                <div class="row">
                  <FormulateInput
                    type="group"
                    :repeatable="true"
                    v-model="form.license_history"
                    element-class="form-array"
                  >
                    <div class="row">
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput label="License No" name="license_no" />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput label="State" name="state" />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput label="License Type" name="type" />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="License Denied on Past ?"
                          type="select"
                          :options="[
                            { value: '0', label: 'NO' },
                            { value: '1', label: 'YES' },
                          ]"
                          name="type"
                        />
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <FormulateInput
                          label="License Revoked on Past ?"
                          type="select"
                          :options="[
                            { value: '0', label: 'NO' },
                            { value: '1', label: 'YES' },
                          ]"
                          name="type"
                        />
                      </div>
                    </div>
                  </FormulateInput>
                </div>
              </b-tab>
            </b-tabs>
          </div>
          <div>
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <button type="submit">Save Driver</button>
                <a :href="route('admin.driver.index')">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </FormulateForm>
    <div>
      <FlashMessage></FlashMessage>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "DriverForm",
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
    this.form = Object.assign({},this.driver);
  },
  props: {
    driver: {
      type: Object,
      default() {
        return null;
      },
    },
    states: {
      type: Array,
      default() {
        return {};
      },
    },
  },
  data() {
    return {
      form: {
        first_name: null,
        middle_name: null,
        last_name: null,
        email: null,
        phone: null,
        date_of_application: null,
        working_in_us: null,
        dob: null,
        age: null,
        reference_person: null,
        expected_salary: null,
        pre_drug_test: null,
        jail_term: null,
        status: null,
        employment_history: [],
        accident_history: [],
        experience_history: [],
        education_history: [],
        license_history: [],
      },
      options: null,
      validation: {},
    };
  },
  methods: {
    submitHandler() {
      const headers = {
        Accept: "application/json",
        "Content-Type": "application/json",
      };
      axios
        .post(route("api.admin.driver.store"), this.form, headers)
        .then((res) => {
          this.flashMessage.show({
            status: "success",
            title: "Success",
            message: res.data.message,
            time: 3000,
          });
          window.location.href = route("admin.driver.index");
        })
        .catch((err) => {
          this.flashMessage.show({
            status: "error",
            message: "email already taken",
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

// step wizard
div.step-header {
  display: none !important;
}
.formulate-input-element--group {
  width: 100% !important;
}
.form-array {
  margin-bottom: 1rem !important;
}
</style>
