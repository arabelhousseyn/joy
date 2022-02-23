<template>
    <div class="search-page">
        welcome to search page
    </div>
</template>


<script>
export default{
    mounted() {
        // check if the last path name splited is default search or not by using pop method
        let link = window.location.pathname.split('/').pop()
        // check if the search exists
        let params = window.location.search
        if(params == '' || link == 'search')
        {
            window.location.href = '/'
        }

    }
}
</script>
