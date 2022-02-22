<template>
    <div class="head-information-product">
        <div class="title-contact mt-10 d-flex flex-row">
            <v-avatar><v-icon large class="primary--text">{{ icon }}</v-icon></v-avatar><h2 class="mt-2"> {{title}}</h2>
        </div>
    </div>
</template>

<script>
export default {
    props : ['icon','title']
}
</script>
