<template>
    <div class="contact-us text-center">
        <h2 class="mb-5">Contact us</h2>
        <p class="footer-text">Log cem attba djilali z06 chorfa chlef</p>
        <p class="footer-text">Email : hocine.arab1@hotmail.com</p>
        <p class="footer-text">Phone : +213699687499</p>
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
