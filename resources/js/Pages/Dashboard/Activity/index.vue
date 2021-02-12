<template>
    <NestedLayout :auth="auth" :title="parent_route_name" :title_translated="parent_route_name_translated">
        <template slot="navigation">
            <SubNavigation :data="navigationData" :route="route"/>
        </template>
        <h1>Dit is de dashboard activiteit pagina</h1>
    </NestedLayout>
</template>

<script>
import NestedLayout from "@/Shared/NestedLayout";
import Sidebar from '@/Components/Sidebar'
import AppHeader from '@/Components/AppHeader'
import MobileNav from '@/Components/MobileNav'
import SubNavigation from "@/Components/SubNavigation";
import NavData from '@/Content/Navigation/Dashboard'

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
        return {
            navigationData: NavData.data
        }
    },
    methods: {}
};
</script>

<style></style>
