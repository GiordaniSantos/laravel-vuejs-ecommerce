<template>
    <div class="min-w-[160px] w-[160px]  transition-all bg-indigo-700 text-white py-4 px-2">
      <router-link :to="{name: 'app.dashboard'}"
                   class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
        <span class="mr-2 text-gray-300">
          <HomeIcon class="w-5"/>
        </span>
        <span class="text-xs">
          Dashboard
        </span>
      </router-link>
      <router-link :to="{name: 'app.products'}"
                   class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
        <span class="mr-2 text-gray-300">
          <ViewColumnsIcon class="w-5"/>
        </span>
        <span class="text-xs">
          Produtos
        </span>
      </router-link>
      <router-link :to="{name: 'app.orders'}"
                   class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
        <span class="mr-2 text-gray-300">
          <ViewColumnsIcon class="w-5"/>
        </span>
        <span class="text-xs">
          Pedidos
        </span>
      </router-link>
      <router-link to=""
                   class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
        <span class="mr-2 text-gray-300">
          <UsersIcon class="w-5"/>
        </span>
        <span class="text-xs">
          Usuários
        </span>
      </router-link>
      <router-link :to="{name: 'app.customers'}"
                   class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
        <span class="mr-2 text-gray-300">
          <UserGroupIcon class="w-5"/>
        </span>
        <span class="text-xs">
          Clientes
        </span>
      </router-link>
      <router-link :to="{name: 'reports.orders'}"
                   class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
        <span class="mr-2 text-gray-300">
          <ChartBarIcon class="w-5"/>
        </span>
        <span class="text-xs">
          Relatórios
        </span>
      </router-link>
    </div>
  </template>
  
  <script setup>
    import {HomeIcon, UserGroupIcon, ViewColumnsIcon, UsersIcon, ChartBarIcon} from '@heroicons/vue/24/outline'

  </script>
  
  <style scoped>
  
  </style>