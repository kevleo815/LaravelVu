<template>
    
<v-container>

  <ul>
    <li v-for="item in count" :key='item'>
        <v-card class="mx-auto" max-width="400">
          <v-img class="white--text align-end" height="200px" src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"></v-img>
            <v-card-title>
                AeroLinea:  {{ item.aerolinea }}
            </v-card-title>
            <v-card-text class="text--primary">
              Precio: {{ item.precio }} <br>
              num: {{ item.precio }} <br>
              Precio: {{ item.precio }} <br>
              Número de escalas: {{ item.numEscalas }} <br>
              Duración del vuelo: {{ item.duracion }} <br>
            </v-card-text>
              
            
          
        </v-card>
        
    </li>
  </ul>

 
</v-container>
</template>

<script>
import { mapState } from "vuex";

  export default {
    computed:mapState({
      count: function(state){
        
        return state.count;  
        
      }
    })


    

}
</script>