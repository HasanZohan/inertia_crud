<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({ users: Object })
</script>

<template>
  <Layout>
    <Head title="Welcome" />
    <h1>Welcome</h1>
    <p>Hello {{ users }}, welcome to your first Inertia app!</p>
  </Layout>
</template>