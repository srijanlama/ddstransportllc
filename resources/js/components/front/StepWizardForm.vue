<template>
  <div>
    <form-wizard @onComplete="submit">
      <tab-content :selected="true" title="Basic Information">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="Your First Name"
                v-model="formData.first_name"
              />
              <div v-if="hasError('first_name')">
                <div class="help-block with-errors">
                  <ul class="list-unstyled">
                    <li>please enter first name</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="Your Middle Name"
                v-model="formData.middle_name"
              />
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="Your Last Name"
                v-model="formData.last_name"
              />
              <div v-if="hasError('last_name')">
                <div class="help-block with-errors">
                  <ul class="list-unstyled">
                    <li>please enter last name</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="Your Email"
                v-model="formData.email"
              />
              <div v-if="hasError('email')">
                <div class="help-block with-errors">
                  <ul class="list-unstyled">
                    <li v-if="!$v.formData.email.required">
                      please enter email
                    </li>
                    <li v-if="!$v.formData.email.email">
                      please enter valid email
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="Your Phone"
                v-model="formData.phone"
              />
              <div v-if="hasError('phone')">
                <div class="help-block with-errors">
                  <ul class="list-unstyled">
                    <li>please enter phone</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <input
                type="number"
                class="form-control"
                placeholder="Age"
                v-model="formData.age"
                min="0"
              />
              <div v-if="hasError('age')">
                <div class="help-block with-errors">
                  <ul class="list-unstyled">
                    <li>please enter age</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <label>Date of Application</label>
              <input
                type="date"
                class="form-control"
                placeholder="Date Of Application"
                v-model="formData.date_of_application"
              />
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <label>Date of Birth</label>
              <input
                type="date"
                class="form-control"
                placeholder="Date Of Birth"
                v-model="formData.dob"
              />
              <div v-if="hasError('dob')">
                <div class="help-block with-errors">
                  <ul class="list-unstyled">
                    <li>please Date of Birth</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <label>Are You eligible to work in USA</label>
              <select class="form-control" v-model="formData.working_in_us">
                <option
                  v-for="(item, index) in this.options"
                  :key="index"
                  :value="item.status"
                >
                  {{ item.name }}
                </option>
              </select>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <label>Have you tested Alcohol & Drug Test ?</label>
              <select class="form-control" v-model="formData.pre_drug_test">
                <option
                  v-for="(item, index) in this.options"
                  :key="index"
                  :value="item.status"
                >
                  {{ item.name }}
                </option>
              </select>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <label>Have you been served to Jail Term ?</label>
              <select class="form-control" v-model="formData.jail_term">
                <option
                  v-for="(item, index) in this.options"
                  :key="index"
                  :value="item.status"
                >
                  {{ item.name }}
                </option>
              </select>
            </div>
          </div>
        </div>
      </tab-content>
      <tab-content title="Employment History">
        <div
          class="row"
          v-for="(item, index) in formData.employment_histories"
          :key="index"
        >
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Organization Name</label>
              <input
                type="text"
                class="form-control"
                placeholder="Organization Name"
                v-model="item.organiztion"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>address</label>
              <input
                type="text"
                class="form-control"
                placeholder="Address"
                v-model="item.address"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>City</label>
              <input
                type="text"
                class="form-control"
                placeholder="City"
                v-model="item.city"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Zip</label>
              <input
                type="text"
                class="form-control"
                placeholder="Zip Code"
                v-model="item.zip"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Phone</label>
              <input
                type="text"
                class="form-control"
                placeholder="Phone"
                v-model="item.phone"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Position</label>
              <input
                type="text"
                class="form-control"
                placeholder="Position"
                v-model="item.position"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Start On</label>
              <input
                type="date"
                class="form-control"
                placeholder="Position"
                v-model="item.start_on"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>End On</label>
              <input
                type="date"
                class="form-control"
                placeholder="Position"
                v-model="item.end_on"
              />
            </div>
          </div>

          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Salary</label>
              <input
                type="text"
                class="form-control"
                placeholder="Salary"
                v-model="item.salary"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Reason For Leaving</label>
              <input
                type="text"
                class="form-control"
                placeholder="e.g Covid Pandemic"
                v-model="item.reason_for_leaving"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>State</label>
              <select v-model="item.state" class="form-control">
                <option
                  v-for="(item, index) in states"
                  :key="index"
                  :value="item.name"
                >
                  {{ item.name }}
                </option>
              </select>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 d-flex align-items-center">
            <button
              @click="removeEmployment(index)"
              class="btn btn-sm bg-danger text-white"
            >
              Remove Employmnet History
            </button>
          </div>
        </div>
        <div class="col-md-12 col-lg-12">
          <button @click="addEmployment" class="btn bg-primary text-white">
            Add Employmnet History
          </button>
        </div>
      </tab-content>
      <tab-content title="Accident History">
        <div
          class="row"
          v-for="(item, index) in formData.accident_histories"
          :key="index"
        >
          <div class="col-md-6 col-lg-6">
            <div class="form-group">
              <label>Accident Date</label>
              <input
                type="date"
                class="form-control"
                placeholder="Accident Date"
                v-model="formData.date_of_application"
              />
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="form-group">
              <label>Nature of Accident</label>
              <textarea
                class="form-control"
                cols="30"
                rows="2"
                v-model="item.nature_of_accident"
              ></textarea>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="form-group">
              <label>Fatalites</label>
              <textarea
                class="form-control"
                cols="30"
                row="5"
                v-model="item.fatalities"
              ></textarea>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="form-group">
              <label>Injuries</label>
              <textarea
                class="form-control"
                cols="30"
                row="5"
                v-model="item.injuries"
              ></textarea>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <button
              @click="removeAccident(index)"
              class="btn btn-sm mb-4 bg-danger text-white"
            >
              Remove Accident History
            </button>
          </div>
        </div>
        <div class="col-md-12 col-lg-12">
          <button @click="addAccident" class="btn bg-primary text-white">
            Add Accident History
          </button>
        </div>
      </tab-content>
      <tab-content title="Experience History">
        <div
          class="row"
          v-for="(item, index) in formData.experience_histories"
          :key="index"
        >
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Class of Equipment</label>
              <input
                type="text"
                class="form-control"
                placeholder="Class of Equipment"
                v-model="item.class_of_equipment"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Equipment Type</label>
              <input
                type="text"
                class="form-control"
                placeholder="Equipment Type"
                v-model="item.equipment_type"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Started On</label>
              <input
                type="date"
                class="form-control"
                placeholder="Equipment Type"
                v-model="item.start_on"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Ended On</label>
              <input
                type="date"
                class="form-control"
                placeholder="Ended On"
                v-model="item.end_on"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4 d-flex align-items-center">
            <button
              @click="removeExperience(index)"
              class="btn btn-sm bg-danger text-white"
            >
              Remove Experience History
            </button>
          </div>
        </div>
        <div class="col-md-12 col-lg-12">
          <button @click="addExperience" class="btn bg-primary text-white">
            Add Experience History
          </button>
        </div>
      </tab-content>
      <tab-content title="Education History">
        <div
          class="row"
          v-for="(item, index) in formData.education_histories"
          :key="index"
        >
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label> Name</label>
              <input
                type="text"
                class="form-control"
                placeholder="title"
                v-model="item.name"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Organization</label>
              <input
                type="text"
                class="form-control"
                placeholder="Organiztion"
                v-model="item.organiztion"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Address</label>
              <input
                type="date"
                class="form-control"
                placeholder="address"
                v-model="item.address"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <button
              @click="removeEducation(index)"
              class="btn btn-sm bg-danger text-white mb-4"
            >
              Remove Education History
            </button>
          </div>
        </div>
        <div class="col-md-12 col-lg-12">
          <button @click="addEducation" class="btn bg-primary text-white">
            Add Education History
          </button>
        </div>
      </tab-content>
      <tab-content title="License History">
        <div
          class="row"
          v-for="(item, index) in formData.license_histories"
          :key="index"
        >
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label> License no</label>
              <input
                type="text"
                class="form-control"
                placeholder="License No."
                v-model="item.license_no"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>State</label>
              <select class="form-control"> 
                <option v-for="(item , index) of states" :key="index" :value="item.name">{{item.name}}</option>
              </select>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>License Type</label>
              <input
                type="text"
                class="form-control"
                placeholder="License Type"
                v-model="item.type"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>Expire</label>
              <input
                type="date"
                class="form-control"
                v-model="item.expiry"
              />
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>License Denied on Past ?</label>
              <select  class="form-control" v-model="license_denied_on_past">
                <option v-for="(item , index) of options" :key="index" :value="item.status">{{item.name}}</option>
              </select>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="form-group">
              <label>License Revoked on Past ?</label>
              <select  class="form-control" v-model="license_revoked_on_past">
                <option v-for="(item , index) of options" :key="index" :value="item.status">{{item.name}}</option>
              </select>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <button @click="removeLicense(index)" class="btn btn-sm bg-danger text-white mb-4">
              Remove License History
            </button>
          </div>
        </div>
        <div class="col-md-12 col-lg-12">
          <button @click="addLicense" class="btn bg-primary text-white">
            Add License History
          </button>
        </div>
      </tab-content>
    </form-wizard>
  </div>
</template>

<script>
import axios from "axios";
import "vue-step-wizard/dist/vue-step-wizard.css";
import { ValidationHelper } from "vue-step-wizard";
import { required, email } from "vuelidate/lib/validators";

export default {
  name: "StepWizardForm",
  mixins: [ValidationHelper],
  props: {
    states: {
      type: Array,
      default() {
        return null;
      },
    },
  },
  data() {
    return {
      formData: {
        first_name: null,
        middle_name: null,
        last_name: null,
        email: null,
        phone: null,
        date_of_application: new Date().toISOString().slice(0, 10),
        working_in_us: true,
        pre_drug_test: false,
        jail_term: false,
        dob: null,
        age: null,
        reference_person: null,
        expected_salary: null,

        status: null,
        employment_histories: [],
        accident_histories: [],
        experience_histories: [],
        education_histories: [],
        license_histories: [],
      },
      options: [
        {
          status: true,
          name: "YES",
        },
        {
          status: false,
          name: "NO",
        },
      ],
      validationRules: [
        {
          first_name: { required },
          last_name: { required },
          email: { required, email },
          phone: { required },
          age: { required },
          dob: { required },
        },
      ],
    };
  },
  methods: {
    addEmployment(e) {
      e.preventDefault();
      this.formData.employment_histories.push({});
    },
    removeEmployment(index) {
      this.formData.employment_histories.splice(index, 1);
    },
    addAccident(e) {
      e.preventDefault();
      this.formData.accident_histories.push({});
    },
    removeAccident(index) {
      this.formData.accident_histories.splice(index, 1);
    },
    addExperience(e) {
      e.preventDefault();
      this.formData.experience_histories.push({});
    },
    removeExperience(index) {
      this.formData.experience_histories.splice(index, 1);
    },
    addEducation(e) {
      e.preventDefault();
      this.formData.education_histories.push({});
    },
    removeEducation(index) {
      this.formData.education_histories.splice(index, 1);
    },
    addLicense(e) {
      e.preventDefault();
      this.formData.license_histories.push({});
    },
    removeLicense(index) {
      this.formData.license_histories.splice(index, 1);
    },
    submit() {
      axios
        .post(route("api.admin.driver.store"), this.formData)
        .then((res) => {
          this.flashMessage.show({
            status: "success",
            title: "Success",
            message: "Thank You For Applying , We Contact You Shortly",
            time: 3000,
          });
          setTimeout(() => {
            window.location.href = route("drive.create");
          }, 3000);
        })
        .catch((err) => {
          console.log(err.message);
          return;
          this.flashMessage.show({
            status: "error",
            message: err.errors.email[0],
            time: 3000,
          });
          setTimeout(() => {
            window.location.href = route("drive.create");
          }, 3000);
        });
    },
  },
};
</script>

<style lang="scss">
.vue-step-wizard {
  width: auto !important;
}
span.tabStatus {
  margin: auto !important;
}
span.tabStatus,
span.tabLabel {
  display: block !important;
  font-size: 14px !important;
  text-align: center;
}
li.step-item {
  margin-right: 0.5rem;
}
div.help-block {
  padding: 0 0.5rem !important;
}
</style>