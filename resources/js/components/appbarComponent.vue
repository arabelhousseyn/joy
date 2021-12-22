<template>
    <div id="appbar">
        <v-toolbar style="background-color: #0f3460;" flat dark dense>
            <div class="container py-0 fill-height">
                <v-icon small dark left> mdi-phone-outline</v-icon> <a  style="text-decoration:none; color:white;" href="tel:0699687499">0699687499</a>

                <v-icon class="ml-6" small dark left>mdi-email-outline</v-icon> <a style="text-decoration:none; color:white;" href="mailto:hocine.arab1@hotmail.com">hocine.arab1@hotmail.com</a>
                <v-spacer></v-spacer>
                <v-menu>
                    <template v-slot:activator="{ on: menu, attrs }">
                                <v-btn
                                    style="background-color:transparent;"
                                    dark
                                    v-bind="attrs"
                                    v-on="{...menu }"
                                >
                                    <v-icon>mdi-ab-testing</v-icon>
                                </v-btn>
                    </template>
                    <v-list dense>
                        <v-list-item link>
                            <v-list-item-title>FR</v-list-item-title>
                        </v-list-item>
                    </v-list>
                </v-menu>
            </div>
        </v-toolbar>
    </div>
</template>

<script>
export default {
}
</script>
