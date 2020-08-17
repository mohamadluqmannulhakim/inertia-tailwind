<template>
  <div>
    Hi there {{ currUser.name }}
    <a
      href="#"
      @click="logout()"
      class="font-medium text-purple-600 hover:text-purple-500 focus:outline-none focus:underline transition ease-in-out duration-150"
    >( Log Out )</a>
  </div>
</template>

<script>
export default {
  props: ["currUser"],
  components: {},
  data() {
    return {};
  },
  methods: {
    logout() {
      this.$inertia.post("/logout").then(() => {});
    },
  },
};
</script>

<style>
</style>