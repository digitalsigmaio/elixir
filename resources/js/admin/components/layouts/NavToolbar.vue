<template>
    <v-toolbar color="indigo" dark fixed app>
        <v-toolbar-side-icon @click.stop="changeDrawer(!getDrawer)"></v-toolbar-side-icon>
        <v-toolbar-title>Application</v-toolbar-title>
    </v-toolbar>
</template>

<script>
    import {mapMutations, mapGetters} from 'vuex';

    export default {
        name: "NavToolbar",
        data() {
            return {
                //
            }
        },
        computed: {
            ...mapGetters(['getDrawer'])
        },
        methods: {
            ...mapMutations(['changeDrawer']),
        }
    }
</script>

<style scoped>

</style>