<template>
    <app-customer></app-customer>
     <app-bill></app-bill>
</template>

<script>
import AppCustomer from './AppCustomer.vue'
import AppBill from './AppBill.vue'


export default {
    components: { AppCustomer, AppBill},
}
</script>
