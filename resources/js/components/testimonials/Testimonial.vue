<template>
  <div class="tw-flex tw-border tw-p-6 tw-font-light tw-text-center tw-text-xl" :class="background">
    <div>
          <p class="tw-z-1 tw-relative">
            <span class="quote"></span>
            Occaecat officia proident elit commodo deserunt consectetur culpa duis cillum dolore incididunt voluptate et. Deserunt dolor consequat occaecat id esse eu est officia esse est.
            <span class="quote invert"></span>
          </p>
      <h4 class="tw-text-white tw-my-4 tw-py-2 tw-italic tw-font-normal">Adele, Patient </h4>
      <div class="stars tw-w-2/3 tw-m-auto tw-border-t tw-border-b tw-py-2">
        <vue-stars
          name="demo"
          :active-color="'#ffffff'"
          :inactive-color="'#d99e88'"
          :shadow-color= background
          :hover-color="'#dddd00'"
          :max="stars.max"
          :value="stars.value"
          :readonly="stars.read"
          @input="calificacion" />
      </div>
    </div>
  </div>
</template>

<script>
import { VueStars } from "vue-stars"
export default {
  props: ['background'],
  components: {
    VueStars
  },
  data () {
    return {
      stars: {
        max: 5,
        value: Math.floor((Math.random() * 5) + 1),
        read: true
      }
    }
  },
  methods: {
    calificacion (e) {
      console.log(e)
    }
  }
}
</script>
