window.Vue = require('vue');

window.moment = require('moment');
Vue.filter('timeformat',function(arg){
 return moment(arg).locale('vi').calendar()
});