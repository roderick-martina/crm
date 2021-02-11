<template>
    <header class="flex-shrink-0 relative h-16 bg-white flex items-center">
        <!-- Logo area -->
        <div class="absolute inset-y-0 left-0 md:static md:flex-shrink-0 md:w-44">
            <a href="#"
               class="flex items-center justify-center h-16 w-16 bg-primary focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600 md:w-full">
                <!--                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"-->
                <!--                     alt="Workflow">-->
                <span class="font-bold text-white uppercase">Logo</span>
            </a>
        </div>

        <!-- Picker area -->
        <div class="mx-auto md:hidden">
            <p>Dashboard</p>
        </div>

        <!-- Menu button area -->
        <div class="absolute inset-y-0 right-0 pr-4 flex items-center sm:pr-6 md:hidden">
            <!-- Mobile menu button -->
            <button @click="toggleMobileNav" type="button"
                    class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600"
                    aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Desktop nav area -->
        <div class="hidden md:min-w-0 md:flex-1 md:flex md:items-center md:justify-between">
            <div class="min-w-0 flex-1">
                <div class="max-w-2xl relative text-gray-400 focus-within:text-gray-500">
                    <h1 class="pl-6 text-lg font-medium leading-6 text-gray-900 sm:truncate">Dashboard</h1>
                </div>
            </div>
            <div class="ml-10 pr-4 flex-shrink-0 flex items-center space-x-10">
                <div class="flex items-center space-x-6">
                      <span class="inline-flex">
                        <a href="#" class="-mx-1 bg-white p-1 rounded-full text-gray-400 hover:text-gray-500">
                          <span class="sr-only">View search</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </a>
                      </span>
                    <span class="inline-flex">
            <a href="#" class="-mx-1 bg-white p-1 rounded-full text-gray-400 hover:text-gray-500">
              <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
              </svg>
            </a>
          </span>

                    <div class="relative inline-block text-left">
                        <button
                            @click="toggleProfile"
                            class="max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:bg-gray-100 lg:p-2 lg:rounded-md lg:hover:bg-gray-100"
                            id="user-menu" aria-label="User menu" aria-haspopup="true">
                            <p class="hidden ml-2 text-sm font-medium text-gray-900 text-sm leading-5 font-medium lg:block">
                                {{ auth.user.name }}</p>
                            <!--  Heroicon name: chevron-down-->
                            <svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-cool-gray-400 lg:block"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clipRule="evenodd"/>
                            </svg>
                        </button>

                        <transition
                            enter-active-class="transition ease-out duration-100"
                            enter-class="transform opacity-0 scale-95"
                            enter-to-class="transform opacity-100 scale-100"
                            leave-active-class="transition ease-in duration-75"
                            leave-class="transform opacity-100 scale-100"
                            leave-to-class="transform opacity-0 scale-95"
                        >
                            <div v-show="profileOpen"
                                 class="origin-top-right absolute z-30 right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                 role="menu" aria-orientation="vertical" aria-labelledby="menu-1">
                                <div class="py-1">
                                    <inertia-link href="#"
                                                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100"
                                                  role="menuitem">
                                        Jouw profiel
                                    </inertia-link>
                                    <button @click="logout"
                                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100"
                                            role="menuitem">
                                        Sign Out
                                    </button>
                                </div>
                            </div>
                        </transition>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide this `div` based on menu open/closed state -->
        <div :class="mobileNavOpen ? 'pointer-events-auto' : 'pointer-events-none'" class="fixed inset-0 z-40">
            <transition
                enter-active-class="transition-opacity ease-linear duration-300"
                enter-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="transition-opacity ease-linear duration-300"
                leave-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div v-show="mobileNavOpen" class="hidden sm:block sm:fixed sm:inset-0 md:hidden"
                     aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
                </div>
            </transition>

            <!--  Mobile menu, toggle classes based on menu state.  -->
            <transition
                enter-active-class="transition ease-out duration-150 sm:ease-in-out sm:duration-300"
                enter-class="transform opacity-0 scale-110 sm:translate-x-full sm:scale-100 sm:opacity-100"
                enter-to-class="transform opacity-100 scale-100  sm:translate-x-0 sm:scale-100 sm:opacity-100"
                leave-active-class="transition ease-in duration-150 sm:ease-in-out sm:duration-300"
                leave-class="transform opacity-100 scale-100 sm:translate-x-0 sm:scale-100 sm:opacity-100"
                leave-to-class="transform opacity-0 scale-110  sm:translate-x-full sm:scale-100 sm:opacity-100"
            >
                <nav v-show="mobileNavOpen"
                     class="fixed z-40 inset-0 h-full w-full bg-white sm:inset-y-0 sm:left-auto sm:right-0 sm:max-w-sm sm:w-full sm:shadow-lg md:hidden"
                     aria-label="Global">
                    <div class="h-16 flex items-center justify-between px-4 sm:px-6">
                        <!--                        <a href="#">-->
                        <!--                            <img class="block h-8 w-auto"-->
                        <!--                                 src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=500"-->
                        <!--                                 alt="Workflow">-->
                        <!--                        </a>-->
                        <button @click="toggleMobileNav"
                                type="button"
                                class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600"
                                aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <div class="mt-2 max-w-8xl mx-auto px-4 sm:px-6">
                        <div class="relative text-gray-400 focus-within:text-gray-500">
                            <label for="search" class="sr-only">Search all inboxes</label>
                            <input id="search-mobile" type="search" placeholder="Zoeken"
                                   class="block w-full border-gray-300 rounded-md pl-10 placeholder-gray-500 focus:border-indigo-600 focus:ring-indigo-600">
                            <div class="absolute inset-y-0 left-0 flex items-center justify-center pl-3">
                                <!-- Heroicon name: solid/search -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-8xl mx-auto py-3 px-2 sm:px-4">
                        <inertia-link href="#"
                                      class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">
                            Dashboard
                        </inertia-link>

                        <inertia-link href="#"
                                      class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">
                            Projecten
                        </inertia-link>

                        <inertia-link href="#"
                                      class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">
                            Tickets
                        </inertia-link>
                        <inertia-link href="#"
                                      class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">
                            Facturen
                        </inertia-link>
                        <inertia-link href="#"
                                      class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">
                            Academy
                        </inertia-link>
                        <inertia-link href="#"
                                      class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">
                            Instellingen
                        </inertia-link>
                        <!--                        list example start-->
                        <!--                        <a href="#"-->
                        <!--                           class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">list</a>-->

                        <!--                        <a href="#"-->
                        <!--                           class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">item 1-->
                        <!--                            Support</a>-->

                        <!--                        <a href="#"-->
                        <!--                           class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">item 2</a>-->

                        <!--                        <a href="#"-->
                        <!--                           class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">item 3</a>-->
                        <!--                        list example end-->
                    </div>
                    <div class="border-t border-gray-200 pt-4 pb-3">
                        <div class="max-w-8xl mx-auto px-4 flex items-center sm:px-6">
                            <div class="flex-shrink-0">
                                <!--                                <img class="h-10 w-10 rounded-full"-->
                                <!--                                     src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"-->
                                <!--                                     alt="">-->
                            </div>
                            <div class="ml-3 min-w-0 flex-1">
                                <div class="text-base font-medium text-gray-800 truncate">Super Admin</div>
                                <div class="text-sm font-medium text-gray-500 truncate">admin@sqits.com
                                </div>
                            </div>
                            <a href="#"
                               class="ml-auto flex-shrink-0 bg-white p-2 text-gray-400 hover:text-gray-500">
                                <span class="sr-only">View notifications</span>
                                <!-- Heroicon name: outline/bell -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                                </svg>
                            </a>
                        </div>
                        <div class="mt-3 max-w-8xl mx-auto px-2 space-y-1 sm:px-4">
                            <inertia-link href="#"
                                          class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50">
                                Jouw profiel
                            </inertia-link>
                            <button @click="logout()"
                                    class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50">
                                Sign out
                            </button>
                        </div>
                    </div>
                </nav>
            </transition>
        </div>
    </header>
</template>
<script>
import axios from "axios";

export default {
    props: ['auth'],
    data() {
        return {
            profileOpen: false,
            mobileNavOpen: false,
        }
    },
    methods: {
        toggleProfile() {
            this.profileOpen = !this.profileOpen
        },
        toggleMobileNav() {
            this.mobileNavOpen = !this.mobileNavOpen
        },
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
