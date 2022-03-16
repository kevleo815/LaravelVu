<template>
  <v-app>
    <v-main>
      <h1>Inicio</h1>
      <div class="my-2">
        <router-link :to="{name:'buscar'}">
          <v-btn color="warning" dark> Buscar Tickets </v-btn>
        </router-link>

        <router-view></router-view>
      </div>
    </v-main>
    
  </v-app>
</template>

<script>
export default {
  name: "App",
  componens: {},

  data: () => ({
    //
  }),
};
</script>
