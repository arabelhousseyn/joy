<template>
    <div id="appbar">
        <v-app-bar elevation="0" color="white" >
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
                                <v-list-item  @click="() => {}" >
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
                            <v-btn v-bind="attrs" v-on="on" link elevation="0" color="white"
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

                <v-btn elevation="0" color="white"class="v-size--default" @click="forward('/account')">
                    <v-icon >mdi-account</v-icon>
                </v-btn>

                <v-btn elevation="0" color="white"class="v-size--default" @click="forward('/cart')">
                    <v-icon>mdi-cart-variant</v-icon>
                </v-btn>
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

                <v-list-item @click="()=>{}">
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
        <v-dialog
            v-model="dialog"
            width="500px"
        >
            <v-card>
                <div class="px-3 px-md-10 py-8 ">
                    <h3 class="mb-3 text-center">Welcome To Joy</h3>
                    <h5 class="font-600 grey--text text--darken-3 text-sm mb-9 text-center">Log in with email & password</h5>
                    <form @submit.prevent="test" method="post">
                        <p class="text-14 mb-1">Phone *</p>
                        <v-text-field
                            placeholder="Phone *"
                            outlined
                            dense
                            color="#3665f3"
                        ></v-text-field>

                        <p class="text-14 mb-1">Password *</p>
                        <v-text-field
                            :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                            :type="show1 ? 'text' : 'password'"
                            placeholder="Password *"
                            counter
                            outlined
                            color="#3665f3"
                            @click:append="show1 = !show1"
                        ></v-text-field>
                        <v-btn type="submit" block color="#ff9900">
                            <span style="color:white;">Login</span>
                        </v-btn>
                    </form>
                    <div class="d-flex align-center my-1">
                        <v-divider></v-divider>
                        <span class="mx-4">Or</span>
                        <v-divider></v-divider>
                    </div>
                    <v-btn class="mb-4" block color="#4e5fbb">
                        <v-icon color="white" left>mdi-facebook</v-icon>
                        <span style="color:white;">Continue with facebook</span>
                    </v-btn>

                    <v-btn block color="#2b81d6">
                        <v-icon color="white" left>mdi-google</v-icon>
                        <span style="color:white;">Continue with google</span>
                    </v-btn>
                    <div class="text-14 text-center my-3">
                        Don't have account? <a style="text-decoration:underline;" href="/signup">Sign Up</a>
                    </div>
                </div>
                <div class="py-4 grey lighten-2">
                    <div class="text-center">
                        Forgot Your Password <a class="ms-2" style="text-decoration:underline;" href="/reset">Reset It</a>
                    </div>
                </div>
            </v-card>
        </v-dialog>
    </div>
</template>


<script>
import CopyrightComponent from "../CopyrightComponent";
export default {
    data () {
        return {
            toggle_exclusive: undefined,
            drawer : null,
            switch1 : false,
            dialog : false,
            show1 : false,
        }
    },
    methods : {
       forward(params)
       {

           if(this.$store.state.isLogged)
           {
               this.$router.push(params)
           }else{
               this.dialog = true
           }
       },
        test(){
           console.log('test')
        }
    },
    components : {
        CopyrightComponent
    }
}
</script>
