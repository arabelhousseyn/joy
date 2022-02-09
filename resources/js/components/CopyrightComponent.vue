<template>
    <div class="text-center">
        <span>&copy All right reserved {{formatYear}}.</span>
    </div>
</template>

<script>
 export default {
     data : ()=>{
         return{
             formatYear : ''
         }
     },
     created() {
         this.formatYear = (new Date().getFullYear() == '2022') ? '2022' : this.formatYear = `2022-${new Date().getFullYear()}`
     }
 }
</script>
