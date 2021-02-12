<template>
    <Layout>
        <!-- Top nav-->
        <AppHeader :auth="auth" :title_translated="title_translated" :toggleMobileNav="toggleMobileNav"/>

        <!-- Mobile nav -->
        <MobileNav :mobileNavOpen="mobileNavOpen" :toggleMobileNav="toggleMobileNav" />

        <!-- Bottom section -->
        <div class="min-h-0 flex-1 flex overflow-hidden">
            <!-- Narrow sidebar-->
            <Sidebar :auth="auth" :title="title"/>

            <!-- Main area -->
            <main class="min-w-0 flex-1 flex flex-col border-t border-gray-200">
                <!-- Primary column -->
                <slot name="navigation" />
                <section class="mx-6 mt-4">
                    <slot />
                </section>
            </main>
        </div>
    </Layout>
</template>
<script>
import Layout from '@/Shared/Layout'
import AppHeader from '@/Components/AppHeader'
import MobileNav from '@/Components/MobileNav'
import Sidebar from '@/Components/Sidebar'
export default {
    props: ['auth', 'title', 'title_translated'],
    components: {
        Layout,
        AppHeader,
        MobileNav,
        Sidebar
    },
    data() {
        return {
            mobileNavOpen: false,
        }
    },
    methods: {
        toggleMobileNav() {
            this.mobileNavOpen = !this.mobileNavOpen
        },
    }
}
</script>
