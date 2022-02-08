<template>
    <div >
        <v-app style="background-color: #f5f5f5 !important;">
            <progress-component />
            <appbar-component />
            <navbar-component />
            <main-component />
        </v-app>
    </div>
</template>
<script>
import appbarComponent from '../components/appbarComponent'
import progressComponent from '../components/progressComponent'
import NavbarComponent from "../components/navbarComponent";
import MainComponent from "../components/mainComponent";

export default {
    components : {
        MainComponent,
        NavbarComponent,
        appbarComponent,
        progressComponent
    }
}
</script>
