import Vue from 'vue'
import Vuex, { Store } from 'vuex'

Vue.use(Vuex)

const store= new Vuex.Store({
    state:{
        count:[
            {"precio": "120", "aerolinea":"tame", "numEscalas": "10", "duracion": "2 horas"},
            {"precio": "200", "aerolinea":"asd", "numEscalas": "2", "duracion": "12 horas"},
            {"precio": "250", "aerolinea":"ddddd", "numEscalas": "5", "duracion": "3 horas"},
            {"precio": "300", "aerolinea":"wqqqqqqq", "numEscalas": "3", "duracion": "6 horas"},
            {"precio": "600", "aerolinea":"rrrrrrrrrr", "numEscalas": "5", "duracion": "8 horas"}
        ]
    }

});

export default store;