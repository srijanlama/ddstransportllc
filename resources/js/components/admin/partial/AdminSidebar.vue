<template>
  <div>
    <div></div>
    <div>
      <ul>
        <li><a>Drivers</a></li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "AdminSidebar",
  data(){
      return {
          listItems: [
              {
                  name: 'Driver'
              },
          ]
      }
  }
};
</script>

<style lang="scss" scoped>
</style>