<template>
    <NestedLayout :auth="auth" :title="parent_route_name" :title_translated="parent_route_name_translated">
        <h1>Dit is de tickets pagina</h1>
    </NestedLayout>
</template>

<script>
import NestedLayout from "@/Shared/NestedLayout";
import Sidebar from '@/Components/Sidebar'
import AppHeader from '@/Components/AppHeader'
import MobileNav from '@/Components/MobileNav'
import SubNavigation from "@/Components/SubNavigation";

export default {
    components: {
        NestedLayout,
        Sidebar,
        AppHeader,
        MobileNav,
        SubNavigation
    },
    props: ['auth', 'parent_route_name', 'parent_route_name_translated', 'route'],
    data() {
        return {}
    },
    methods: {}
};
</script>

<style></style>
