<style lang="sass">
@import "../utils/slider.sass"
</style>
<template>
  <div>
    <div class="slider">
      <slider ref="slider" :pages="someList" :sliderinit="sliderinit" @slide='slide' @tap='onTap' @init='onInit'>
        <div slot="loading">
          <div class="loadingDot">
            <i></i>
            <i></i>
            <i></i>
            <i></i>
          </div>
        </div>
      </slider>
    </div>
    <div class="sliderButton">
      <button class="prev" @click="slidePre"><i class="mdi mdi-chevron-left"></i></button>
      <button class="next" @click="slideNext"><i class="mdi mdi-chevron-right"></i></button>
    </div>
  </div>
</template>
<script>
import slider from '../components/slider'
export default {
  el: '#homepage-first-slider',
  data () {
    return {
      someList: [],
      sliderinit: {
        // currentPage: 1,
        // thresholdDistance: 100,
        // thresholdTime: 300,
        // duration: 300,
        // timingFunction: 'ease',
        loop: true,
        // autoplay: 5600 // [ms]
      }
    }
  },
  mounted () {
    let that = this
    setTimeout(function () {
      that.someList = [
        {
					html: '<img class="slide img-responsive" src="/images/products/01.jpg"><div class="slider-item-content"><p class="label">Pure Cycles</p><p class="heading">Горный велосипед Veleta / 16 Speed</p><a class="item-link" href="#">Подробнее <i class="mdi mdi-chevron-right"></i></a></div>',
        },
        {
          html: '<img class="slide img-responsive" src="/images/products/02.jpg"><div class="slider-item-content"><p class="label">Premium Fixed Gear</p><p class="heading">Велосипед Cleveland</p><a class="item-link" href="#">Подробнее <i class="mdi mdi-chevron-right"></i></a></div>',
        },
        {
          html: '<img class="slide img-responsive" src="/images/products/03.jpg"><div class="slider-item-content"><p class="label">Pure Fix Original</p><p class="heading">Велосипед Viktor</p><a class="item-link" href="#">Подробнее <i class="mdi mdi-chevron-right"></i></a></div>',
        },
        {
          html: '<img class="slide img-responsive" src="/images/products/04.jpg"><div class="slider-item-content"><p class="label">Small / Wright</p><p class="heading">Urban Commuter Bike</p><a class="item-link" href="#">Подробнее <i class="mdi mdi-chevron-right"></i></a></div>',
        }
      ]
    }, 2000)
  },
  components: {
    slider
  },
  methods: {
    turnTo (num) {
      // 传递事件 vue 2.0 传递事件修改了，好的写法应该直接写在空vue类中
      this.$refs.slider.$emit('slideTo', num)
    },
    slideNext () {
      this.$refs.slider.$emit('slideNext')
      // slider.$emit('slideNext')
    },
    slidePre () {
      this.$refs.slider.$emit('slidePre')
      // slider.$emit('slidePre')
    },
    autoplayStart () {
      this.$refs.slider.$emit('autoplayStart')
      // slider.$emit('slidePre')
    },
    autoplayStop () {
      this.$refs.slider.$emit('autoplayStop')
      // slider.$emit('slidePre')
    },
    loadingShow () {
      this.$refs.slider.$emit('loadingShow')
      // slider.$emit('slidePre')
    },
    loadingHide () {
      this.$refs.slider.$emit('loadingHide')
      // slider.$emit('slidePre')
    },
    appendslider () {
      this.someList.push({
        html: 'slidernew',
        style: {
          background: '#333',
          color: '#fff'
        }
      })
    },
    // 监听事件发生了变化,需要指向一个子组件实例
    slide (data) {
      console.log(data)
    },
    onTap (data) {
      console.log(data)
    },
    onInit (data) {
      console.log(data)
    }
  }
}
</script>
