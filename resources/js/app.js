import {createApp} from 'vue';
import exampleComponent from "./components/ExampleComponent.vue";
import bulletinItemComponent from "./components/BulletinItemComponent.vue";
import bulletinContainerComponent from "./components/BulletinContainerComponent.vue";

require('./bootstrap');

let app = createApp({
    components: {
        exampleComponent,
        bulletinItemComponent,
        bulletinContainerComponent
    }
}).mount("#app")
