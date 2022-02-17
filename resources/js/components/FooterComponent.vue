<template>
    <v-footer
        dark
        padless
        class="secondary "
    >
        <v-container fluid>
            <v-row>
                <v-col cols="12" lg="3" md="4">
                    <description-component />
                </v-col>
                <v-col cols="12" lg="3" md="4">
                    <about-us-list-component />
                </v-col>
                <v-col cols="12" lg="3" md="4">
                    <custom-care-component />
                </v-col>
                <v-col cols="12" lg="3" md="4">
                    <contact-us-list-component />
                </v-col>
            </v-row>
        </v-container>
    </v-footer>
</template>

<script>
import DescriptionComponent from "./DescriptionComponent"
import AboutUsListComponent from "./AboutUsListComponent"
import CustomCareComponent from "./CustomCareComponent"
import ContactUsListComponent from "./ContactUsListComponent"

export default {
    components: {ContactUsListComponent, AboutUsListComponent, DescriptionComponent,CustomCareComponent},
    data : () =>({

    })
}
</script>
