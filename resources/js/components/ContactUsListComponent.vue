<template>
    <div class="contact-us text-center">
        <h2 class="mb-5">Contact us</h2>
        <v-list color="transparent" dense>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-title style="font-size: 14px;"><p class="footer-text">Log cem attba djilali z06 chorfa chlef</p></v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-title style="font-size: 14px;"><p class="footer-text">Email : hocine.arab1@hotmail.com</p></v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            <v-list-item>
                <v-list-item-content>
                    <v-list-item-title style="font-size: 14px;"><p class="footer-text"><p class="footer-text">Phone : +213699687499</p></v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-list>
        <v-btn
            v-for="icon in icons"
            :key="icon"
            class="mx-4 white--text"
            icon
        >
            <v-icon size="24px">
                {{ icon }}
            </v-icon>
        </v-btn>
    </div>
</template>

<script>
export default {
    data: () => ({
        icons: [
            'mdi-facebook',
            'mdi-twitter',
            'mdi-linkedin',
            'mdi-instagram',
        ],
    }),
}
</script>
