<template>
    <span class="text-white py-1 px-2 rounded " :class="{
        'bg-emerald-500': ['pago', 'concluído'].includes(order.status),
        'bg-orange-400': order.status === 'enviado',
        'bg-red-500': order.status === 'cancelado',
        'bg-gray-400': order.status === 'não pago',
      }">{{ order.status }}</span>
  </template>
  
  <script setup>
  const {order} = defineProps({
    order: Object
  })
  </script>
  
  <style scoped>
  
  </style>
  