<template>
  <div class="mt-10 mx-16">
    <swiper :options="swiperOption" class="mb-16" >
        <swiper-slide>
          <testimonial />
        </swiper-slide>
        <swiper-slide>
          <testimonial />
        </swiper-slide>
        <swiper-slide>
          <testimonial />
        </swiper-slide>
        <swiper-slide>
          <testimonial />
        </swiper-slide>
        <swiper-slide>
          <testimonial />
        </swiper-slide>
      </swiper>
      <div class="swiper-button-prev" slot="button-prev"></div>
      <div class="swiper-button-next" slot="button-next"></div>
  </div>
</template>

<script>
import Testimonial from './Testimonial'
import { swiper, swiperSlide } from 'vue-awesome-swiper'
export default {
  data () {
    return {
      swiperOption: {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }
      }
    }
  },
  components: {
    Testimonial,
    swiper,
    swiperSlide
  }
}
</script>
