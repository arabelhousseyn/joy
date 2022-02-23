<template>
    <div class="search-page">
        welcome to search page
    </div>
</template>


<script>
export default {
    mounted() {
        let link = window.location.pathname.split('/').pop()
        let params = window.location.search
        if(params == '' || link == 'search')
        {
            window.location.href = '/'
        }
    }
}
</script>
