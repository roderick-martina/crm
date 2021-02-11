<template>
    <div class="h-screen overflow-hidden bg-gray-100 flex flex-col">

        <!-- Top nav-->
        <AppHeader :auth="auth"/>

        <!-- Bottom section -->
        <div class="min-h-0 flex-1 flex overflow-hidden">
            <!-- Narrow sidebar-->
            <Sidebar :auth="auth"/>


            <!-- Main area -->
            <main class="min-w-0 flex-1 border-t border-gray-200 lg:flex">
                <!-- Primary column -->
                <section aria-labelledby="primary-heading"
                         class="min-w-0 flex-1 h-full flex flex-col overflow-hidden lg:order-last">
                    <h1 id="primary-heading" class="sr-only">Dashboard</h1>
                    <div class="h-16 flex items-center md:items-stretch  bg-white">
                        <div class="space-x-4 sm:ml-6 sm:flex sm:space-x-8">
                            <inertia-link href="#"
                               class="pl-4 md:pl-0 text-primary md:border-primary md:text-gray-900 inline-flex items-center px-1 pt-1 md:border-b-2 text-sm font-medium">
                                Overzicht
                            </inertia-link>
                            <inertia-link href="#"
                               class="md:border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 md:border-b-2 text-sm font-medium">
                                Taken
                            </inertia-link>
                            <inertia-link href="#"
                               class="md:border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 md:border-b-2 text-sm font-medium">
                                Activiteiten
                            </inertia-link>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

import Sidebar from '@/Components/Sidebar'
import AppHeader from '@/Components/AppHeader'

export default {
    components: {
        Sidebar,
        AppHeader
    },
    props: ['auth'],
    data() {
        return {}
    },
    methods: {}
};
</script>

<style></style>
