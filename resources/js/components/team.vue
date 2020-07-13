<template>
<div class="row">
<div class="col-sm-12">
    <div class="col-sm-9" ><span>{{Header}} </span><img :src="'/Team/'+url"  height="80" width="100" @click=pick()></div>
    <br><br>
   
    <div class="col-sm-6" style="float:left">   
         <span>Team1</span>  
          <div class="card">   
             
               <div class="card-header">{{this.team.name}}</div>
                <div class="card-body"><img :src="'/Team/'+team.id+'/'+team.logo_uri" alt="profile Pic" height="150" width="150"></div>      
                      
    </div>
    </div>
    <div class="col-sm-3"  style="float:left"></div>
     <div class="col-sm-6" style="float:left">  
          <span>Team2</span>    
          <div class="card"> 
                 
               <div class="card-header">{{name}}</div>
                <div class="card-body"><img :src="'/Team/'+team2img" alt="profile Pic" height="120" width="120"></div>      
                       
                      
    </div>
     </div>
</div>
     <div class="footer col-sm-4"><button class="btn btn-primary" @click="startMatch">Start</button></div>
</div>
                        
</template>
import axios from 'axios'
<script>
    export default {
        props:['team','title'],
        data:function(){
            return{
                "Header":"Pick Your Opponent Team",
                "name":'',
                "url":"thumb.png",
                'team2img':'dummy.png',
                "team2":null
            }
        },
        created(){

        },
        mounted() {
            console.log('Component mounted.',this.team)
        },
        methods:{
            pick(){
                 axios.get( '/admin/pick-team/'+this.team.id)
                .then(response => {
                    console.log(response)
                    this.name = response.data.data.name
                    this.team2img= response.data.data.id+'/'+response.data.data.logo_uri
                    this.isLoading = false
                    this.team2=response.data.data
                   
                })
                .catch(error => {
                    // handle authentication and validation errors here
                    this.errors = error.response.data.errors
                    this.isLoading = false
                })
            },
            startMatch(){
                if(this.team.id && this.team2){
                   
                    axios.post( '/admin/match',{"team_1":this.team.id,"team_2":this.team2.id})
                .then(response => {
                    console.log(response)
                    this.name = response.data.data.name
                    this.team2img= response.data.data.id+'/'+response.data.data.logo_uri
                    this.isLoading = false
                    this.team2=response.data.data.id
                    window.location.href='/admin/match'
                   
                })
                .catch(error => {
                    // handle authentication and validation errors here
                    this.errors = error.response.data.errors
                    this.isLoading = false
                })
                }else{
                    alert("please select both teams")
                }
                 
            }
        }
    }
</script>
<style scoped>
.footer{
    margin-top:20px
}
</style>