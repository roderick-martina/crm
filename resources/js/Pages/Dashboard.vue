<template>
<!--    <div>-->
<!--        <h1>dit is de dashboard</h1>-->
<!--        <button-->
<!--            class="border bg-blue-500 text-white py-3 px-4 rounded-lg"-->
<!--            @click="logout()"-->
<!--        >-->
<!--            Uitloggen-->
<!--        </button>-->
<!--    </div>-->
</template>

<script>
import axios from 'axios'

export default {
    methods: {
        logout() {
            axios.post('/logout')
                .then(() => {
                    window.location.href = '/'
                })
        }
    }
};
</script>

<style></style>
