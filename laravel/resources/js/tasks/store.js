import { createStore } from 'vuex'

export default createStore({
     state(){
        return{
          preLoader:false,

        }

     },
     mutations:{

        editShowModal(state,newValue){
            state.showModal = newValue
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
