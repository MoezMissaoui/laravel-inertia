<template>

    <div class="flex mb-5">
        <Link href="/" class="m-2"> Index Page </Link>
        <br>
        <Link href="/show" class="m-2"> Show Page </Link>
    </div>

    <slot></slot>
</template>


<script setup>
    import { Link } from "@inertiajs/vue3";
</script>