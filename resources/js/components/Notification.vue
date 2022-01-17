<template>
  <div class="notification-wrapper">
    <div
      :class="'notification alert alert-dismissible ' + alertClass"
      v-show="show"
      @click="destroyNotification"
      role="alert"
    >
      <span>{{ notification }}</span>
      <button
        type="button"
        class="close"
        data-dismiss="alert"
        aria-label="Close"
      >
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</template>

<style>
.notification-wrapper {
  position: fixed;
  bottom: 10px;
  right: 10px;
  z-index: 1040;
}
</style>

<script>
export default {
  props: ["type", "message"],
  name: "Notification",
  data() {
    return {
      show: false,
      notification: this.message,
      alertClass: this.type,
      hideTimeout: false,
    };
  },
  created() {
    if (this.notification) {
      this.showNotification();
    }
    window.events.$on("showNotification", (message, type) => {
        console.log("clicked")
        return
      this.notification = message;
      this.alertClass = type;
      this.showNotification();
    });
  },
  methods: {
    showNotification() {
      this.show = true;
      this.hideNotification();
    },
    hideNotification() {
      this.hideTimeout = setTimeout(() => {
        this.show = false;
      }, 5000);
    },
    destroyNotification() {
      this.show = false;
      clearTimeout(this.hideTimeout);
    },
  },
};
</script>