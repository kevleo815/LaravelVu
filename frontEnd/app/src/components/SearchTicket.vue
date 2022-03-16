<template>
  <v-form v-model="valid">
    <v-container>
      <v-row>
        <v-col cols="12" md="4">
          <v-text-field
            v-model="firstname"
            :rules="nameRules"
            :counter="10"
            label="Ciudad de origen"
            required
          ></v-text-field>
        </v-col>

        <v-col cols="12" md="4">
          <v-text-field
            v-model="firstname"
            :rules="nameRules"
            :counter="10"
            label="Ciudad de destino"
            required
          ></v-text-field>
        </v-col>
        <v-col cols="6" md="4">
          <h3>Hora de salida</h3>
          <v-date-picker v-model="picker"></v-date-picker>
        </v-col>
        <v-col cols="6" md="4">
          <h3>Hora de regreso</h3>
          <v-date-picker v-model="picker"></v-date-picker>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="3">
          <div class="my-2">
            <router-link :to="{ name: 'listarTickets' }">
              <v-btn color="warning" dark> Buscar Tickets </v-btn>
            </router-link>

            <router-view></router-view>
          </div>
        </v-col>
      </v-row>
    </v-container>
  </v-form>
</template>
<script>
export default {
  data: () => ({
    valid: false,
    firstname: "",
    lastname: "",
    nameRules: [
      (v) => !!v || "Name is required",
      (v) => v.length <= 10 || "Name must be less than 10 characters",
    ],
    email: "",
    emailRules: [
      (v) => !!v || "E-mail is required",
      (v) => /.+@.+/.test(v) || "E-mail must be valid",
    ],
  }),
};
</script>