<template>
    <div class="reset">
     <v-container class="d-flex justify-content-center mt-10">
         <div  class="flex-column" style="width: 400px;">
             <div class="text-center">
                 <h1>logo</h1>
             </div>
             <v-card>
                 <v-list class="py-0">
                     <v-list-item @click="backToHome">
                         <v-list-item-avatar><v-icon>mdi mdi-undo</v-icon></v-list-item-avatar>
                         <v-list-item-title>Home</v-list-item-title>
                     </v-list-item>
                 </v-list>
             </v-card>

             <v-card class="mt-5">
                 <v-card-title class="text-center font-weight-bold text-h5 text-no-wrap" style="color: #3665f3;">Reset password</v-card-title>
                 <v-card-text>
                     <form @submit.prevent="reset" method="get">
                         <v-text-field
                             placeholder="Email *"
                             outlined
                             dense
                             color="#3665f3"
                         ></v-text-field>
                         <v-btn type="submit" elevation="0" block color="#ff9900"><span style="color: white;">Reset it!</span></v-btn>
                     </form>
                 </v-card-text>
             </v-card>
         </div>
     </v-container>
    </div>
</template>

<script>
export default {
    data : ()=>{
        return{

        }
    },
    methods : {
        reset()
        {
            console.log('clicked')
        },
        backToHome()
        {
           window.location.href = '/'
        }
    }
}
</script>
