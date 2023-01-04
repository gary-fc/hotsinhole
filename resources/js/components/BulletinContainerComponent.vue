<template>
    <section class="hsh-bulletin-container-component">
        <bulletin-item-component v-for="(item,index) in this.bulletins"
                                 :bulletin-id="item.id"
                                 :bulletin="item"></bulletin-item-component>
    </section>
</template>

<script>
import bulletinItemComponent from "./BulletinItemComponent.vue";

export default {
    components: {
        bulletinItemComponent
    },
    props: {
        bulletins: {
            type: Array,
            default: () => [],
            require: true
        }
    },
    name: "BulletinContainerComponent",
    mounted() {
        console.log(this.bulletins);
    }
}
</script>

<style scoped>

</style>
