<template>
  <div>
    <PageHeader :title="infos.title" :subtitle="infos.description" />
    <Container class="py-12">
      <div
        class="mx-auto prose text-justify sm:max-w-3xl md:prose-lg md:max-w-4xl lg:prose-xl lg:max-w-6xl"
      >
        <nuxt-content :document="content" />
      </div>
    </Container>
  </div>
</template>

<script>
import infos from "@/assets/content/faq.json";

export default {
  data() {
    return {
      infos: infos
    };
  },
  head() {
    return {
      title: this.infos.title,
      meta: [
        {
          name: "description",
          hid: "description",
          content: this.infos.description
        }
      ]
    };
  },
  async asyncData({ $content, params }) {
    const files = await $content().fetch(),
      content = files[0];
    console.log(content);
    return { content };
  }
};
</script>

<style>
.nuxt-content h1,
.nuxt-content h2,
.nuxt-content h3,
.nuxt-content h4,
.nuxt-content h5,
.nuxt-content h6 {
  @apply text-left;
}
</style>
