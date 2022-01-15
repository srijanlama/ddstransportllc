<template>
  <div>
    <div></div>
    <div>
      <ul>
        <template v-for="(item , index) in routes">
                  <li :key="index"><a :href="route(item.name)"> <i v-if="item.icon" :class="item.icon"></i>Drivers</a></li>
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
                  title: 'Driver',
                  icon:'fas fa-home'
              },
          ]
      }
  }
};
</script>

<style lang="scss" scoped>
</style>