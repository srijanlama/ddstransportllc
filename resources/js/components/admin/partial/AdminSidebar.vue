<template>
  <div class="sidebar-content">
    <div class="branding">
      <h5>Trucking Company</h5>
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
                  name: 'admin.driver.index',
                  title: 'Driver',
                  icon:'fas fa-home',
                  children: {
                    path: ''
                  }
              },
              {
                  name: 'admin.driver.index',
                  title: 'User',
                  icon:'fas fa-user'
              },
              {
                  name: 'admin.driver.index',
                  title: 'Shippment',
                  icon:'fas fa-home'
              },
          ]
      }
  },
  methods: {
  }
};
</script>

<style lang="scss" scoped>
.sidebar-content{
  padding: 1rem;
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