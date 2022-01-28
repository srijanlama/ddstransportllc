<template>
  <div class="sidebar-content">
    <div class="branding">
      <h5 class="mx-3">Trucking</h5>
    </div>
    <div class="menu-wrapper">
      <ul class="list-group">
        <template v-for="(item , index) in routes">
                  <li :key="index"  class="list-group-item side-list"><a :href="route(item.name)"> <i v-if="item.icon" :class="item.icon" class="mx-1" ></i>{{item.title}}</a>          
                  </li>
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
                  name: 'admin.dashboard',
                  title: 'Dashboard',
                  icon:'fas fa-tachometer-alt',
              },
              {
                  name: 'admin.driver.index',
                  title: 'Driver',
                  icon:'fas fa-car',
              },
              {
                  name: 'admin.setting.form',
                  title: 'Setting',
                  icon:'fas fa-cog'
              },
          ]
      }
  },
  methods: {
  }
};
</script>

<style lang="scss" scoped>
.branding h5  {
  padding: 0.5rem 1rem;
  text-transform: uppercase;
  font-weight: bold;
}
.sidebar-content{
  padding: 1rem;
  margin-top: 3rem ;
}
div.branding {
  min-height: 48px;
}
li.side-list{
  border: none !important;
  position: relative;
}
li.side-list a{
  color: #666 !important;
}

</style>