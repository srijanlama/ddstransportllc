<template>
  <div>
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white shadow-sm py-2 mb-3 px-3">
          <li class="breadcrumb-item">
            <a :href="route('admin.dashboard')">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
            <a :href="route('admin.driver.index')">Driver</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">show</li>
        </ol>
      </nav>
    </div>
    <div class="bg-white shadow-sm card-body profile-content">
      <div>
        <a
          :href="route('admin.driver.index')"
          class="btn btn-sm bg-primary text-white"
          >Go to Driver List</a
        >
      </div>
      <div class="basic-info">
        <div class="row">
          <h5>Driver Basic Info</h5>
          <div class="my-5">
            <div class="row">
              <div class="col-md-4 col-lg-4">
                <img
                  :src="
                    this.driver.profile_picture ==
                    '/img/user/driver/default.png'
                      ? `/storage/img/user/driver/${this.driver.profile_picture}`
                      : `/img/user/driver/default.png`
                  "
                  alt=""
                  class="img-thumbnail"
                  style="max-width: 120px !important"
                />
              </div>
              <div class="col-md-4 col-lg-4">
                <FormulateForm @submit="submitHandler">
                  <FormulateInput
                    type="image"
                    label="Select an image to upload"
                    help="Select a png, jpg or gif to upload."
                    validation="mime:image/jpeg,image/png,image/gif"
                    :uploader="uploadPicture"
                  />
                  <button type="submit" class="btn btn-sm bg-primary text-white">Upload Profile Picture</button>
                </FormulateForm>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            Driver Name :
            <strong>{{ driver.first_name + " " + driver.last_name }}</strong>
          </div>
          <div class="col-md-4">
            Email : <strong>{{ driver.email }}</strong>
          </div>
          <div class="col-md-4">
            Phone : <strong>{{ driver.phone }}</strong>
          </div>
          <div class="col-md-4">
            Address :
            <strong>{{ driver.first_name + " " + driver.last_name }}</strong>
          </div>
          <div class="col-md-4">
            Date of Birth : <strong>{{ driver.dob }}</strong>
          </div>
          <div class="col-md-4">
            Age : <strong>{{ driver.age }}</strong>
          </div>
          <div class="col-md-4 col-lg-4">
            Expected Salary : <strong>{{ driver.expected_salary }}</strong>
          </div>
        </div>
      </div>
      <div class="employments">
        <h5>Experience History</h5>
        <div
          class="employment"
          v-for="(item, index) in driver.employment_histories"
          :key="index"
        >
          <div class="row">
            <div class="col-md-6 col-lg-6">
              Organization Name : <strong>{{ item.organization }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Full Address :
              <strong>{{
                item.address + " " + item.state + " " + item.zip
              }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Position : <strong>{{ item.position }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Salary: <strong>{{ item.salary }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Job Duration :
              <strong class="badge bg-danger">{{ item.start_on }}</strong>
              <strong class="badge bg-danger">{{ item.end_on }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Reason For Leaving :
              <strong>{{ item.reason_for_leaving }}</strong>
            </div>
          </div>
        </div>
      </div>
      <div class="accidents">
        <h5>Accident History</h5>
        <div
          class="accdient"
          v-for="(item, index) in driver.accident_histories"
          :key="index"
        >
          <div class="row">
            <div class="col-md-6 col-lg-6">
              Accident Date:
              <strong class="badge bg-danger">{{ item.accident_date }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Nature of Accident :
              <strong>{{ item.nature_of_accident }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Fatalaties : <strong>{{ item.fatalities }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Injuries: <strong>{{ item.injuries }}</strong>
            </div>
          </div>
        </div>
      </div>
      <div class="experiences">
        <h5>Experience History</h5>
        <div
          class="experience"
          v-for="(item, index) in driver.experience_histories"
          :key="index"
        >
          <div class="row">
            <div class="col-md-6 col-lg-6">
              Class Of Equipment: <strong>{{ item.class_of_equipment }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Equipment Type:
              <strong>{{ item.equipment_type }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Job Duration :
              <strong class="badge bg-danger">{{ item.start_on }}</strong>
              <strong class="badge bg-danger">{{ item.end_on }}</strong>
            </div>
          </div>
        </div>
      </div>
      <div class="educations">
        <h5>Education History</h5>
        <div
          class="accdient"
          v-for="(item, index) in driver.education_histories"
          :key="index"
        >
          <div class="row">
            <div class="col-md-6 col-lg-6">
              Name: <strong>{{ item.name }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Organization :
              <strong>{{ item.organization }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              Address : <strong>{{ item.address }}</strong>
            </div>
          </div>
        </div>
      </div>
      <div class="licenses">
        <h5>licenses History</h5>
        <div
          class="license"
          v-for="(item, index) in driver.license_histories"
          :key="index"
        >
          <div class="row">
            <div class="col-md-6 col-lg-6">
              License No: <strong>{{ item.license_no }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              License Denied on Past:
              <strong>{{ item.license_denied_on_past ? "Yes" : "No" }}</strong>
            </div>
            <div class="col-md-6 col-lg-6">
              License Revoked On Past :
              <strong>{{ item.license_revoked_on_past ? "Yes" : "No" }}</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "DriverShow",
  props: {
    driver: {
      type: Object,
      default() {
        return {};
      },
    },
  },
  data() {
    return {
      form: {
        profile_picture: null,
      },
    };
  },
  methods: {
    submitHandler() {
      if (this.form.profile_picture == null) {
        alert("Please Upload Profile Picture First");
        return;
      }
      let form_data = new FormData();
      form_data.append("profile_picture", this.form.profile_picture);
      // console.log(form_data.get('profile_picture'));
      // return
      axios
        .post(route("api.admin.driver.avatar", this.driver.id), form_data, {
          headers: {
            "content-type": "multipart/form-data",
          },
        })
        .then((res) => console.log(res))
        .catch((err) => console.log(err));
    },
    uploadPicture(file, progress, error, options) {
      this.form.profile_picture = file;
    },
  },
};
</script>

<style lang="scss" scoped>
.profile-content > div {
  border-bottom: 1px solid #f6f6f6 !important;
  h5 {
    font-weight: 800 !important;
    text-transform: uppercase !important;
    color: #666 !important;
  }
  padding-bottom: 1.5rem;
  margin-bottom: 1.5rem;
}
.profile-content {
  strong {
    margin: 0 0.5rem !important;
  }
}
.employment,
.educaiton,
.accident,
.license,
.experience {
  margin: 1.5rem 0 !important;
}
</style>