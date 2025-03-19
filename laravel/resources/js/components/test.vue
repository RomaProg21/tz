<template>
    {{ test }}
    <button @click="funcTest">Жми</button>
</template>

<script setup>
import { ref } from "vue";
const test = ref('123')

function funcTest(){
    test.value +='1'
}
</script>