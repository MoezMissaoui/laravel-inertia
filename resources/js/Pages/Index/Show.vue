<template>
    <div class="grid grid-cols-2">
        <div class="col-span-1">
            <h1 class="text-3xl font-bold underline mb-5">
                {{ message }}
            </h1>
        </div>
        <div class="col-span-1">
            <Link href="/"> Index Page </Link>
        </div>
    </div>
</template>

<script setup>
    import { Link } from "@inertiajs/vue3";

    defineProps({
        message: {
            type: String,
            required: true
        }
    })
</script>
