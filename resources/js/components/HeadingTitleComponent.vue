<template>
    <v-subheader>
        <div class="row align-center">
            <v-avatar height="48" width="48" min-width="48" rounded >
                <v-icon class="primary--text" large>{{ icon }}</v-icon>
            </v-avatar>
            <div cols="10" class="o-section-heading__content">
                <span style="font-weight: bold;font-size: 18px;">{{ title }}</span>
            </div>
        </div>
    </v-subheader>
</template>

<script>
export default {
    props:['title','icon']
}
</script>
