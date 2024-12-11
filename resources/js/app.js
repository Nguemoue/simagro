import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

Echo.channel('test').listen('.test-event',function (payload) {
    console.log(payload)
})
//console.log('dede')
