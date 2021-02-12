<template>
    <section aria-labelledby="primary-heading"
             class="min-w-0 hh-16 flex flex-col overflow-hidden">
        <h1 id="primary-heading" class="sr-only">Dashboard</h1>
        <div class="h-16 flex items-center md:items-stretch  bg-white">
            <div class="space-x-4 sm:ml-6 sm:flex sm:space-x-8">
                <inertia-link v-for="(item,index) in data" :key="`link-${index}`"
                    :href="item.href"
                              class="pl-4 md:pl-0    inline-flex items-center px-1 pt-1 md:border-b-2 text-sm font-medium"
                              :class="`/${route}` == item.href ? 'text-primary md:border-primary md:text-gray-900': 'md:border-transparent text-gray-500 hover:border-gray-300'"
                >
                    {{item.title}}
                </inertia-link>
<!--                <inertia-link href="#"-->
<!--                              class="pl-4 md:pl-0 text-primary md:border-primary md:text-gray-900 inline-flex items-center px-1 pt-1 md:border-b-2 text-sm font-medium">-->
<!--                    Overzicht-->
<!--                </inertia-link>-->
<!--                <inertia-link href="#"-->
<!--                              class="md:border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 md:border-b-2 text-sm font-medium">-->
<!--                    Taken-->
<!--                </inertia-link>-->
<!--                <inertia-link href="#"-->
<!--                              class="md:border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 md:border-b-2 text-sm font-medium">-->
<!--                    Activiteiten-->
<!--                </inertia-link>-->
            </div>
        </div>
    </section>
</template>
<script>
export default {
    props: ['data','route'],

}
</script>
