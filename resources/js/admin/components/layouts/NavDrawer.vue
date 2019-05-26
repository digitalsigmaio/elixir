<template>
    <v-navigation-drawer
            fixed
            v-model="drawer"
            app
    >
        <v-list dense>
            <v-list-tile @click="">
                <v-list-tile-action>
                    <v-icon>home</v-icon>
                </v-list-tile-action>
                <v-list-tile-content>
                    <v-list-tile-title>Home</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile @click="">
                <v-list-tile-action>
                    <v-icon>contact_mail</v-icon>
                </v-list-tile-action>
                <v-list-tile-content>
                    <v-list-tile-title>Contact</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
    import {mapMutations, mapGetters} from 'vuex';

    export default {
        name: "NavDrawer",
        computed: {
            ...mapGetters(['getDrawer']),
            drawer: {
                get: function () {
                    return this.getDrawer;
                },
                set: function (val) {
                    this.changeDrawer(val);
                }
            }
        },
        methods: {
            ...mapMutations(['changeDrawer'])
        }
    }
</script>

<style scoped>

</style>