<template>
    <div id="appbar">
        <v-app-bar elevation="1" color="white" >
               <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
               <v-toolbar-title>Joy</v-toolbar-title>
            <v-spacer></v-spacer>
                <v-text-field
                    class="fill-height py-0 mt-6"
                    placeholder="Rechercher"
                    outlined
                    dense
                    color="#3665f3"
                >
                    <template v-slot:prepend-inner>
                        <v-menu offset-y>
                            <template v-slot:activator="{ on, attrs }">
                                <v-btn
                                    style=" margin-top: -7px !important;"
                                    v-bind="attrs"
                                    v-on="on"
                                    elevation="0"
                                    color="white"
                                >
                                    All <v-icon>mdi-menu-down</v-icon>
                                </v-btn>
                            </template>
                            <v-list>
                                <v-list-item l @click="() => {}" >
                                    <v-list-item-title> <v-icon>mdi-tshirt-crew</v-icon> Clothing</v-list-item-title>
                                </v-list-item>
                            </v-list>
                        </v-menu>
                    </template>

                    <template v-slot:append>
                                <v-btn style=" margin-top: -7px !important;" rounded elevation="0" color="#3665f3">
                                    <span style="color:white;"><v-icon>mdi-magnify</v-icon></span>
                                </v-btn>
                    </template>
                </v-text-field>
            <v-spacer></v-spacer>
            <v-toolbar-items>
                    <router-link class="v-btn v-btn--active v-btn--flat theme--light v-btn--rounded v-size--default" to="/">
                            <v-icon color="#ff9900">mdi-home</v-icon>
                    </router-link>
                    <v-menu
                        left
                        bottom
                    >
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn
                                icon
                                v-bind="attrs"
                                v-on="on"
                                link
                            >
                                <v-icon>mdi-translate</v-icon>
                            </v-btn>
                        </template>

                        <v-list>
                            <v-list-item  @click="() => {}">
                                <v-list-item-title>Arabic</v-list-item-title>
                            </v-list-item>
                            <v-list-item  @click="() => {}">
                                <v-list-item-title>English</v-list-item-title>
                            </v-list-item>
                            <v-list-item  @click="() => {}">
                                <v-list-item-title>French</v-list-item-title>
                            </v-list-item>
                        </v-list>
                    </v-menu>

                <router-link class="v-btn v-btn--flat theme--light v-btn--rounded v-size--default" to="/">
                    <v-icon @click="loginForward">mdi-account</v-icon>
                </router-link>

                <router-link class="v-btn v-btn--flat theme--light v-btn--rounded v-size--default" to="/">
                    <v-icon>mdi-cart-variant</v-icon>
                </router-link>
            </v-toolbar-items>
        </v-app-bar>
        <v-navigation-drawer
            v-model="drawer"
            absolute
            temporary
        >
            <v-list-item @click="() => {}">
                <v-list-item-avatar>
                    <v-img src="https://w7.pngwing.com/pngs/340/956/png-transparent-profile-user-icon-computer-icons-user-profile-head-ico-miscellaneous-black-desktop-wallpaper.png"></v-img>
                </v-list-item-avatar>

                <v-list-item-content>
                    <v-list-item-title>Sign in</v-list-item-title>
                </v-list-item-content>
                <v-list-item-action>
                    <v-btn small @click.stop="drawer = !drawer" elevation="0" color="white" fab depressed>
                        <v-icon>mdi-close</v-icon>
                    </v-btn>
                </v-list-item-action>
            </v-list-item>

            <v-divider role="separator" ></v-divider>

            <v-list>
                <v-list-item>
                    <v-list-item-icon>
                        <v-icon>mdi-brightness-6</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Dark mode</v-list-item-title>
                    </v-list-item-content>
                    <v-list-item-action>
                        <v-switch
                            color="black"
                            v-model="switch1"
                        ></v-switch>
                    </v-list-item-action>
                </v-list-item>

                <v-list-item>
                    <v-list-item-icon>
                        <v-icon>mdi-account-plus</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>Register</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-subheader>Categories</v-subheader>

                <v-list-item v-for="(value,index) in 6" :key="index" @click="()=>{}">
                    <v-list-item-icon>
                        <v-icon>mdi-tshirt-crew</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>clothing</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-subheader>Links</v-subheader>

                <v-list-item @click="()=>{}">
                    <v-list-item-content>
                        <v-list-item-title>Contact-us</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-divider></v-divider>
                <copyright-component />
            </v-list>
        </v-navigation-drawer>
        <modal-component :dialog="dialog"  @cs="cs" />
    </div>
</template>


<script>
import CopyrightComponent from "../CopyrightComponent";
import ModalComponent from "../ModalComponent";
export default {
    data () {
        return {
            toggle_exclusive: undefined,
            drawer : null,
            switch1 : false,
            dialog : false,
        }
    },
    methods : {
       loginForward()
       {

           if(this.$store.state.isLogged)
           {
               this.$router.push('/account')
           }else{
               this.dialog = true
           }
       },
        cs()
        {
           this.dialog = false
        }
    },
    components : {
        ModalComponent,
        CopyrightComponent
    }
}
</script>
