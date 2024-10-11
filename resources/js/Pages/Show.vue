<script setup>
import BlogLayout from "../Layouts/BlogLayout.vue";

defineProps({
    article: Object,
});
</script>

<template>
    <BlogLayout>
        <article class="mx-auto mt-10 flex justify-center max-w-5xl border-b-2">
            <img
                src="https://via.placeholder.com/400"
                class="w-80 h-80 rounded-xl mx-auto py-5"
                alt=""
            />
            <div class="text-left flex flex-col pt-5 pb-10 px-10">
                <h1 class="text-xl font-semibold mb-10">{{ article.title }}</h1>
                <p>{{ article.body }}</p>
                <button @click="$inertia.visit(route('home'))" class="mt-5 px-5 py-2 bg-gray-300 rounded-md">Back to Homepage</button>
            </div>
        </article>
    </BlogLayout>
</template>