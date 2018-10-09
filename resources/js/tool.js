import VueQr from 'vue-qr'
 
Nova.booting((Vue, router) => {
    Vue.component('vue-qr', VueQr);
})