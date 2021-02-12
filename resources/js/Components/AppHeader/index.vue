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
            <p class="capitalize">{{title_translated}}</p>
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
                    <h1 class="pl-6 capitalize text-lg font-medium leading-6 text-gray-900 sm:truncate">{{title_translated}}</h1>
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

                    <div   v-click-outside="hideProfile" class="relative inline-block text-left">
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
                                    <inertia-link href="/profile"
                                                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100"
                                                  role="menuitem">
                                        Jouw profiel
                                    </inertia-link>
                                    <button @click="logout"
                                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100"
                                            role="menuitem">
                                       Uitloggen
                                    </button>
                                </div>
                            </div>
                        </transition>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>
<script>
import axios from "axios";

export default {
    props: ['auth', 'title_translated', 'toggleMobileNav'],
    data() {
        return {
            profileOpen: false,
        }
    },
    methods: {
        toggleProfile() {
            this.profileOpen = !this.profileOpen
        },
        hideProfile() {
            this.profileOpen = false
        },
        logout() {
            axios.post('/logout')
                .then(() => {
                    window.location.href = '/'
                })
        }
    },

};
</script>
<style></style>
