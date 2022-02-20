<template>
    <div class="category">
        <v-container fluid>
            <title-category-component />
            <v-row>
                <v-col cols="3">

                </v-col>
                <v-col cols=9>

                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>
import TitleCategoryComponent from "../components/TitleCategoryComponent"
export default {
    components: { TitleCategoryComponent},
    data : () => ({

    }),
    created() {

    }
}
</script>
