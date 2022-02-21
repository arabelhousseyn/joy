<template>
    <div class="category-bread-crumbs">
        <v-breadcrumbs pro>
            <v-breadcrumbs-item class="mt-2">
                <v-menu offset-y>
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            color="primary"
                            dark
                            v-bind="attrs"
                            v-on="on"
                            depressed
                            small
                        >
                            Auto <v-icon>mdi mdi-menu-down</v-icon>
                        </v-btn>
                    </template>
                    <v-list>
                        <v-list-item
                            v-for="(item, index) in items"
                            :key="index"
                            link
                        >
                            <v-list-item-title>{{ item.title }}</v-list-item-title>
                        </v-list-item>
                    </v-list>
                </v-menu>
            </v-breadcrumbs-item>
            <v-breadcrumbs-divider><v-icon style="font-size: 24px;" class="primary--text mt-2">mdi-chevron-right</v-icon></v-breadcrumbs-divider>
            <v-breadcrumbs-item class="mt-2">
                <v-menu offset-y>
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            color="primary"
                            dark
                            v-bind="attrs"
                            v-on="on"
                            depressed
                            small
                            outlined
                        >
                            View more <v-icon>mdi mdi-menu-down</v-icon>
                        </v-btn>
                    </template>
                    <v-list>
                        <v-list-item
                            v-for="(item, index) in items"
                            :key="index"
                            link
                        >
                            <v-list-item-title>{{ item.title }}</v-list-item-title>
                        </v-list-item>
                    </v-list>
                </v-menu>
            </v-breadcrumbs-item>
        </v-breadcrumbs>
    </div>
</template>

<script>
export default {
    data: () => ({
        items: [
            { title: 'Click Me' },
            { title: 'Click Me' },
            { title: 'Click Me' },
            { title: 'Click Me 2' },
        ],
    }),
}
</script>
