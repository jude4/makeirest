import Vue from 'vue';
import '@mdi/font/css/materialdesignicons.css'
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css'
// import Vuetify from 'vuetify/lib'

Vue.use(Vuetify);

export default new Vuetify({
    icons: {
        iconfont: 'mdi',
      },
    
      theme: {
        options: {
          customProperties: true,
        },
        themes: {
          light: {
            primary: '#c80352',
            secondary: '#f8f8f8',
            accent: '#91003a',
            error: '#Ff0000',
            info: '#2196F3',
            success: '#04c538',
            warning: '#FFC107',
            background: '#eaf2ee',
            rowtext: '#707070',
            inactive_button: '#5B6C71',
            pending: '#ff7700',
            smile: '#ffef00',
            selected_row: '#eeeeee',
            transperent: '#000000',
            white:'#ffffff',
          },
    
          dark: {
            primary: '#009688',
            secondary: '#ffffff',
            accent: '#82B1FF',
            error: '#FF5252',
            info: '#2196F3',
            success: '#4CAF50',
            warning: '#FFC107',
          }
        },
      }
});
