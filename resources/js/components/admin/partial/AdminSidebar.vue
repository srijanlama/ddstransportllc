<template>
  <div>
    <div></div>
    <div>
      <ul>
        <template v-for="(item , index) in routes">
                  <li :key="index"><a :href="route(item.name).url()">Drivers</a></li>
        </template>

      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "AdminSidebar",
  data(){
      return {
          routes: [
              {
                  name: 'admin.driver.index',
                  title: 'Driver'
              },
          ]
      }
  }
};
</script>

<style lang="scss" scoped>
</style>