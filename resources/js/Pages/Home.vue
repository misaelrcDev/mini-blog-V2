<script setup>
    import BlogLayout from "../Layouts/BlogLayout.vue";
    import { Link } from "@inertiajs/vue3";

    defineProps({
    articles: Object,
  });
</script>

<template>
    <BlogLayout>
        <h2 class="text-2xl font-bold py-10">Read our latest articles</h2>

    <section class="space-y-5 border-b-2 pb-10">
      <article
        v-for="article in articles"
        :key="article.id"
        class="flex justify-center items-center shadow-md bg-white rounded-xl p-4 mx-auto max-w-3xl"
      >

         <img
            src="https://via.placeholder.com/72"
            class="w-32 h-32 rounded-xl object-cover"
            alt=""
         />

        <div class="flex flex-col text-left justify-between pl-3 space-y-5">
          <h3
            class="text-xl font-semibold text-indigo-600 hover:text-indigo-800"
          >
          <Link :href="route('article.show', article.id)">
            {{ article.title }}
            </Link>
          </h3>
          <p>
           {{ article.excerpt }}
          </p>
            <Link
                :href="'/posts/' + article.id"
                class="text-indigo-600 hover:text-indigo-800 w-fit self-end font-semibold"
                >Read more
            </Link>
        </div>
      </article>
    </section>
    </BlogLayout>
</template>



