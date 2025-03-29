import { createStore } from 'vuex'

export default createStore({
     state(){
        return{
          preLoader:false,

        }

     },
     mutations:{

        changePreLoader(state, newValue){
            state.preLoader = newValue
        },

     },
     actions:{
        incrementAsync(context){
            setTimeout(()=>{
                context.commit('counterAddOne',10)
            },1000)
        }
     }
})
