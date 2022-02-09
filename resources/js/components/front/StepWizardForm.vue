<template>
  <div>
    <form-wizard>
      <tab-content :selected="true" title="Basic Information">
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="Your First Name"
                v-model="form.first_name"
              />
            </div>
          </div>

          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="Your Middle Name"
                v-model="form.middle_name"
              />
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="Your Last Name"
                v-model="form.last_name"
              />
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="Your Email"
                v-model="form.email"
              />
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="Your Phone"
                v-model="form.phone"
              />
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <input
                type="number"
                class="form-control"
                placeholder="Age"
                v-model="form.age"
              />
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <label>Date of Application</label>
              <input
                type="date"
                class="form-control"
                placeholder="Date Of Application"
                v-model="form.date_of_application"
              />
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <label>Date of Birth</label>
              <input
                type="date"
                class="form-control"
                placeholder="Date Of Birth"
                v-model="form.dob"
              />
            </div>
          </div>

          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <label>Are You eligible to work in USA</label>
              <select class="form-control" v-model="form.working_in_us">
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
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <label>Have you tested Alcohol & Drug Test ?</label>
              <select class="form-control" v-model="form.pre_drug_test">
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
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <label>Have you been served to Jail Term ?</label>
              <select class="form-control" v-model="form.jail_term">
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
          <div class="col-lg-6 col-sm-6">
            <div class="form-group">
              <select class="form-control">
                <option
                  v-for="(item, index) in this.states"
                  :key="index"
                  :value="item.name"
                >
                  {{ item.name }}
                </option>
              </select>
            </div>
          </div>
        </div>
      </tab-content>
      <tab-content title="Employment History">
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            {{ form.employment_histories }}
            <div class="form-group">
              <div
                v-for="(item, index) in form.employment_histories"
                :key="index"
              >
                <div>
                  <input type="text" v-model="item.organization" />
                  <input type="text" v-model="item.address" />
                  <input type="text" v-model="item.city" />
                  <input type="text" v-model="item.state" />
                  <input type="text" v-model="item.zip" />
                  <input type="text" v-model="item.phone" />
                  <input type="text" v-model="item.position" />
                  <input type="text" v-model="item.start_on" />
                  <input type="text" v-model="item.end_on" />
                  <input type="text" v-model="item.salary" />
                  <input type="text" v-model="item.reason_for_leaving" />
                </div>
                <button @click="removeEmployment(index)">Remove me</button>
              </div>
              <button @click="addEmployment">Add Employment History</button>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6"></div>
        </div>
      </tab-content>
      <tab-content title="Accident History">
        <div
          class="row"
          v-for="(item, index) in form.accident_histories"
          :key="index"
        >
          <div class="col-lg-6 col-md-6">
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <label>Accident Date</label>
                <input
                  type="date"
                  class="form-control"
                  placeholder="Accident Date"
                  v-model="form.date_of_application"
                />
              </div>
            </div>
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <label>Nature of Accident</label>
                <textarea
                  class="form-control"
                  cols="30"
                  rows="10"
                  v-model="item.nature_of_accident"
                ></textarea>
              </div>
            </div>
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <label>Fatalites</label>
                <textarea
                  class="form-control"
                  cols="30"
                  rows="10"
                  v-model="item.fatalities"
                ></textarea>
              </div>
            </div>
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <label>Injuries</label>
                <textarea
                  class="form-control"
                  cols="30"
                  rows="10"
                  v-model="item.injuries"
                ></textarea>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <button @click="removeAccident(index)">
              Remove Accident History
            </button>
          </div>
        </div>
        <div class="col-md-12 col-lg-12" >
          <button @click="addAccident" class="btn bg-primary text-white">Add Accident History</button>
        </div>
      </tab-content>
      <tab-content title="Experience History">
        <div
          class="row"
          v-for="(item, index) in form.experience_histories"
          :key="index"
        >
          <div class="col-lg-6 col-md-6">
            <div class="col-md-12 col-lg-12">
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
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <label>Equipment Type</label>
                 <input
                  type="text"
                  class="form-control"
                  placeholder="Equipment Type"
                  v-model="item.type"
                />
              </div>
            </div>
            <div class="col-md-12 col-lg-12">
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
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <label>Ended On</label>
                   <input
                  type="text"
                  class="form-control"
                  placeholder="Ended On"
                  v-model="item.end_on"
                />
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <button @click="removeExperience(index)">
              Remove Experience History
            </button>
          </div>
        </div>
        <div class="col-md-12 col-lg-12" >
          <button @click="addExperience" class="btn bg-primary text-white">Add Experience History</button>
        </div>
      </tab-content>
      <tab-content title="Education History">
        <div
          class="row"
          v-for="(item, index) in form.education_histories"
          :key="index"
        >
          <div class="col-lg-6 col-md-6">
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <label> Name</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Degree Name"
                  v-model="item.name"
                />
              </div>
            </div>
            <div class="col-md-12 col-lg-12">
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
            <div class="col-md-12 col-lg-12">
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
          </div>
          <div class="col-lg-6 col-md-6">
            <button @click="removeEducation(index)">
              Remove Education History
            </button>
          </div>
        </div>
        <div class="col-md-12 col-lg-12" >
          <button @click="addEducation" class="btn bg-primary text-white">Add Education History</button>
        </div>
      </tab-content>
      <tab-content title="License History">
        <div
          class="row"
          v-for="(item, index) in form.license_histories"
          :key="index"
        >
          <div class="col-lg-6 col-md-6">
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <label> License no</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Degree Name"
                  v-model="item.license_no"
                />
              </div>
            </div>
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <label>State</label>
                 <input
                  type="text"
                  class="form-control"
                  placeholder="State"
                  v-model="item.state"
                />
              </div>
            </div>
            <div class="col-md-12 col-lg-12">
              <div class="form-group">
                <label>License Type</label>
                   <input
                  type="date"
                  class="form-control"
                  placeholder="address"
                  v-model="item.type"
                />
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <button @click="removeLicense(index)">
              Remove License History
            </button>
          </div>
        </div>
        <div class="col-md-12 col-lg-12" >
          <button @click="addLicense" class="btn bg-primary text-white">Add License History</button>
        </div>
      </tab-content>
    </form-wizard>
  </div>
</template>

<script>
import "vue-step-wizard/dist/vue-step-wizard.css";
export default {
  name: "StepWizardForm",
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
      form: {
        first_name: null,
        middle_name: null,
        last_name: null,
        email: null,
        phone: null,
        date_of_application: null,
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
    };
  },
  methods: {
    addEmployment(e) {
      e.preventDefault();
      this.form.employment_histories.push({});
    },
    removeEmployment(index) {
      this.form.employment_histories.splice(index, 1);
    },
    addAccident(e) {
      e.preventDefault();
      this.form.accident_histories.push({});
    },
    removeAccident(index) {
      this.form.accident_histories.splice(index, 1);
    },
    addExperience(e) {
      e.preventDefault();
      this.form.experience_histories.push({});
    },
    removeExperience(index) {
      this.form.experience_histories.splice(index, 1);
    },
    addEducation(e) {
      e.preventDefault();
      this.form.education_histories.push({});
    },
    removeEducation(index) {
      this.form.education_histories.splice(index, 1);
    },
    addLicense(e) {
      e.preventDefault();
      this.form.license_histories.push({});
    },
    removeLicense(index) {
      this.form.license_histories.splice(index, 1);
    },
  },
};
</script>

<style lang="scss">
// div.step-header {
//   // display: none !important;
// }
.vue-step-wizard{
  width:  auto !important;
}
</style>