import { createStore } from 'vuex'

export default createStore({
     state(){
        return{
          preLoader:false,
          error: null,

        }

     },
     mutations:{

        changePreLoader(state, newValue){
            state.preLoader = newValue
        },
        changeEror(state, newValue){
            state.error = newValue
        }
     },
     actions:{
        incrementAsync(context){
            setTimeout(()=>{
                context.commit('counterAddOne',10)
            },1000)
        }
     }
})
