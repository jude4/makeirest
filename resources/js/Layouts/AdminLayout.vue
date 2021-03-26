<template>
<!-- App.vue -->

<v-app>
  <v-navigation-drawer app>
    <!-- -->
  </v-navigation-drawer>

  <v-app-bar app>
    <!-- -->
  </v-app-bar>

  <!-- Sizes your content based upon application components -->
  <v-main>

    <!-- Provides the application the proper gutter -->
    <v-container fluid>
        <v-btn> <v-icon>mdi-chevron-up</v-icon> Welcome </v-btn>
        <vs-button> Hello </vs-button>
        <slot> </slot>
    </v-container>
  </v-main>

  <v-footer app>
    <!-- -->
  </v-footer>
</v-app>

</template>

<script>
export default {

}
</script>

<style>

</style>