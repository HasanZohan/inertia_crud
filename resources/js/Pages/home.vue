<template>
  <h1>Hi {{ user }}, this is home component</h1>
  <Link href="/">Home</Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({ user: String })
</script>

<style>

</style>