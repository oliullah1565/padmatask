<template>
    <div class="pdt-display section_padding">
        <div class="pdt-container pdt_lists">
            <div class="pdt_add" v-if="UserId">
                <router-link to="/bill/add" class="link">Bill Add</router-link>
            </div>
            <div class="items">
                        <table id="customers">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Month</th>
                                <th>Year</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(data,index) in get_data" :key="index">
                                    <td>{{ data.id }}</td>
                                    <td>{{ data.cusid }}</td>
                                    <td>{{ data.bill_month }}</td>
                                    <td>{{ data.amount }}</td>
                                    <td>
                                        <button class="button1" @click="deleteProduct(data.id)">Delete</button>
                                    </td>
                                  
                                </tr>
                            </tbody>
                        </table>
                
            </div>
        </div>
    </div>
</template>

<script>
import { onMounted, ref } from 'vue';
import API from './composible/api.js'

export default {
    setup(){
        const UserId = localStorage.getItem("UserId");
        const get_data = ref([]);

        onMounted(async() => {
            const result = await API.billall();
            get_data.value = result.data;
                
        })

        return {
            UserId,
            get_data,
        }
    },
    methods: {
         
            deleteProduct(productId) {
                this.axios
                    .delete(`http://127.0.0.1:8000/api/billdelete/${productId}`)
                    .then(
                       

                    );
            }
        }
}
</script>
